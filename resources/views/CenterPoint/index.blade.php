@extends('admin.admin_dashboard')

@section('admin')
<style>
    #dataCenterPoint {
        width: 100%; /* Set the table width to 100% for centering */
    }

    #dataCenterPoint th {
        text-align: center; /* Center-align text in the table header */
    }

    #dataCenterPoint td {
        text-align: center; /* Center-align text in table cells */
    }
</style>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('all.jobs') }}">Branches</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Branches</li>
                            </ol>
                        </nav>
                    </h6>
                    <div class="card">
                        <div class="card-header">
                            Set Center Point
                            <a href="{{ route('centerpoint.create') }}" class="btn btn-info btn-sm float-end"> Create Data </a>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-error" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                            <table class="table" id="dataCenterPoint">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Coordinates</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($centerPoints as $key => $data)
                                    <tr>
                                        <td>{{ $data->id }} </td>
                                        <td>{{ $data->coordinates }} </td>
                                        <td>
                                            <a href="{{ route('edit.centerpoint', $data->id) }}" class="btn btn-inverse-info btn-sm"> Edit </a>
                                            <a href="{{ route('delete.centerpoint', $data->id) }}" class="btn btn-inverse-danger btn-sm" id="#"> Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection