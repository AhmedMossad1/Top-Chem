<nav class="navbar navbar-expand-lg fixed-top bg-danger ">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('frontend.landing') }}" rel="tooltip" title="Home"
                data-placement="bottom">
                TOP CHEM
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Categories') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($categories as $category)
                        <div class="dropdown-submenu dropright">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('front.category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                            <div class="dropdown-menu">
                                @foreach ($category->products as $product)
                                <a class="dropdown-item product-item" href="{{ route('front.product', ['id' => $product->id]) }}">
                                    <img src="{{ url('uploads/'.$product->image) }}" alt="{{ $product->name }}">
                                    {{ $product->name }}
                                </a>
                            @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </li>

                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('front.about-us') }}" id="navbarDropdownMenuLink"
                        aria-haspopup="true" aria-expanded="false">
                        {{ __('About') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('front.contact-us') }}" id="navbarDropdownMenuLink"
                        aria-haspopup="true" aria-expanded="false">
                        {{ __('Contact US') }}
                    </a>
                </li>

                <li class="nav-item">
                    @if (Auth::check() && Auth::user()->group == 'admin')
                        <a class="nav-link" href="{{ url('/admin/home') }}">Dashboard</a>
                    @endif
                </li>
                <li>
                    <form class="form-inline ml-auto" style="margin-top: 15px" action="{{ route('home') }}">
                        <div class="form-group has-white">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                    </form>
                <li class="nav-item ">
                    @if (app()->getLocale() == 'en')
                        <a class="nav-link " href="{{ url('lang/ar') }}"id="navbarDropdownMenuLink" aria-haspopup="true"
                            aria-expanded="false">
                            عربي</a>
                    @else
                        <a class="nav-link " href="{{ url('lang/en') }}"id="navbarDropdownMenuLink" aria-haspopup="true"
                            aria-expanded="false">
                            En</a>
                    @endif
                </li>
                </li>
            </ul>
        </div>
    </div>

</nav>
