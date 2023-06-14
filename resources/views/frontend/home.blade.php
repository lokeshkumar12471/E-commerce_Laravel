<x-guest-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <header>
                        <div id="owl-carousel-one" class="owl-carousel">
                            <div class="item"><img class="img-fluid mx-auto"
                                    src="{{ asset('frontend//img/banner/1.png') }}">
                            </div>
                            <div class="item"><img class="img-fluid mx-auto"
                                    src="{{ asset('frontend//img/banner/2.png') }}">
                            </div>
                            <div class="item"><img class="img-fluid mx-auto"
                                    src="{{ asset('frontend//img/banner/3.png') }}">
                            </div>
                            <div class="item"><img class="img-fluid mx-auto"
                                    src="{{ asset('frontend//img/banner/4.png') }}">
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="offers-block"><a href="#">
                            <img class="img-fluid" src="{{ asset('frontend/img/offer-1.png') }}" alt></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="offers-block"> <a href="#"><img class="frontend/img-fluid mb-3"
                                src="{{ asset('frontend/img/offer-3.png') }}" alt></a>
                    </div>
                    <div class="offers-block"><a href="#"><img class="frontend/img-fluid"
                                src="{{ asset('frontend/img/offer-4.png') }}" alt></a></div>
                </div>
                <div class="col-4">
                    <div class="offers-block"><a href="#"><img class="frontend/img-fluid"
                                src="{{ asset('frontend/img/offer-2.png') }}" alt></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('frontend/img/women.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Women</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                                numquam natus beatae distinctio! Minus, esse!</p>
                            <a href="{{ route('productlist', ['category' => 'women']) }}" class="btn btn-primary">View
                                Offers</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('frontend/img/men.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Men</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                                numquam natus beatae distinctio! Minus, esse!</p>
                            <a href="{{ route('productlist', ['category' => 'men']) }}" class="btn btn-primary">View
                                Offers</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('frontend/img/kids.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Kids</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
                                numquam natus beatae distinctio! Minus, esse!</p>
                            <a href="{{ route('productlist', ['category' => 'kids']) }}" class="btn btn-primary">View
                                Offers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-list pbc-5 pb-4 pt-5 bg-light">
        <div class="container">
            <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
            <h4 class="mt-0 mb-3 text-dark font-weight-normel">Best Selling Items</h4>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-danger">NEW</span>
                            <img src="{{ asset('frontend/img/item/1.jpg') }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-success">50% OFF</span>
                            <img src="{{ asset('frontend/img/item/2.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span>
                                <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a class="active" href="#"> <i
                                    class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-danger">NEW</span>
                            <img src="{{ asset('frontend/img/item/3.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00 </del></span>
                                <span class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-success">50% OFF</span>
                            <img src="{{ asset('frontend/img/item/4.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <a href="#">
                            <span class="badge badge-danger">NEW</span>
                            <img src="{{ asset('frontend/img/item/5.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a class="active" href="#"> <i
                                    class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-success">50% OFF</span>
                            <img src="{{ asset('frontend/img/item/6.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-danger">NEW</span>
                            <img src="{{ asset('frontend/img/item/7.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                        <a href="#">
                            <span class="badge badge-success">50% OFF</span>
                            <img src="{{ asset('frontend/img/item/8.jpg') }}" class="card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i
                                    class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                <span>613</span>
                            </div>
                            <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00 </del></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="offer-product py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="offers-block"><a href="#"><img class="img-fluid"
                                src="{{ asset('frontend/img/ad/1.png') }}" alt></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="offers-block"><a href="#"><img class="img-fluid"
                                src="{{ asset('frontend/img/ad/2.png') }}" alt></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-list pbc-5 pb-4 pt-5 bg-light">
        <div class="container">
            <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
            <h4 class="mt-0 mb-3 text-dark">Top Savers Today</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category owl-theme">
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="{{ asset('frontend/img/item/1.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$ 135.00 <span class="text-black-50"><del>$500.00
                                            </del></span>
                                        <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50%
                                            OFF</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="{{ asset('frontend/img/item/2.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00
                                            </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a class="active" href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="{{ asset('frontend/img/item/3.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00
                                            </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="{{ asset('frontend/img/item/4.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00
                                            </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-danger">NEW</span>
                                    <img src="{{ asset('frontend/img/item/5.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00
                                            </del></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                <span class="like-icon"><a href="#"> <i
                                            class="icofont icofont-heart"></i></a></span>
                                <a href="#">
                                    <span class="badge badge-success">50% OFF</span>
                                    <img src="{{ asset('frontend/img/item/6.jpg') }}" class="card-img-top"
                                        alt="..."></a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Floret Printed Ivory Skater Dress</h6>
                                    <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star active"></i><i
                                            class="icofont icofont-star"></i>
                                        <span>613</span>
                                    </div>
                                    <p class="mb-0 text-dark">$135.00 <span class="text-black-50"><del>$500.00
                                            </del></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
