<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whitesands</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets3/css/login.css') }}">
  <!-- Font -->
  <script src="https://kit.fontawesome.com/334c45a40c.js" crossorigin="anonymous"></script>
  <!-- Include SweetAlert CSS and JS from a CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.12/dist/sweetalert2.min.css">
  <!-- TOASTER -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body style="background: url('{{ asset('backend/assets3/images/login_background.png') }}'); background-size: cover;">
  <div class="cotn_principal">
    <div class="cont_centrar">
      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">

              <h2>LOGIN</h2>
              <p>Access your account. Log in to manage your profile, discover nearby branches, and apply for job vacancies effortlessly. Your journey continues here.</p>
              <button class="btn_login" onclick="change_to_login()">LOGIN</button>
            </div>
          </div>
          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>


              <p>Join our community and access exclusive benefits. Sign up now to discover nearby branches and exciting job opportunities. Your journey with us begins here.</p>

              <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
            </div>
          </div>
        </div>


        <div class="cont_back_info">
          <div class="cont_img_back_grey">
            <img src="{{ asset('backend/assets3/images/login_background.png')}}" alt="" />
          </div>

        </div>
        <div class="cont_forms">
          <div class="cont_img_back_">
            <img src="{{ asset('backend/assets3/images/login_background.png')}}" alt="" />
          </div>
          <div class="cont_form_login">
            <div> <a href="#" onclick="hidden_login_and_sign_up()"><i class="fa-solid fa-arrow-left"></i></a> </div>
              <div class="box">
                <span class="borderLine"></span>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <h2>LOGIN </h2>
                  <div class="inputBox">
                    <input input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
                    <span>Email/Username/Phone</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <span>Password</span>
                    <i></i>
                  </div>
                  <div class="links">
                  @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                  </a>
                  @endif
                  </div>
                  <button class="btn_login">LOGIN</button>
                </form>
              </div>
            </div>

      
  

          <div class="cont_form_sign_up">
          <div> <a href="#" onclick="hidden_login_and_sign_up()"><i class="fa-solid fa-arrow-left"></i></a> </div>
              <div class="box">
                <span class="borderLine"></span>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                 <!-- Add this section to display validation errors -->
                  @if($errors->any())
                      <script>
                              $(document).ready(function () {
                                  toastr.error('{{ implode(" & ", $errors->all()) }}', 'Validation Error');
                              });
                      </script>
                  @endif
                  <h2>SIGNUP</h2>
                  <div class="inputBox">
                    <input input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                    <span>Username</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                    <span>Password</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    <span>Confirm Password</span>
                    <i></i>
                  </div>
                  <br>
                  <button class="btn_sign_up">SIGNUP</button>
                </form>
              </div>
          </div>

        </div>

      </div>
    </div>
  </div>

</body>
<!-- login and register js -->
<script src="{{ asset('backend/assets3/js/loginscript.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.12/dist/sweetalert2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    // Check if the apply now button is clicked and the user is not logged in
    @if(!auth()->check())
        Swal.fire({
            icon: 'error',
            title: 'You must be logged in',
            text: 'Please log in to access the features of WhiteSands',
        });
    @endif

    // Check if there are validation errors
    @if($errors->any())
        // Create a function to display the error message as a SweetAlert
        function showValidationErrors() {
            let errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '<div>{{ $error }}</div>';
            @endforeach

            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: errorMessage,
            });
        }

        // Call the function to display the SweetAlert
        showValidationErrors();
    @endif
</script>


<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch (type) {
			case 'info':
				toastr.info(" {{ Session::get('message') }} ");
				break;

			case 'success':
				toastr.success(" {{ Session::get('message') }} ");
				break;

			case 'warning':
				toastr.warning(" {{ Session::get('message') }} ");
				break;

			case 'error':
				toastr.error(" {{ Session::get('message') }} ");
				break;
		}
		@endif
	</script>

</html>