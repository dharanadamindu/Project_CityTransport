@extends('layouts.app')
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

                <form method="POST" class="login100-form" action="{{ route('register') }}">
				@csrf
				
					<span class="login100-form-title">
						Member registration
                    </span>
                    
					<div class="wrap-input100">
							<input id="name" type="text" placeholder="Enter your Name" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif

						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100">

							<input id="email" type="email" placeholder="Enter your Email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif

						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100">
						<input id="password" type="password" placeholder="Enter your password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						<span class="symbol-input100">
							<i class="fas fa-key" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100">
						<input id="password-confirm" placeholder="Re-type your password" type="password" class="input100 form-control" name="password_confirmation" required>
						<span class="symbol-input100">
							<i class="fas fa-key" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="form-group row">
						<input id="roleid" type="hidden" class="form-control" name="roleid" value="2" required>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
								{{ __('Register') }}
						</button>
					</div>

					<div class="text-center p-t-13">
						<a class="txt2" href="#">
							Already have a account?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

 @endsection