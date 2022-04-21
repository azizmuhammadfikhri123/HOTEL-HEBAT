@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('facility-room.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="facility_name">Nama Fasilitas</label>
                            <input type="text" id="facility_name" class="form-control @error('facility_name') is-invalid @enderror" name="facility_name" value="{{old('facility_name')}}">
                            @error('facility_name')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <a href="{{route('facility-room.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
