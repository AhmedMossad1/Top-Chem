<footer class="footer pt-5 mt-5" dir="ltr">
    <div class="container">
        <div class=" row">
            <div class="col-md-4 mb-4 ms-auto">
                <div>
                    <h6 class="font-weight-bolder mb-4">TOP CHEM</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/profile.php?id=100057478238203"
                                target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com" target="_blank">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">{{ __('Quick Links') }}</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.about-us') }}" target="_blank">
                                {{ __('About') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.contact-us') }}"  target="_blank">
                                {{ __('Contact US') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" target="_blank">
                                {{ __('Products') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>

                    <h6 class="text-sm">{{ __('Contact information') }}</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <i class="material-icons text-sm">call</i>
                            <span class="text-sm ps-3">(+20) 1014171825</span>
                        </li>
                        <li class="nav-item">
                            <i class="material-icons text-sm">email</i>
                            <span class="text-sm ps-3">Topchem23@yahoo.com</span>
                        </li>
                        <li class="nav-item">
                            <i class="material-icons text-sm">location_on</i>
                            <span class="text-sm ps-3">سموحة - ابراج جرين تاورز برج 19 الدور الخامس</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        All rights reserved. Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="#" target="_blank"></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
