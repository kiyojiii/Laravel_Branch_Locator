@extends('user.user_dashboard')
@section('user')
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
                            <img class="wd-100 ht-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                        </div>
                        <div class="profile-info">
                            <span class="h4">{{$profileData->firstname}} {{$profileData->lastname}}</span>
                        </div>
                    </div>
                    <p>Hi! {{$profileData->firstname}} {{$profileData->lastname}}, You are a {{$profileData->role}}. We hope you enjoy your exploration and visit on our website.</p>
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
                    <h6 class="card-title">Update User Profile</h6>

                    <form method="POST" action="{{ route('user.update') }}" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                       <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" id="username" autocomplete="off" value="{{ $profileData->username }} ">
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input name="firstname" type="text" class="form-control" id="firstname" autocomplete="off" value="{{ $profileData->firstname }} ">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input name="lastname" type="text" class="form-control" id="lastname" autocomplete="off" value="{{ $profileData->lastname }} ">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input name="email" type="text" class="form-control" id="email" autocomplete="off" value="{{ $profileData->email }} ">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input name="phone" type="text" class="form-control" id="phone" autocomplete="off" value="{{ $profileData->phone }} ">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input name="address" type="text" class="form-control" id="username" autocomplete="off" value="{{ $profileData->address }} ">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input name="photo" class="form-control" type="file" class="form-control" id="image" autocomplete="off" value="{{ $profileData->photo }} ">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Current Photo:</label>
                            <img id="showImage" class="wd-65 ht-60 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile" style="border: 1px solid #000;">
                        </div>
                        <div class="d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                            <a href="{{ route('user.change.password') }}" class="btn btn-warning me-2">Change Password</a>
                        </div>
                        <a href="your-delete-url" class="btn btn-danger me-2">Delete Account</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Middle Wrapper End -->
        
        <!-- Right Wrapper Start -->
        <!-- Right Wrapper End -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection