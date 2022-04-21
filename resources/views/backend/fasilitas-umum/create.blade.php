@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('facility.store')}}" method="post" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="detail">Information</label>
                            <textarea id="detail" class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{old('detail')}}">{{old('detail')}}</textarea>
                            @error('detail')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">
                            @error('image')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <a href="{{route('facility.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
