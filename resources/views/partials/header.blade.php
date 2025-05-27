<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item submenu">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home - Main</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('index-image.html') }}">Home - Image</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('index-video.html') }}">Home - Video</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('index-slider.html') }}">Home - Slider</a></li>
                                </ul>
                            </li>                                
                            <li class="nav-item"><a class="nav-link" href="{{ url('about.html') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('services.html') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('blog.html') }}">Blog</a></li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="#">Pages</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('service-single.html') }}">Service Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('blog-single.html') }}">Blog Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('case-study.html') }}">Case Study</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('case-study-single.html') }}">Case Study details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('team.html') }}">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('team-single.html') }}">Team Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('testimonials.html') }}">Testimonials</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('image-gallery.html') }}">Image Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('video-gallery.html') }}">Video Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('faqs.html') }}">FAQs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('404.html') }}">404</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('pricing.html') }}">Pricing</a></li>                   
                        </ul>
                    </div>
                    
                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="{{ url('contact.html') }}" class="btn-default">contact us</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
