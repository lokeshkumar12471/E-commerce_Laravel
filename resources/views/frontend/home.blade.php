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
                @foreach ($categoryId as $cat_id)
                    <div class="col-md-4">
                        <div class="card offers-block">
                            <img class="card-img-top" src="{{ asset($cat_id->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{ route('productlist', $cat_id->id) }}"
                                    class="btn btn-primary">{{ $cat_id->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
