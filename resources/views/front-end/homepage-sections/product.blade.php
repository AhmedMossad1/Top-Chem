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
<div class="section pt-o" id="carousel">
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
              <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="fa fa-angle-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="fa fa-angle-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
