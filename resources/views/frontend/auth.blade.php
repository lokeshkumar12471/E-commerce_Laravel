<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LOGIN</h5>
                        <form method="post" action="{{ route('post_login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="login-email">Enter Your Email</label>
                                <input type="email" class="form-control" id="login-email" name="email"
                                    placeholder="Enter Your Email">
                                @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="login-password">Enter Your Password</label>
                                <input type="password" class="form-control" id="login-password"
                                    placeholder="Enter Your Password" name="password">
                                @error('password')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember-me">
                                <label class="form-check-label" for="remember-me">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <div class="login-with-sites mt-4">
                            <p class="mb-2">or Login with your social profile:</p>
                            <div class="row text-center">
                                <div class="col-6 pr-1">
                                    <button class="btn btn-facebook btn-block login-icons btn-lg"><i
                                            class="icofont icofont-facebook"></i> Facebook</button>
                                </div>
                                <div class="col-6 pl-1">
                                    <button class="btn btn-google btn-block login-icons btn-lg"><i
                                            class="icofont icofont-google-plus"></i> Google</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">REGISTER</h5>
                        <form action="{{ route('post_register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="register-name">Enter Your Name</label>
                                <input type="text" class="form-control" id="register-name"
                                    placeholder="Enter Your Name" name="name">
                                @error('name')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="register-mobile">Enter Your Mobile Number</label>
                                <input type="text" class="form-control" id="register-mobile"
                                    placeholder="Enter Your Mobile Number" name="number">
                                @error('number')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="register-email">Enter Your Email</label>
                                <input type="email" class="form-control" id="register-email"
                                    placeholder="Enter Your Email" name="email">
                                @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="register-password">Enter Password</label>
                                <input type="password" class="form-control" id="register-password"
                                    placeholder="Enter Your Password" name="password">
                                @error('password')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="register-confirm-password">Enter Confirm Password</label>
                                <input type="password" class="form-control" id="register-confirm-password"
                                    placeholder="Enter Confirm Password" name="password_confirm">
                                @error('password_confirm')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="agree-terms">
                                <label class="form-check-label" for="agree-terms">I Agree with <a
                                        href="#">Terms and Conditions</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Your Account</button>
                        </form>
                        <div class="login-with-sites mt-4">
                            <p class="mb-2">or Login with your social profile:</p>
                            <div class="row text-center">
                                <div class="col-6 pr-1">
                                    <button class="btn btn-facebook btn-block login-icons btn-lg"><i
                                            class="icofont icofont-facebook"></i> Facebook</button>
                                </div>
                                <div class="col-6 pl-1">
                                    <button class="btn btn-google btn-block login-icons btn-lg"><i
                                            class="icofont icofont-google-plus"></i> Google</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
