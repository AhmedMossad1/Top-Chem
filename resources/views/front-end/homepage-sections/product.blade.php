{{-- <div class="section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title">Products</h2>
                <h5 class="description"> Visit All Products</h5>
            </div>
        </div>
        <br>
        <br>
        <div class="text-left">
            @include('front-end.shared.product-row')
        </div>
        <br>
        <a href="{{ route('home') }}" class="btn btn-success btn-round">More Products</a>
    </div>
</div> --}}
{{-- <div class="section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title">{{ __('Products') }}</h2>
                <h5 class="description">{{ __('Visit All Products') }}</h5>
            </div>
        </div>
        <br>
        <br>
        <div class="text-left">
            @include('front-end.shared.product-row')
        </div>
        <br>
        <a href="{{ route('home') }}" class="btn btn-success btn-round">{{ __('More Products') }}</a>
    </div>
</div> --}}
{{-- <div class="section pt-o" id="carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card page-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="frontend/img/topchem.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Somewhere</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="frontend/img/topchem.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Somewhere else</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="frontend/img/topchem.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Here it is</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators"
                            role="button" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators"
                            role="button" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- START Testimonials w/ bg image & faded gradient & company logo -->
<section class="py-5 position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div id="carouselExampleTestimonials-11" class="carousel carousel-fade slide shadow-lg"
                    data-bs-ride="carousel">
                    <ol class="carousel-indicators z-index-2">
                        <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner border-radius-lg">
                        <div class="carousel-item bg-cover max-height-400 active"
                            style="background-image: url(&#39;https://images.unsplash.com/photo-1620266757065-5814239881fd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1952&q=80&#39;)">
                            <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                <div class="row h-100">
                                    <div class="col-xl-6 my-auto px-6">
                                        <h5 class="text-white font-weight-normal mb-3">
                                            "Decisions: If you can&#39;t decide, the answer is no. If two equally
                                            difficult paths,
                                            choose the one more painful in the short term(pain avoidance is creating an
                                            illusion of equality)."
                                        </h5>
                                        <p class="text-white font-weight-bold">Michael Lerson, <span
                                                class="text-xs font-weight-normal">Project Manager </span></p>
                                    </div>

                                </div>
                            </div>
                            <span class="mask bg-gradient-faded-dark opacity-10 z-index-0 border-radius-lg"></span>
                        </div>
                        <div class="carousel-item bg-cover max-height-400"
                            style="background-image: url(&#39;https://images.unsplash.com/photo-1614727187346-ec3a009092b0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1957&q=80&#39;)">
                            <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                <div class="row h-100">
                                    <div class="col-xl-6 my-auto px-6">
                                        <h5 class="text-white font-weight-normal mb-3">
                                            " Knowledge is either from direct experience or from verifiable, falsifiable
                                            science.
                                            There is knowledge that is transmitted but not verifiable / falsifiable.
                                            They&#39;re slowed down by their perception of themselves. "
                                        </h5>
                                        <p class="text-white font-weight-bold">Louis Miriam, <span
                                                class="text-xs font-weight-normal">COO</span></p>
                                    </div>

                                </div>
                            </div>
                            <span class="mask bg-gradient-faded-warning opacity-10 z-index-0 border-radius-lg"></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">


                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Testimonials w/ bg image & faded gradient & company logo -->
