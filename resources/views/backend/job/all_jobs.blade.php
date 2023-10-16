@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <nav class="page-breadcrumb">
        <a href="{{ route('add.job') }}" class="btn btn-inverse-success"> Add Job </a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('all.jobs') }}">Jobs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Job Listings</li>
                            </ol>
                        </nav> 
                    </h6>
                    <div class="table-responsive">
                        <table id="JobTable" class="table">
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
                                    <td>
                                        <select class="js-example-basic-single form-select" data-width="100%" onchange="updateStatus(this.value, '{{ $data->id }}')">
                                            <option value="Open" {{ $data->status == 'Open' ? 'selected' : '' }}>Open</option>
                                            <option value="Closed" {{ $data->status == 'Closed' ? 'selected' : '' }}>Closed</option>
                                        </select>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                                    <td>
                                        <a href="{{ route('edit.job', $data->id) }}" class="btn btn-inverse-info btn-sm"> Edit </a>
                                        <a href="{{ route('delete.job', $data->id) }}" class="btn btn-inverse-danger btn-sm" id="jobdelete"> Delete </a>
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
