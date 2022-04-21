@extends('layouts.header')
@section('title', 'invoice')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>
                <center>
                    SCAN
                </center>
                </h2>
            </div>
        </div>
        <center>
        {{-- <img src="{{asset('image/barcode.png')}}" class="mb-4" alt=""> --}}
        {!! QrCode::size(200)->generate('https://www.tokopedia.com/ovo/') !!}
        <br>
            <div class="table-responsive">
                <table class="table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>{{'Rp.' . ' ' . number_format($totalHarga, 0)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-primary mt-2">Kembali</a>
        </center>

    </div>
</section>
@endsection
