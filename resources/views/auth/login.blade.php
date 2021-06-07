@extends('layouts.app')

@section('content')


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('assets/img/loogo.png')}}" alt="IMG">
				</div>

				<form method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<input id="email" class=" @error('email') is-invalid @enderror input100" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input id="password" type="password" placeholder="Password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        {{ __('Login') }}
						</button>
					</div>

					<div class="text-center p-t-12">                                
                    @if (Route::has('password.request'))
						<span class="txt1">
							Forget Password?
						</span>
						<a class="txt2" href="{{ route('password.request') }}">
							Click here.
						</a>
                     @endif
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('register') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection
