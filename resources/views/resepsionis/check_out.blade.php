@extends('layouts.app')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <center>
                            Daftar Hotel Yang Akan Check Out
                        </center>
                    </h2>
                </div>
                <div class="card-body">
                    <table id="transaction" class="display" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Customer Name</th>
                                <th>Type Kamar</th>
                                <th>Jumlah Pesanan</th>
                                <th>Check in - Check out</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($dataCheckIn == '[]')
                            <tr class="text-center table-primary">
                                <td colspan="8">Tidak ada transaksi</td>

                            </tr>
                            @else

                                @foreach ($dataCheckIn as $item)

                                <tr class="text-center table-primary">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->room->type_room->name }}</td>
                                    <td>{{ $item->many_room }}</td>
                                    <td>{{ $item->check_in . ' - ' . $item->check_out}}</td>
                                    <td>{{ 'Rp.' . ' ' . number_format($item->payment->price, 0) }}</td>
                                    <td>
                                        <a href="{{route('toCheckOut', $item->id)}}" class="btn btn-primary">Check Out</a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#transaction').DataTable();
    } );
</script>

@endsection

