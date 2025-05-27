@extends('layouts.app')

@section('content')
     <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('assets/images/loader.svg') }}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->


    <!-- Hero Section Start -->
    <div class="hero hero-bg-image hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myvideo"><source src="{{ asset('assets') }}images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myvideo"><source src="https://demo.awaikenthemes.com/assets/videos/firevall-video.mp4" type="video/mp4"></video>
            
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">Protect your business from cyber threat</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Advanced cybersecurity solutions tailored to <span>keep you safe</span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">In a world where cyberattacks are becoming more sophisticated, your business deserves the best protection. Our expert team leverages cutting-edge technology.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="contact.html" class="btn-default btn-highlighted">Get Free Assessment</a>
                            <a href="services.html" class="btn-default">View our services</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Hero Company Slider Start -->
                    <div class="hero-company-slider">
                        <p>We're Trusted by more than <span class="counter">1000</span>+ companies</p>

                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-1.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-3.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-4.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-1.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-2.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-3.svg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- Hero Company Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Healthcare</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Finance and Banking</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Legal and Law Firms</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Government and Public Sector</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Technology and Software</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Healthcare</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Finance and Banking</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Legal and Law Firms</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Government and Public Sector</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Technology and Software</span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Healthcare</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Finance and Banking</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Legal and Law Firms</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Government and Public Sector</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Technology and Software</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Healthcare</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Finance and Banking</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Legal and Law Firms</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Government and Public Sector</span>
                <span><img src="{{ asset('assets/images/star-icon.svg') }}" alt="">Technology and Software</span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We provide innovative solutions to help your cybersecurity startup grow, building a trusted <span>brand with precision</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- About Counter Box Start -->
                    <div class="about-counter-box">
                        <h2><span class="counter">26</span></h2>
                        <p>Years of work experience</p>
                    </div>
                    <!-- About Counter Box End -->
                </div>

                <div class="col-lg-8">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- About Us List Start -->
                        <div class="about-us-list">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp">
                                <img src="{{ asset('assets/images/icon-about-item-1.svg') }}" alt="">
                                <h3>Our mission</h3>
                                <p>At the core of our mission is the belief that every business deserves a customized cybersecurity.</p>
                            </div>
                            <!-- About List Item End -->
                            
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/images/icon-about-item-2.svg') }}" alt="">
                                <h3>Our vision</h3>
                                <p>Our vision is to redefine the cybersecurity with innovative, adaptive solutions that evolve.</p>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Us List End -->
                        
                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <p>We specialize in empowering cybersecurity startups with tailored, innovative solutions designed to foster growth and establish a trusted brand identity. From building a strong online presence to delivering cutting-edge strategies, we combine precision, expertise, and creativity.</p>
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our services</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Protecting your business with tailored <span>security services</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="images/services.html" class="btn-default">view all services</a>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Advanced Network Security and Threat Monitoring</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Proactive Threat Detection and Incident Response</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Managed Security Services for Complete Protection</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-4.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Data Encryption and Backup Management Solutions</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-5.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Cyber Risk Assessments and Compliance Solutions</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-6.svg') }}" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3><a href="service-single.html">Ransomware Protection and Recovery Services Expertise</a></h3>
                            <p>Prevent ransomware attacks and recover data efficiently with advanced protect.</p>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>                
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Specialties Section Start -->
    <div class="our-specialties">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Specialties Content Start -->
                    <div class="our-specialties-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our specialties</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Trusted experts committed to securing <span>your digital</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">In a world where cyberattacks are becoming more sophisticated, your business deserves the best protection. Our expert team leverages cutting-edge technology.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Our Specialties Button Start -->
                        <div class="our-specialties-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="contact.html" class="btn-default">contact now</a>
                        </div>
                        <!-- Our Specialties Button End -->
                    </div>                    
                    <!-- Our Specialties Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Specialties Item Box Start -->
                    <div class="specialties-item-box">
                        <!-- Specialties Item Start -->
                        <div class="specialties-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-specialties-item-1.svg') }}" alt="">
                            </div>
                            <div class="specialties-item-content">
                                <h3>24/7 Threat Monitoring</h3>
                                <p>Our dedicated team ensures round-the-clock monitoring to detect.</p>
                            </div>
                        </div>
                        <!-- Specialties Item End -->

                        <!-- Specialties Item Start -->
                        <div class="specialties-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-specialties-item-2.svg') }}" alt="">
                            </div>
                            <div class="specialties-item-content">
                                <h3>End-to-End Security</h3>
                                <p>From initial risk assessments to ongoing protection.</p>
                            </div>
                        </div>
                        <!-- Specialties Item End -->

                        <!-- Specialties Item Start -->
                        <div class="specialties-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-specialties-item-3.svg') }}" alt="">
                            </div>
                            <div class="specialties-item-content">
                                <h3>Cutting-Edge Technology</h3>
                                <p>We utilize the latest tools and AI-driven systems to stay.</p>
                            </div>
                        </div>
                        <!-- Specialties Item End -->

                        <!-- Specialties Item Start -->
                        <div class="specialties-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-specialties-item-4.svg') }}" alt="">
                            </div>
                            <div class="specialties-item-content">
                                <h3>Expertise You Can Trust</h3>
                                <p>Our team of certified experts delivers industry-leading solutions.</p>
                            </div>
                        </div>
                        <!-- Specialties Item End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <div class="intro-bg-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/intro-bg-image.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Specialties Section End -->

    <!-- Our Facts Section Start -->
    <div class="our-facts">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Facts Content Start -->
                    <div class="our-facts-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Key Facts</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Insights into the growing importance <span>of cybersecurity</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">In a world where cyberattacks are becoming more sophisticated, your business deserves the best protection. Our expert team leverages cutting-edge technology.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Our expert team leverages cutting-edge technology In a world where cyberattacks are becoming more best protection.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Our Specialties Button Start -->
                        <div class="our-facts-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="contact.html" class="btn-default">learn more</a>
                        </div>
                        <!-- Our Specialties Button End -->
                        
                        <!-- Facts Counter Box Start -->
                        <div class="facts-counter-box">
                            <!-- Facts Counter Item Start -->
                            <div class="facts-counter-item">
                                <h2><span class="counter">350</span>+</h2>
                                <p>Projects Success Rate 99%</p>
                            </div>
                            <!-- Facts Counter Item End -->
                            
                            <!-- Facts Counter Item Start -->
                            <div class="facts-counter-item">
                                <h2><span class="counter">293</span>+</h2>
                                <p>Award For Digital Innovation</p>
                            </div>
                            <!-- Facts Counter Item End -->
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Our Facts Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Facts Image Box Start -->
                    <div class="facts-image-box">
                        <!-- Facts Image Start -->
                        <div class="facts-image">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/facts-image.jpg') }}" alt="">
                            </figure>

                            <!-- Award Box Start -->
                            <div class="award-box">
                                <h2><span class="counter">240</span>+</h2>
                                <p>Award For Digital Innovation</p>
                            </div>
                            <!-- Award Box End -->
                            
                            <!-- Facts Video Content Start -->
                            <div class="facts-video-content">
                                <!-- Video Play Button Start -->
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                                <!-- Video Play Button End -->
                                <h3>Let's See How We Did It</h3>
                            </div>
                            <!-- Facts Video Content End -->
                        </div>
                        <!-- Facts Image End -->
                    </div>
                    <!-- Facts Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Facts Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box">
                        <div class="row section-row align-items-center">
                            <div class="col-lg-7 col-md-9">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Why Choose Us</h3>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Trusted experts committed to securing <span>your digital</span></h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                            
                            <div class="col-lg-5 col-md-3">
                                <!-- About Us Circle Start -->
                                <div class="about-us-circle">
                                    <a href="about.html"><img src="{{ asset('assets/images/about-us-circle.png') }}" alt=""></a>
                                </div>
                                <!-- About Us Circle End -->
                            </div>
                        </div>
            
                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-item-1.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Tailored Security Solutions</h3>
                                    <p>Every business is unique, and so are our solutions. We customize strategy fit your specific needs.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-item-2.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Advanced Technology</h3>
                                    <p>We use the latest tools and cutting-edge technologies to safeguard your digital environment.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-item-3.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Real-Time Threat Detection</h3>
                                    <p>Stay ahead of attackers with pro active threat detection and response systems that operate 24/7.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Item List End -->
@endsection
