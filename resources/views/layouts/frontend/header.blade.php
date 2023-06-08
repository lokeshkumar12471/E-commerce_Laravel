<div class="modal fade login-modal-main" id="login">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-modal">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="login-modal-left p-4 text-center pl-5">
                                <img src="frontend/img/login.jpg" alt="Gurdeep singh osahan">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="close close-top-right position-absolute" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <form class="position-relative">
                                <ul class="mt-4 mr-4 nav nav-tabs-login float-right position-absolute" role="tablist">
                                    <li>
                                        <a class="nav-link-login active" data-toggle="tab" href="#login-form"
                                            role="tab"><i class="icofont-ui-lock"></i> LOGIN</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-login" data-toggle="tab" href="#register" role="tab"><i
                                                class="icofont icofont-pencil"></i> REGISTER</a>
                                    </li>
                                </ul>
                                <div class="login-modal-right p-4">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="login-form" role="tabpanel">
                                            <h5 class="heading-design-h5 text-dark">LOGIN</h5>
                                            <fieldset class="form-group mt-4">
                                                <label>Enter Email/Mobile number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="+91 123 456 7890">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary btn-block">Enter to
                                                    your
                                                    account</button>
                                            </fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember
                                                    me</label>
                                            </div>
                                            <div class="login-with-sites mt-4">
                                                <p class="mb-2">or Login with your social profile:</p>
                                                <div class="row text-center">
                                                    <div class="col-6 pr-1">
                                                        <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                                class="icofont icofont-facebook"></i>
                                                            Facebook</button>
                                                    </div>
                                                    <div class="col-6 pl-1">
                                                        <button class="btn-google btn-block login-icons btn-lg"><i
                                                                class="icofont icofont-google-plus"></i>
                                                            Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="register" role="tabpanel">
                                            <h5 class="heading-design-h5 text-dark">REGISTER</h5>
                                            <fieldset class="form-group mt-4">
                                                <label>Enter Email/Mobile number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="+91 123 456 7890">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Confirm Password</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary btn-block">Create
                                                    Your
                                                    Account</button>
                                            </fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I Agree
                                                    with <a href="#">Term and Conditions</a></label>
                                            </div>
                                            <div class="login-with-sites mt-4">
                                                <p class="mb-2">or Login with your social profile:</p>
                                                <div class="row text-center">
                                                    <div class="col-6 pr-1">
                                                        <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                                class="icofont icofont-facebook"></i>
                                                            Facebook</button>
                                                    </div>
                                                    <div class="col-6 pl-1">
                                                        <button class="btn-google btn-block login-icons btn-lg"><i
                                                                class="icofont icofont-google-plus"></i>
                                                            Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="main-nav shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
            <div class="container">
                <a class="navbar-brand" href="{{ route('/') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="gurdeep osahan designer">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto main-nav-left">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/') }}"><i class="icofont-ui-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productlist') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 top-search">
                        <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
                        <input class="form-control mr-sm-2" type="search"
                            placeholder="Search for products, brands and more" aria-label="Search">
                    </form>
                    <ul class="navbar-nav ml-auto profile-nav-right">
                        <li class="nav-item">
                            <a href="#" data-target="#login" data-toggle="modal" class="nav-link ml-0">
                                <i class="icofont-ui-user"></i>Login/Sign Up
                            </a>
                        </li>
                        <li class="nav-item cart-nav">
                            <a data-toggle="offcanvas" class="nav-link" href="#">
                                <i class="icofont-basket"></i> Cart
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
