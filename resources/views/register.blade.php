@extends('template.index')

@section('title')
    Register - Get in Beauty
@endsection

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Join Membership
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="jeniskelamin">
						<span class="focus-input100"></span>
						<span class="label-input100">Gender</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="notelp">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
					</div>


					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Already a member?
							<a href="{{url('/login')}}">Login!</a>
						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('{{asset('assets/images/register.png')}}');">
				</div>
			</div>
		</div>
	</div>

@endsection







