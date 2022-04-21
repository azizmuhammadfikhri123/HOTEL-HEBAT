@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('type-room.create')}}" class="btn btn-primary float-right my-3">add type kamar</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type Kamar</th>
                                    <th>Harga</th>
                                    <th>Fasilitas Kamar</th>
                                    <th>Informasi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->facilities}}</td>
                                        <td>{{$item->information}}</td>
                                        <td>
                                            <img src="{{asset('image/'. $item->image)}}" width="180" height="180" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('type-room.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                            <form action="{{route('type-room.destroy', $item->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
