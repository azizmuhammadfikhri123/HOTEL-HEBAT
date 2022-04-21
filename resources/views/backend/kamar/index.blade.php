@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('datatable/css/jquery.dataTables.min.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('room.create')}}" class="btn btn-primary float-right my-3">add kamar</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type Kamar</th>
                                    <th>Nomor Kamar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->type_id}}</td>
                                        <td>{{$item->number}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href="{{route('room.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{route('room.destroy', $item->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                                <button type="submit" class="btn btn-sm  btn-danger">Hapus</button>
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
@section('js')
<script src="{{ asset('datatable/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
@endsection
