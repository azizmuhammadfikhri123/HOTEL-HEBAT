@extends('layouts.header')
@section('title', 'Bukti Pembayaran')
@section('content')
<div class="container">
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                    <h2>
                        <center>
                            Bukti Pembayaran
                        </center>
                        </h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Id Transaction</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ $buktiPembayaran->id }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ $buktiPembayaran->user->name }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Type Kamar</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ $buktiPembayaran->room->type_room->name }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Pesanan</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ $buktiPembayaran->many_room }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Check in</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{$buktiPembayaran->check_in }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Check out</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{$buktiPembayaran->check_out}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Total Harga</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ number_format( $buktiPembayaran->payment->price, 0) }}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Status Transaksi</label>
                                <div class="col-sm-10">
                                    <input  class="form-control" readonly value={{ $buktiPembayaran->status}}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <a href="{{route('listTransaction')}}" class="btn btn-primary float-right pt-2">Kembali</a>
                        <a href="{{route('cetakPDF', $buktiPembayaran->id )}}" class="btn btn-success float-right pt-2">Cetak PDF</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection


