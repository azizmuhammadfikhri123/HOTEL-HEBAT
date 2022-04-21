
@extends('layouts.app')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <center>
                            Daftar Transaksi
                        </center>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="transaction" class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Customer Name</th>
                                    <th>Type Kamar</th>
                                    <th>Nomor Kamar</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Check in - Check out</th>
                                    <th>Harga Permalam</th>
                                    <th>Total Harga</th>
                                    <th>Status Transaksi</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($datas == '[]')
                                <tr class="text-center table-primary">
                                    <td colspan="8">Tidak ada transaksi</td>

                                </tr>
                                @else

                                    @foreach ($datas as $item)

                                    <tr class="text-center table-primary">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->room->type_room->name }}</td>
                                        <td>{{ $item->room->number }}</td>
                                        <td>{{ $item->many_room }}</td>
                                        <td>{{ $item->check_in . ' - ' . $item->check_out}}</td>
                                        <td>{{ 'Rp.' . ' ' . number_format($item->room->type_room->price, 0) }}</td>
                                        <td>{{ 'Rp.' . ' ' . number_format($item->payment->price, 0) }}</td>
                                        <td>
                                            {{ Str::ucfirst($item->status) }}
                                        </td>
                                        <td>
                                            @if ($item->status == 'process')
                                            <a href='{{asset('bukti/'. $item->bukti_pembayaran)}}' class="btn btn-primary" target ='_blank'>Lihat Bukti</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 'canceled')
                                                Transaction Canceled
                                            @elseif ($item->status == 'failed')
                                                Transaction Failed
                                            @elseif ($item->status == 'process')
                                                <a onclick="return confirm('Change the status to Verified?')" class="btn btn-sm btn-success" href="{{ route('verified', $item->id) }}">To Verified</a>
                                                <a onclick="return confirm('Change the status to Failed?')" class="btn btn-sm btn-danger" href="{{ route('failed', $item->id) }}">To Failed</a>
                                            @elseif ($item->status == 'verified')
                                            <a onclick="return confirm('Change the status to Check Out?')" class="btn btn-sm btn-primary" href="{{ route('toCheckIn', $item->id) }}">To Check In</a>
                                            @elseif($item->status == 'waiting for payment')
                                                <a onclick="return confirm('Change the status to Process?')" class="btn btn-sm btn-success" href="{{ route('process', $item->id) }}">To Process</a>
                                            @elseif($item->status == 'check in')
                                                <a onclick="return confirm('Change the status to Check Out?')" class="btn btn-sm btn-danger" href="{{ url('/panel/resepsionis/check-out', $item->id) }}">To Check Out</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#transaction').DataTable();
    } );
</script>
@endsection


