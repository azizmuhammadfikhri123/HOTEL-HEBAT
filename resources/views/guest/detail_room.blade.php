@extends('layouts.header')
@section('title', 'Room')
@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('image/' . $room->type_room->image)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <div class="card">
                    @if (Auth::check())
                    <form action="{{route('bookNow', $id)}}" method="post">
                        @csrf
                        <input type="hidden" name="type_id" value="{{$id}}">
                        <div class="card-body">
                            <div class="card my-3">
                                <div class="card-header">
                                    Detail Kamar
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2">{{'Tipe Kamar : ' . ' ' . $room->type_room->name}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Fasilitas Kamar : ' . ' ' . $room->type_room->facilities}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Kapasitas Kasur : ' . ' ' . 2}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Harga : ' . ' ' . number_format($room->type_room->price)}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Sisa Kamar : ' . ' ' . $jumlah_kamar }}</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Form Booking
                                    </div>
                                    <div class="card-body">
                                        @if ($jumlah_kamar != '0')
                                            <div class="form-group">
                                                <label for="many_room">Jumlah Pesanan Kamar</label>
                                                <input type="number" class="form-control" {{ $jumlah_kamar == 0 ? 'disabled' : ''  }} value="{{ $jumlah_kamar == 0 ? '0' : '1'  }}" min="1" max="{{ $jumlah_kamar }}" name="many_room" id="jumlah_kamar">
                                            </div>
                                        @else
                                            <div class="form-group">
                                                <label for="many_room">Jumlah Pesanan Kamar</label>
                                                <input type="number" class="form-control"  value="0" readonly value="{{old('many_room')}}" name="many_room" id="jumlah_kamar">
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="check_in">Check In</label>
                                            <input type="date" min='<?= date('Y-m-d'); ?>' class="form-control" value="{{old('check_in')}}" onchange="checkout()" required name="check_in" id="check_in">
                                        </div>
                                        <div class="form-group">
                                            <label for="check_out">Check Out</label>
                                            <input type="date" min='<?= date('Y-m-d', strtotime('+1 day')); ?>' class="form-control" value="{{old('check_out')}}" required disabled name="check_out" id="check_out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($jumlah_kamar != '0')
                                <button type="submit" class="btn btn-info btn-sm float-right my-2">Pesan Sekarang</button>
                                <a href="{{route('landing.page')}}" class="btn btn-danger my-2">Kembali</a>
                            @else
                                <a href="{{route('landing.page')}}" class="btn btn-danger my-2">Kembali</a>
                            @endif
                        </div>
                    </form>
                    @else
                    <form action="#" method="post">
                        @csrf
                        {{-- <input type="hidden" name="id_type" value="{{$id}}"> --}}
                        <div class="card-body">
                            <div class="card my-3">
                                <div class="card-header">
                                    Detail Kamar
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2">{{'Tipe Kamar : ' . ' ' . $room->type_room->name}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Fasilitas Kamar : ' . ' ' . $room->type_room->facilities}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Kapasitas Kasur : ' . ' ' . 2}}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Harga : ' . ' ' . number_format($room->type_room->price) }}</h6>
                                    <h6 class="card-subtitle mb-2">{{'Sisa Kamar : ' . ' ' . $jumlah_kamar }}</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header">
                                        Form Booking
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="jumlah_pesanan_kamar">Jumlah Pesanan Kamar</label>
                                            <input type="number" class="form-control" {{$jumlah_kamar == '0' ? 'disabled' : '1'}} value="1" value="{{old('jumlah_pesanan_kamar')}}" name="jumlah_pesanan_kamar" id="jumlah_kamar" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="check_in">Check In</label>
                                            <input type="date" min='<?= date('Y-m-d'); ?>' class="form-control" value="{{old('check_in')}}" onchange="checkout()" required name="check_in" id="check_in">
                                        </div>
                                        <div class="form-group">
                                            <label for="check_out">Check Out</label>
                                            <input type="date" min='<?= date('Y-m-d', strtotime('+1 day')); ?>' class="form-control" value="{{old('check_out')}}" required disabled name="check_out" id="check_out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('login')}}" class="btn btn-info float-right my-2">Silahkan Login</a>

                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        function checkout(){
        var checkin = new Date($('#check_in').val());
        // console.log(checkin);
        var dd = checkin.getDate()+1;
        var mm = checkin.getMonth()+1; //January is 0 so need to add 1 to make it 1!
        var yyyy = checkin.getFullYear();
        if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm

            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("check_out").setAttribute("min", today);
            document.getElementById("check_out").removeAttribute("disabled");
        }
    }
</script>
@endsection

