<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('frontend.landing') }}"
                        rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        TOP CHEM
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                @if (Auth::check() && Auth::user()->group == 'admin')
                                    <a class="nav-link" href="{{ url('/admin/home') }}">Dashboard</a>
                                @endif
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false"
                                    role="button">
                                    <i class="material-icons opacity-6 me-2 text-md">grid_view</i>
                                    {{ __('Categories') }}
                                    <img src="/FrontendV2/img/down-arrow-dark.svg" alt="down-arrow"
                                        class="arrow ms-auto ms-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-flex">
                                        <ul class="list-group w-100">
                                            @foreach ($categories as $category)
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1"
                                                        id="dropdownCategory{{ $category->id }}"href="{{ route('front.category', ['id' => $category->id]) }}">
                                                        <span>{{ $category->name }}</span>
                                                        <img src="/FrontendV2/img/down-arrow.svg" alt="down-arrow"
                                                            class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2"
                                                        aria-labelledby="dropdownCategory{{ $category->id }}">
                                                        @foreach ($category->products as $product)
                                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                href="{{ route('front.product', ['id' => $product->id]) }}">
                                                                <span>{{ $product->name }}</span>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="row d-lg-none">
                                        <div class="col-12 d-flex justify-content-center flex-column">
                                            @foreach ($categories as $category)
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-center align-items-center px-0">
                                                    {{ $category->name }}
                                                </h6>
                                                @foreach ($category->products as $product)
                                                    <a href="{{ route('front.product', ['id' => $product->id]) }}"
                                                        class="dropdown-item border-radius-md">
                                                        {{ $product->name }}
                                                    </a>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    href="{{ route('front.about-us') }}">
                                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                                    {{ __('About') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    href="{{ route('front.contact-us') }}">
                                    <i class="material-icons opacity-6 me-2 text-md">drafts</i>
                                    {{ __('Contact US') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2 ">
                                @if (app()->getLocale() == 'en')

                                    <a class="nav-link" href="{{ url('lang/ar') }}" id="navbarDropdownMenuLink"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="/FrontendV2/img/egypt_flag.jpg" alt="Arabic" width="20"
                                            height="14">
                                    </a>
                                @else

                                    <a class="nav-link" href="{{ url('lang/en') }}" id="navbarDropdownMenuLink"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="/FrontendV2/img/us_flag.jpg" alt="Arabic" width="20"
                                            height="14">
                                    </a>
                                @endif
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <form class="form-inline ml-auto" action="{{ route('home') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-search" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
