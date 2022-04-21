``@extends('layouts.header')
@section('title', 'list Transaction')
@section('content')
{{-- @dd($listTransaksi->room->type_room->name) --}}
<div class="container">
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                    <h2>
                        <center>
                            Pembayaran Kamar
                        </center>
                        </h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>Type Kamar</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Harga Permalam</th>
                                    <th>Total Harga</th>
                                    <th>Status Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listTransaksi as $item)
                                    <tr class="text-center table-primary">
                                        <td>{{ $item->room->type_room->name }}</td>
                                        <td>{{ $item->many_room }}</td>
                                        <td>{{ 'Rp.' . ' ' . number_format($item->room->type_room->price, 0) }}</td>
                                        <td>{{ 'Rp.' . ' ' . number_format($item->payment->price, 0) }}</td>
                                        <td>
                                            @if ($item->status == 'check out')
                                                {{' Anda melakukan Check Out pada tanggal ' . $item->updated_at}}
                                            @elseif ($item->status == 'check in')
                                                {{' Anda melakukan Check In pada tanggal ' . $item->updated_at}}
                                            @else
                                                {{$item->status}}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 'verified')
                                                {{-- <a href="{{route('buktiPembayaran', $item->id)}}" class="btn btn-success">Bukti Pembayaran</a> --}}
                                                <a href="{{route('cetakPDF', $item->id )}}" class="btn btn-success float-right pt-2">Cetak Bukti Pembayaran</a>
                                            @elseif ($item->status == 'waiting for payment')

                                                <a href="{{route('cencelTransaksi', $item->id)}}" class="btn btn-danger">Cencel</a>
                                                <a href="{{route('transactionPay', $item->id)}}" class="btn btn-primary">Pay</a>
                                                 <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#exampleModal">
                                                    Upload Bukti
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload Pembayaran</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{route('customer.upload', $item->id)}}" method="POST" enctype="multipart/form-data">
                                                                @method('PATCH')
                                                                @csrf
                                                                <div class="modal-body">
                                                                        <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Kirim</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            <a href="{{route('landing.page')}}" class="btn btn-danger ">Kembali</a>
                            <a href="{{route('payment.all')}}" class="btn btn-primary">Pay All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

