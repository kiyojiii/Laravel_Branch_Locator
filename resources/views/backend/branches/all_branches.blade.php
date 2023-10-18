@extends('admin.admin_dashboard')
@section('admin')

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

                    <div id="map" style="height: 500px; width: 100%;"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</dv>

@endsection