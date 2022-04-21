<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\type_room;
use App\Models\transaction;
use App\Models\payment;
use App\Models\logActivity;
use App\Models\Bukti;
use Carbon\Carbon;
use PDF;
use Auth;

class CustomerController extends Controller
{
    public function pesanKamar(Request $request, $id)
    {
        $request->validate([
            'many_room' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        if (Auth::check()) {
            $hargKamar = type_room::find($id)->first();
              $date = Carbon::now();

            $check_in = Carbon::parse($request->check_in);
            $check_out = Carbon::parse($request->check_out);
            $jumlah = $check_in->diffInDays($request->check_out);

            $many_room = $request->many_room;
            $dataKamar = room::where('type_id', $id)->where('status', '=', 'v')->get()->take($many_room);

            foreach ($dataKamar as $val) {
                $dtKamar[] = $val->id;
                $nomorKamar[] = $val->number;
                room::find($val->id)->update(['status' => 'r']);
            }

            if($dataKamar != NUll){
                $idKamar = implode(', ', $dtKamar);
                $noKamar = implode(', ', $nomorKamar);
            }else {
                $idKamar = 'error';
            }

            $random = mt_rand(100, 999);
            $totalHarga = $jumlah * $hargKamar->price * $many_room + $random ;

            $pesan = transaction::create([
                'user_id' => Auth::user()->id,
                'room_id' => $idKamar,
                'many_room' => $request->many_room,
                'check_in' => $check_in,
                'check_out' => $check_out,
            ]);

            $payment = payment::create([
                'user_id' => Auth::user()->id,
                'transaction_id' => $pesan->id,
                'price' => $totalHarga,
            ]);

            $log = logActivity::create([
                'user_id' => Auth::user()->id,
                'transaction_id' => $pesan->id,
                'informaiton' => 'Anda telah melakukan booked dengan id transaksi' . ' ' . $pesan->id . ' ' . 'pada waktu' . ' ' . $pesan->created_at ,
            ]);

            if($pesan && $payment){
                return redirect()->route('payment');
            }
            return redirect()->route('type_room');
        }else{
            return redirect()->route('login');
        }
    }


    public function pay()
    {
        $transaction = transaction::where('user_id', Auth::user()->id, 'AND')->where('status', '=', 'waiting for payment')->latest('created_at')->first();
        $pay = payment::where('transaction_id', $transaction->id)->first();
        $totalHarga = $pay->price;
        $jumlahPesanan = $transaction->many_room;
        $idKamar = explode(', ', $transaction->room_id);

        $kamar = room::whereIn('id', $idKamar)->get();
        $type = type_room::where('id' , $kamar[0]->type_id)->first();
        foreach ($kamar as $val) {
            $nomorKamar[] = $val->number;
        }
        $nomorKamar = implode(', ', $nomorKamar);

        return view('customer.pay', compact('nomorKamar', 'totalHarga', 'jumlahPesanan', 'type', 'pay'));
    }

    public function payAll()
    {
        $transaction = transaction::where('user_id', Auth::user()->id, 'AND')->where('status', '=', 'waiting for payment')->get();
        $totalHarga = 0;
        foreach($transaction as $val) {
            $payment = payment::where('transaction_id', $val->id)->first();
            $totalHarga += $payment->price;
        }

        return view('customer.invoice', compact('totalHarga'));
    }

    public function invoice()
    {
        $transaction = transaction::where('user_id', Auth::user()->id, 'AND')->where('status', '=', 'waiting for payment')->latest('created_at')->first();
        $payment = payment::where('transaction_id', $transaction->id)->first();
        $totalHarga = $payment->price;

        return view('customer.invoice', compact('totalHarga'));
    }

    public function listTransaction()
    {
        $listTransaksi = transaction::where('user_id', Auth::user()->id)->orderBy('updated_at', 'asc')->get();
        return view('customer.listTransaction', compact('listTransaksi'));
    }

    public function log()
    {
        $data = logActivity::where('user_id', '=' ,Auth::user()->id)->get();
        return view('customer.log', compact('data'));
    }

    public function transactionPay($id)
    {
        $transaction = transaction::find($id);
        $payment = payment::where('transaction_id', $transaction->id)->first();
        $totalHarga  = $payment->price;
        return view('customer.invoice', compact('totalHarga', 'transaction'));
    }

    public function cencelTransaction($id)
    {
        $data = transaction::find($id);
        $data->update(['status'=>'cenceled']);

        $idKamar = explode(', ',$data->room_id);
        $dataKamar = room::whereIn('id', $idKamar)->get();
        foreach ($dataKamar as $val) {
            room::find($val->id)->update(['status' => 'v']);
        }

        return redirect()->route('listTransaction');
    }

    public function buktiPembayaran($id)
    {
        $buktiPembayaran = transaction::find($id);
        return view('customer.bukti', compact('buktiPembayaran'));
    }

    public function cetakPdf($id)
    {
    	$buktiPembayaran = transaction::find($id);

    	$pdf = PDF::loadview('pdf.bukti', compact('buktiPembayaran'));
    	return $pdf->download('bukti-pembayaran.pdf');
    }

    public function uploadProof(Request $request, $id)
    {
        $imgname = $request->bukti_pembayaran->getClientOriginalName();
        $request->bukti_pembayaran->move(public_path('bukti'), $imgname);

        $data = transaction::where('id', $id)->update([
            'status' => 'process',
            'bukti_pembayaran' => $imgname
        ]);

        $transaction  = transaction::find($id);

        $log = logActivity::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $transaction->id,
            'informaiton' => 'Anda telah melakukan pengiriman bukti pembayaran pada waktu' . ' ' . $transaction->created_at ,
        ]);

        return redirect()->route('listTransaction');
    }



}
