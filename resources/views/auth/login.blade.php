@include('incloude.header')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex align-self-center" style="height: 419px;width: 543px;padding-left: 16px;padding-right: 0px;margin-right: 0px;padding-bottom: 0px;">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/nonamesph.png?h=14bd0f9bce9c8e844b6e8d465ecb1798&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <!--form starts here--> 
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                    
                                        <div class="form-group">
                                   
                                    
                                        
                                                <input id="email" type="email" class="form-control form-control-user" name="email" placeholder="Enter Email Address..." value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>
                                    
                                        <div class="form-group ">
                                           
                                                <input id="password" type="password" class="form-control form-control-user" name="password" placeholder="Password" required autocomplete="current-password">
                                    
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        
                                        </div>

                                        
                                    
                                        <div class="form-group ">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                    <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                                    <label class="form-check-label custom-control-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            
                                                <button type="submit" class="btn btn-primary btn-block text-white btn-user">
                                                    {{ __('Login') }}
                                                </button>
                                                <div class="text-center">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        <br>
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                    <!--form ends here-->
                                <div class="text-center"><a class="small" href="{{route('register')}}">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    @include('incloude.footer')






