@extends('layout.app')
@section('content')
	<div class="container">
    	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<form method="post" action="{{URL('/')}}/login" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					{{csrf_field()}}
					<span class="login100-form-title">
						Login
					</span>
                   <a href="#" class="btn btn-lg  btn-block fbbtn">LOG IN WITH FACEBOOK</a>
                    

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="username" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						   	<b>LOGIN</b>
						</button>
					</div>

					<div class="flex-col-c p-t-50 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="{{URL('/')}}/register" class="txt3">
							Sign up now
						</a>
                       
					</div>
                    
				</form>
			</div>
		</div>
	</div>
    </div>
@endsection