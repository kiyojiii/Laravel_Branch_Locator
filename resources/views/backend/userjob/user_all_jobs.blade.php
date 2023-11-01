@extends('user.user_dashboard')
@section('user')

<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('user.all.jobs') }}">Jobs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Job Listings</li>
                            </ol>
                        </nav> 
                    </h6>
                    <div class="table-responsive">
                        <table id="UserJobTable" class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Slots</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Branch</th>
                                    <th>Status</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $rowNumber = 1 @endphp
                                @foreach($jobs as $key => $data)
                                <tr>
                                <td>{{ $rowNumber++ }} </td>
                                    <td>{{ $data->slots }}</td>
                                    <td>{{ $data->position }}</td>
                                    <td>{{ $data->department }}</td>
                                    <td>{{ $data->branchloc }}</td>                 
                                    <td style="position: relative;">
                                        <span style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: {{ $data->status === 'Open' ? 'green' : 'red' }}; margin-right: 8px;"></span>
                                        {{ $data->status }}
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                                    <td>
                                    <a href="#" class="btn btn-primary me-2">Apply</a>
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

@endsection
