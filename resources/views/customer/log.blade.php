@extends('layouts.header')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <center>
                            Log Activity User
                        </center>
                    </h2>
                </div>
                <div class="card-body">
                    <table id="transaction" class="display" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>ID User</th>
                                <th>ID Transaction</th>
                                <th>information</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data == '[]')
                            <tr class="text-center table-primary">
                                <td colspan="8">Tidak ada log Activity</td>

                            </tr>
                            @else

                                @foreach ($data as $item)

                                <tr class="text-center table-primary">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->transaction_id }}</td>
                                    <td>{{ $item->informaiton }}</td>
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

@endsection
@section('script')
<script>
    $(function() {
        $("#transaction").DataTable({
            "responsive": true,
            "paging" : false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#facilityList_wrapper .col-md-6:eq(0)');
    });

</script>
@endsection
