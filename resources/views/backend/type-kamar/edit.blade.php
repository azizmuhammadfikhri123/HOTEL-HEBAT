@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('type-room.update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}">
                            @error('name')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="tel" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$data->price}}">
                            @error('price')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Fasilitas Kamar</label>
                            @foreach ($fasilitas_kamar as $item)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="facilities[]" value="{{$item->facility_name}}" id="{{$item->facility_name}}" {{in_array($item, $explode) == $item->facility_name ? 'checked' : ''}}>
                                    <label class="form-check-label" for="{{$item->facility_name}}">
                                        {{$item->facility_name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" class="form-control @error('information') is-invalid @enderror" name="information" value="{{$data->information}}">{{$data->information}}</textarea>
                            @error('information')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">
                            <img src="{{asset('image/'. $data->image)}}" width="180" height="180" alt="">
                            @error('image')
                                <div id="validationCustom03" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <a href="{{route('type-room.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
