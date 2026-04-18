@extends('layouts.template')

@section('content')
    
    <!-- Search Area Start -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <form role="search" method="get" class="search-popup__form" action="#">
                    <input type="text" id="search" name="search" placeholder="Search Here...">
                    <button type="submit" aria-label="search submit" class="search-btn">
                        <span><i class="fa-regular fa-magnifying-glass"></i></span>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Hero Section Start -->
        <div class="breadcrumb-wrapper fix bg-cover" style="background-image: url(assets/img/inner-page/breadcrumb.png);">
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">A propos de nous</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                     Apropos de nous
                    </li>
                  </ul>
                </div>
            </div>
        </div>

          <!-- About Section Start -->
         <section class="about-section section-padding fix">
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="about-left-item">
                                <div class="section-title style-2 mb-0">
                                    <span class="sub-title wow fadeInUp">About Us</span>
                                    <h4 class="wow fadeInUp" data-wow-delay=".3s" style="font-family: 'Arial', sans-serif; font-size: 1.2rem; line-height: 1.6; color: #333;">
                                         L'association Femme Debout pour le Développement(AFDD) est une association <br>
                                          de droit Burkinabè reconnue par ordonnance N°1887 du 16 
                                          Février 2022. Née de la volonté d’un groupe de femmes de contribuer au développement 
                                         de la femme et la fille. Elle est composée de 
                                        membres souscrivant aux valeurs de l’association et à son analyse stratégique et qui fait preuve d’un engagement attesté pour notamment sur le renforcement des capacités 
                                        communautaires pour la résilience aux effets 
                                        des disparités liées au genre.
                                        la cause de la solidarité nationale et/ou du développement. L’organisation se conce ntre notamment sur le renforcement des capacités communautaires pour la résilience aux effets des disparités liées au genre.
                                    </h4>
                                </div>
                               
                                <div class="about-image wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                    <img src="assets/img/home-2/about/01.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-right-item">
                                <div class="about-image wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                    <img src="assets/img/home-2/about/02.jpg" alt="img">
                                </div>
                                <div class="about-icon-main-item">
                                    <div class="about-icon-item">
                                        <div class="icon-item wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon">
                                                <img src="assets/img/home-2/icon/education.svg" alt="Education Icon">
                                            </div>
                                            <div class="content">
                                                <h5>Education</h5>
                                                <p>
                                                    Promouvoir l'accès à une éducation de qualité pour tous.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="icon-item wow fadeInUp" data-wow-delay=".5s">
                                            <div class="icon">
                                                <img src="assets/img/home-2/icon/sexual-health.svg" alt="Santé sexuelle Icon">
                                            </div>
                                            <div class="content">
                                                <h5>Santé sexuelle</h5>
                                                <p>
                                                    Sensibiliser et améliorer la santé sexuelle et reproductive.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-icon-item mb-0">
                                        <div class="icon-item wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon">
                                                <img src="assets/img/home-2/icon/environment.svg" alt="Protection de l'environnement Icon">
                                            </div>
                                            <div class="content">
                                                <h5>Protection de l'environnement</h5>
                                                <p>
                                                    Agir pour préserver notre planète et ses ressources.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="icon-item wow fadeInUp" data-wow-delay=".5s">
                                            <div class="icon">
                                                <img src="assets/img/home-2/icon/health-improvement.svg" alt="Amélioration santé Icon">
                                            </div>
                                            <div class="content">
                                                <h5>Amélioration santé</h5>
                                                <p>
                                                    Favoriser l'accès à des soins de santé de qualité.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         
          <!-- Team Section Start -->
         <section class="team-section fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">Team Members</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>M</span>eet The Optimistic Volunteer
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/home-1/team/01.jpg" alt="img">
                            </div>
                            <div class="team-content">
                                <h5>
                                    <a href="volounteer-details.html">Darrell Steward</a>
                                </h5>
                                <p>Software Developer</p>
                                <div class="social-icon">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/home-1/team/02.jpg" alt="img">
                            </div>
                            <div class="team-content">
                                <h5>
                                    <a href="volounteer-details.html">Courtney Henry</a>
                                </h5>
                                <p>Software Developer</p>
                                <div class="social-icon">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/home-1/team/03.jpg" alt="img">
                            </div>
                            <div class="team-content">
                                <h5>
                                    <a href="volounteer-details.html">Annette Black</a>
                                </h5>
                                <p>Software Developer</p>
                                <div class="social-icon">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-card-items">
                            <div class="team-image">
                                <img src="assets/img/home-1/team/04.jpg" alt="img">
                            </div>
                            <div class="team-content">
                                <h5>
                                    <a href="volounteer-details.html">Kristin Watson</a>
                                </h5>
                                <p>Software Developer</p>
                                <div class="social-icon">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Faq Section Start -->
         <section class="faq-section section-padding fix">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-items">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What Is Charity, And Why Is It Important ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                               Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How Can I Get Involved In Charity Work ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsethree" aria-expanded="false"
                                            aria-controls="collapsethree">
                                            Dedication for charitable Donations ?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapsefour">
                                           My Donations Are Going To a Charity ?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                          Is my donation actually being put to use?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title mb-0">
                                    <span class="sub-title wow fadeInUp">Our Faq</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        <span>E</span>Explore our FAQs for quick and helpful guidance
                                    </h2>
                                </div>
                                <p class="text wow fadeInUp" data-wow-delay=".5s">
                                    Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society. It reminds us of the can make it your significant difference in someone's life.
                                </p>
                                <div class="faq-image wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                    <img src="assets/img/home-1/faq.jpg" alt="img">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

          <!-- Testimonial Section Start -->
         <section class="testimonial-section section-padding pt-0 fix">
            <div class="container">
                 <div class="section-title">
                    <span class="sub-title wow fadeInUp">Testimonials</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>W</span>hat People Say About Charity.
                    </h2>
                </div>
                <div class="testimonial-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-5 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="testimonial-image">
                                <img src="assets/img/home-1/testimonial/01.jpg" alt="img">
                                <div class="shape">
                                    <img src="assets/img/home-1/testimonial/shape.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testimonial-content">
                                <div class="swiper testimonial-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>
                                                    Overall, I cannot recommend The Gourmet Bistro highly enough. If you're looking for a restaurant that serves delicious, beautifully presented dishes with impeccable service, look no further. I will definitely be returning soon to try more of their culinary delights”
                                                </p>
                                                <h3>Jonny Ananta</h3>
                                                <span>Regular Customer’s</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>
                                                    Overall, I cannot recommend The Gourmet Bistro highly enough. If you're looking for a restaurant that serves delicious, beautifully presented dishes with impeccable service, look no further. I will definitely be returning soon to try more of their culinary delights”
                                                </p>
                                                <h3>Jonny Ananta</h3>
                                                <span>Regular Customer’s</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>
                                                    Overall, I cannot recommend The Gourmet Bistro highly enough. If you're looking for a restaurant that serves delicious, beautifully presented dishes with impeccable service, look no further. I will definitely be returning soon to try more of their culinary delights”
                                                </p>
                                                <h3>Jonny Ananta</h3>
                                                <span>Regular Customer’s</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Total raising money in this year > <span>$4,50,000</span></h6>
                                <div class="swiper brand-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="brand-image text-center">
                                                <img src="assets/img/home-1/brand/01.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-image text-center">
                                                <img src="assets/img/home-1/brand/02.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-image text-center">
                                                <img src="assets/img/home-1/brand/03.png" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-image text-center">
                                                <img src="assets/img/home-1/brand/04.png" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
@endsection