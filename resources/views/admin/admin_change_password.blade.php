@extends('admin.admin_dashboard')
@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .profile-image {
        border: 2px solid #000; /* Black border */
        border-radius: 50%; /* Rounded shape */
        display: inline-block;
        overflow: hidden;
    }
    .profile-info {
        display: inline-block;
        vertical-align: top;
        margin-left: 20px; /* Adjust the margin to control the spacing between the image and name */
    }
</style>

<div class="page-content">
    <div class="row profile-body">
        <!-- Left Wrapper Start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="profile-image"> <!-- Added a container div for styling -->
                            <img class="wd-100 ht-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                        </div>
                        <div class="profile-info">
                            <span class="h4">{{$profileData->firstname}} {{$profileData->lastname}}</span>
                        </div>
                    </div>
                    <p>Hi! {{$profileData->firstname}} {{$profileData->lastname}}, the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                        <p class="text-muted">{{$profileData->username}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                        <p class="text-muted">{{$profileData->role}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">{{$profileData->email}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                        <p class="text-muted">{{$profileData->phone}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                        <p class="text-muted">{{$profileData->address}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Status:</label>
                        <p class="text-muted">{{$profileData->status}}</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="github"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left Wrapper End -->

        <!-- Middle Wrapper Start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Change Password</h6>

                    <form method="POST" action="{{ route('admin.update.password') }}" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Old Password</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" autocomplete="off">
                            @error('old_password')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" autocomplete="off">
                            @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <!-- Password requirements -->
                            <p class="text-muted mt-2">
                                Password must meet the following requirements:
                                <ul>
                                    <li>Minimum of 8 characters</li>
                                    <li>At least one uppercase letter (A-Z)</li>
                                    <li>At least one digit (0-9)</li>
                                    <li>At least one special character (e.g., !@#$%^&*)</li>
                                </ul>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Confirm New Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirm') is-invalid @enderror" id="new_password_confirm" autocomplete="off">
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Update Password</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- Middle Wrapper End -->
        
        <!-- Right Wrapper Start -->
        <!-- Right Wrapper End -->
    </div>
</div>

@endsection