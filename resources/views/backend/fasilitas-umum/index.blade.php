@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('facility.create')}}" class="btn btn-primary float-right my-3">add fasilitas umum</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Fasilitas Umum</th>
                                    <th>Deskripsi</th>
                                    <th>image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->facility_name}}</td>
                                        <td>{{$item->detail}}</td>
                                        <td>
                                            <img src="{{asset('image/' . $item->image)}}" width="180" height="180" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('facility.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                            <form action="{{route('facility.destroy', $item->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                                <button type="submit" class="btn btn-danger d-inline">Hapus</button>
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
