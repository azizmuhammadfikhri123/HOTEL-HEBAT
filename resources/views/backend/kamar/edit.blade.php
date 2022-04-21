
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('room.update', $data->id)}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="type_id">Type Kamar</label>
                                <select id="type_id" class="form-control @error('type_id') is-invalid @enderror" name="type_id" value="{{old('type_id')}}">
                                    {{-- <option value="">{{$data->type_room->name}}</option> --}}
                                    @foreach ($type_kamar as $item)
                                        <option value="{{$item->id}}" {{'type_id' == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <div id="validationCustom03" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="number">Nomor Kamar</label>
                                <input type="number" id="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{$data->number}}">
                                @error('number')
                                    <div id="validationCustom03" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-2">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                                <a href="{{route('room.index')}}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
