<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Models\logActivity;
use App\Models\room;
use Auth;
use Carbon\Carbon;

class ResepsionisController extends Controller
{
    public function index()
    {
        $datas = transaction::all();


        return view('resepsionis.index', compact('datas'));
    }

    public function process($id)
    {
        $transaction = transaction::find($id);
        $process = transaction::find($id)->update(['status' => 'process']);
        $date = Carbon::now();
        $log = logActivity::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $transaction->id ,
            'informaiton' => 'Proses pembayaran pada waktu' . ' ' . $date,
        ]);

        return redirect()->route('panel.resepsionis');
    }

    public function verified($id)
    {
        $transaction = transaction::find($id);
        $process = transaction::find($id)->update(['status' => 'verified']);
          $date = Carbon::now();
        $log = logActivity::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $transaction->id ,
            'informaiton' => 'Proses pembayaran pada waktu' . ' ' . $date,
        ]);

        return redirect()->route('panel.resepsionis');
    }

    public function failed($id)
    {
        $transaction = transaction::find($id);
        $process = transaction::find($id)->update(['status' => 'failed']);
          $date = Carbon::now();
        $log = logActivity::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $transaction->id ,
            'informaiton' => 'Proses pembayaran pada waktu ' . ' ' . $date,
        ]);

        return redirect()->route('panel.resepsionis');
    }

    public function CheckIn()
    {
        $dataCheckIn = transaction::where('status', 'verified')->get();
        return view('resepsionis.check_in', compact('dataCheckIn'));
    }

    public function toCheckIn($id)
    {
        $transaction = transaction::find($id);
        $user = transaction::find($id)->pluck('user_id');
        $toCheckIn = transaction::find($id)->update(['status' => 'check in']);

          $date = Carbon::now();

        $log = logActivity::create([
            'user_id' => $transaction->user_id,
            'transaction_id' => $transaction->id,
            'informaiton' => 'Customer melakukan check in pada waktu ' . $date
        ]);

        return redirect()->route('panel.resepsionis');
    }

    public function CheckOut()
    {
        $dataCheckIn = transaction::where('status', 'check in')->get();
        return view('resepsionis.check_out', compact('dataCheckIn'));
    }

    public function toCheckOut($id)
    {
        $transaction = transaction::find($id);
        $user = transaction::find($id)->pluck('user_id');
        $toCheckOut = transaction::find($id)->update(['status' => 'check out']);

        $idKamar = explode(', ',$transaction->room_id);
        $dataKamar = room::whereIn('id', $idKamar)->get();
        foreach ($dataKamar as $val) {
            room::find($val->id)->update(['status' => 'v']);
        }

        $date = Carbon::now();

        $log = logActivity::create([
            'user_id' => $transaction->user_id,
            'transaction_id' => $transaction->id,
            'informaiton' => 'Customer melakukan check out ' . 'pada waktu ' . $date
        ]);

        return redirect()->route('panel.resepsionis');
    }

    public function logActifity()
    {
        $data = logActivity::all();
        return view('resepsionis.log', compact('data'));
    }


}
