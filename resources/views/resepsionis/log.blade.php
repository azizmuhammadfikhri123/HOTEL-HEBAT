@extends('layouts.app')

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
                                    <td>{{ $item->id }}</td>
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

<script>
    $(document).ready(function() {
        $('#transaction').DataTable();
    } );
</script>

@endsection

