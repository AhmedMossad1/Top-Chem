<footer class="footer pt-5 mt-5 section-dark">
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
</footer>




 {{-- <footer class="footer footer-black  footer-white ">
    <div class="container">
    <div class="row">
        <nav class="footer">
            <h6 class="text-sm">{{ __('Contact US') }}</h6>
        <ul class="flex-column ms-n3 nav">
            <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            <span class="elementor-icon-list-text">Phone:</span>
            <p>+201091722194</p>
        </li>
        <li class="elementor-icon-list-item">
            <span class="elementor-icon-list-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </span>
                <span class="elementor-icon-list-text">Address:</span>
                    <p>test location</p>
        </li>
        </ul>
        </nav>
        <div class="credits ml-auto">
        <span class="copyright">
            ©
            <script>
            document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Team
        </span>
        </div>
    </div>
    </div>
</footer> --}}
