{{-- <footer class="footer pt-5 mt-5 section-dark">
    <div class="container">
        <div class="row">
            <!-- First Column: Contact Information and Social Media Links -->
            <div class="col-md-8 mb-4">
                <h6 class="text-sm">{{ __('Contact US') }}</h6>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-phone me-2" aria-hidden="true"></i>
                        <span>Phone:</span>
                        <p class="mb-0 ms-2">+201091722194</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-map-marker me-2" aria-hidden="true"></i>
                        <span>Address:</span>
                        <p class="mb-0 ms-2">test location</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-envelope me-2" aria-hidden="true"></i>
                        <span>Email:</span>
                        <p class="mb-0 ms-2">ahmed@a.com</p>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/" target="_blank">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-1" href="#" target="_blank">
                            <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Second Column: Resources -->
            <div class="col-md-4 mb-4">
                <h6 class="text-sm">Resources</h6>
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="https://iradesign.io/" target="_blank">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.about-us') }}">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Products') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact-us') }}" target="_blank">{{ __('Contact US') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom: Copyright -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        All rights reserved. Copyright ©
                        <script>document.write(new Date().getFullYear())</script>
                        TOP CHEM by
                        <a href="https://www.creative-tim.com" target="_blank">Ahmed Mossad</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}




<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-4 mb-4 ms-auto">
                <div>
                    {{-- <a href="https://www.creative-tim.com/product/material-kit">
                        <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
                    </a> --}}
                    <h6 class="font-weight-bolder mb-4">TOP CHEM</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w"
                                target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                Freebies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                Premium Tools
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                Knowledge Center
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer"
                                target="_blank">
                                Custom Development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                Sponsorships
                            </a>
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
                        </script>  <a href="https://www.creative-tim.com"
                            target="_blank"></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
