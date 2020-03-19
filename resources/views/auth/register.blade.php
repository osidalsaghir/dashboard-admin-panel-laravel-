@include('incloude.header')

    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex align-self-center" style="width: 439px;height: 411px;padding-left: 5px;margin-right: -33px;margin-bottom: 5px;margin-left: 10px;">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/nonamesph.png?h=14bd0f9bce9c8e844b6e8d465ecb1798&quot;);width: 402px;height: 415px;padding: 15px;padding-left: -19px;padding-right: 12px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>

                            <!--form starts here -->

                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-group">
                                    
        
                                  
                                        <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   
                                </div>
        
                                <div class="form-group">
                         
        
                                    
                                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>
        
                                <div class="form-group row">
                           
        
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                               
                                  
        
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                  
                                        <button type="submit" class="btn btn-primary btn-block text-white btn-user">
                                            {{ __('Register') }}
                                        </button>
                                    
                            </form>
                            <br>
                             <!--form ends here -->
                            
                        </div>
                       
                            
                            <div class="text-center"><a class="small" href="{{route('login')}}">Already have an account? Login!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('incloude.footer')

