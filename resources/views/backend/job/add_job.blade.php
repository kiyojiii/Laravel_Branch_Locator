@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Job</h6>
									<form method="POST" action="{{ route('store.job') }}">
                                        @csrf
										<div class="row">
                                        <div class="form-group col-md-4">
                                        <div class="mb-3">
													<label class="form-label">Slots(s)</label>
													<input name="slots" type="text" class="form-control">
                                                    @error('slots')
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror
											</div>
                                        </div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Position</label>
													<input name="position" type="text" class="form-control">
                                                    @error('position')
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Department</label>
													<input name="department"  type="text" class="form-control">
                                                    @error('department')
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Branch Location</label>
													<input name="branchloc" type="text" class="form-control">
                                                    @error('branchloc')
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Status</label>
													<input name="status" type="text" class="form-control">
                                                    @error('status')
                                                    <span class="text-danger">{{ $message }} </span>
                                                    @enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
                                        <button type="submit" class="btn btn-primary submit">Add Job</button>
									</form>
							</div>
						</div>
					</div>
				</div>			
</div>

@endsection
