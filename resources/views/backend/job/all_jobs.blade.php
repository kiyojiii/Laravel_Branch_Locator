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
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Slots</th>
                        <th>Position</th>
                        <th>Deparment</th>
                        <th>Branch</th>
                        <th>Status</th>
                        <th>Date Posted</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $key => $data)
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->slots }}</td>
                        <td>{{ $data->position }}</td>
                        <td>{{ $data->department }}</td>
                        <td>{{ $data->branchloc }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                        <a href="" class="btn btn-inverse-info btn-sm"> Edit </a>
                        <a href="" class="btn btn-inverse-danger btn-sm"> Delete </a>
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