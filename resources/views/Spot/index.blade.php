@extends('admin.admin_dashboard')

@section('admin')
<style>
    #dataCenterPoint {
        width: 100%;
        /* Set the table width to 100% for centering */
    }

    #dataCenterPoint th {
        text-align: center;
        /* Center-align text in the table header */
    }

    #dataCenterPoint td {
        text-align: center;
        /* Center-align text in table cells */
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
                                <li class="breadcrumb-item active" aria-current="page">Add Branch</li>
                            </ol>
                        </nav>
                    </h6>
                    <div class="card">
                        <div class="card-header">
                            <strong> List of Branches </strong>
                            <a href="{{ route('spot.create') }}" class="btn btn-info btn-sm float-end"> Create Branch </a>
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
                            <table class="table" id="dataSpot">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Coordinates</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <form action="" method="post" id="deleteData">
                                @csrf
                                @method('DELETE')
                                <input type="submit" style="display:none">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection