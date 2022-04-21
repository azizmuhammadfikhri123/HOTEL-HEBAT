@extends('layouts.header')
@section('title', 'payment')
@section('content')
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
                                <th>Nomor Kamar</th>
                                <th>Type Kamar</th>
                                <th>Jumlah Pesanan</th>
                                <th>Harga Permalam</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center table-primary">
                                <td>{{ $nomorKamar }}</td>
                                <td>{{ $type->name }}</td>
                                <td>{{ $jumlahPesanan }}</td>
                                <td>{{'Rp.' . ' ' . number_format($type->price, 0)}}</td>
                                <td>{{'Rp.' . ' ' . number_format($totalHarga, 0)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    <a href="{{route('invoice')}}" class="btn btn-primary float-right">Pay</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

