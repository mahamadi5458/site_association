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
       <section class="hero-section hero-3 fix bg-cover";">
            <div class="right-shape">
                <img src="assets/img/home-3/hero/shape-3.png" alt="img">
            </div>
            <div class="left-shape">
                <img src="assets/img/home-3/hero/shape-4.png" alt="img">
            </div>
            {{-- <div class="box float-bob-y">
                <div class="icon">
                    <img src="assets/img/home-3/icon/11.svg" alt="img">
                </div>
                <div class="content">
                    <h6>Exchange Finance</h6>
                    <span>&552.99</span>
                </div>
            </div> --}}
             <div class="shape-1">
                <img src="assets/img/home-3/hero/shape.png" alt="img">
            </div>
            <div class="shape-2">
                <img src="assets/img/home-3/hero/shape-2.png" alt="img">
            </div> 
            <div class="container-fluid">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h6 class="wow fadeInUp">Engagé pour un Burkina meilleur </h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                Association Femme Débout </span> pour le Developpement Durable
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                               Informer, accompagner et protéger :
                                notre engagement au service des jeunes et des communautés.
                            </p>
                            <div class="hero-button-item wow fadeInUp" data-wow-delay=".3s">
                                <a href="contact.html" class="theme-btn border-btn">Rejoignez Nous<i class="fa-solid fa-arrow-right-long"></i></a>
                                <span class="button-text">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i></a>
                                    <span class="ms-3">Présentation de notre Association</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper hero-image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="hero-image">
                                        <img src="assets/img/acceuil/acceuil_one.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="hero-image">
                                        <img src="assets/img/acceuil/acceuil_two.png" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="hero-image">
                                        <img src="assets/img/acceuil/acceuil_three.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-dot-2">
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- About Section Start -->
          <div class="counter-section fix section-bg-1" style="position: relative; top:40px">
             <div class="right-shape">
                <img src="assets/img/home-1/feature/shape-2.png" alt="img">
            </div>
            <div class="container">
                <div class="counter-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="counter-image">
                                <img src="assets/img/acceuil/acceuil_satat.png" alt="img">
                                {{-- <div class="shape">
                                    <img src="assets/img/home-1/feature/shape-1.png" alt="img">
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="counter-content">
                                <div class="section-title mb-0">
                                    <span class="sub-title wow fadeInUp">Statistiques</span>
                                    <h2 class="sec-title">
                                        <span>N</span>ous  nous engagons pour le Devéloppement
                                    </h2>
                                </div>
                                <p class="text wow fadeInUp" data-wow-delay=".3s">
                                   Nous agissons chaque jour pour bâtir une société plus juste, inclusive et solidaire.
                                    À travers nos actions, nous donnons une voix aux plus vulnérables.
                                </p>
                                <div class="counter-main-item">
                                    <div class="counter-item wow fadeInUp" data-wow-delay=".5s">
                                        <div class="content style-2">
                                            <h2><span class="count">20</span>+</h2>
                                            <p>Membres de l'Association</p>
                                        </div>
                                         <div class="content">
                                            <h2><span class="count">500</span>+</h2>
                                            <p>Personnes bénéficiaires</p>
                                        </div>
                                    </div>
                                    <div class="counter-item style-border wow fadeInUp" data-wow-delay=".3s">
                                        <div class="content">
                                            <h2><span class="count">15</span>+</h2>
                                            <p> Partenaires</p>
                                        </div>
                                         <div class="content style-2">
                                            <h2><span class="count">5</span>+</h2>
                                            <p>Expérience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

            <!-- Cta Section Start -->
         <section class="cta-section section-padding pb-0 fix bg-cover" style="background-image: url(assets/img/home-2/cta/bg.png); position: relative; top:100px">
            <div class="left-shape float-bob-y">
                <img src="assets/img/home-2/cta/hand.png" alt="img">
            </div>
            <div class="love-shape float-bob-x">
                <img src="assets/img/home-2/cta/love.png" alt="img">
            </div>
            <div class="top-shape float-bob-x">
                <img src="assets/img/home-2/cta/love-2.png" alt="img">
            </div>
            <div class="right-shape float-bob-y">
                <img src="assets/img/home-2/cta/hand-2.png" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="cta-content">
                                <div class="circle-image">
                                <img src="assets/img/home-2/cta/circle.png" alt="img">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                                <div class="section-title style-2 mb-0">
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                        <span>S</span>ensibiliser, soutenir et transformer,
                                                tel est notre engagement pour un monde plus équitable.
                                    </h2>
                                </div>
                                <a href="contact.html" class="theme-btn wow fadeInUp" data-wow-delay=".3s">En savoir plus <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>


      <!-- Troisième Section -->


       <!-- Choose-Us Section3 Start -->
         <section class="choose-us-section-3 section-padding section-bg-2 fix">
            <div class="top-shape">
                <img src="assets/img/home-3/feature/shape-2.png" alt="img">
            </div>
            <div class="left-shape float-bob-y">
                <img src="assets/img/home-3/feature/love.png" alt="img">
            </div>
            <div class="right-shape float-bob-y">
                <img src="assets/img/home-3/feature/love-2.png" alt="img">
            </div>
            <div class="container">
                <div class="section-title style-2 text-center">
                    <span class="sub-title wow fadeInUp">Faites un Bon Choix</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>P</span>ourquoi choisir AFDD
                    </h2>
                </div>
                <div class="choose-us-wrapper-3">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="choose-us-image">
                                <img src="assets/img/acceuil/acceuil_1.jpeg" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                {{-- <div class="shape">
                                    <img src="assets/img/home-3/feature/shape.png" alt="img">
                                </div> --}}
                                <div class="circle-image">
                                    <img src="assets/img/home-3/feature/02.png" alt="img">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                                <div class="content-box float-bob-y">
                                    <a href="contact.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    <h6>
                                        Rejoignez Nous <br>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-us-box wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/06.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h5>⚖️ Réduire les disparités liées au genre</h5>
                                    <p>
                                        L’association agit pour garantir l’égalité des chances entre hommes et femmes à travers 
                                        la sensibilisation et l’accompagnement. Elle lutte contre les discriminations afin de favoriser une société plus juste et équilibrée.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-box active-box wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/07.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h5>Promouvoir la santé sexuelledes adolescents et jeunes</h5>
                                    <p>
                                       L’association informe et éduque les jeunes pour encourager des comportements responsables et prévenir les risques sanitaires.
                                        Elle facilite également l’accès aux services de santé pour améliorer leur bien-être.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-us-box wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/08.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h5>Promouvoir les Droits Humains</h5>
                                    <p>
                                        L’association œuvre pour le respect et la protection des droits fondamentaux de chaque individu. 
                                        Elle sensibilise les communautés et accompagne les victimes d’injustices pour construire une société plus équitable.
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="choose-us-box mb-0 wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/home-3/icon/09.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h5>Event health food for growing</h5>
                                    <p>
                                        Gourmet Bistro highly enough. If you're delicious, beautifully presented dishes with impeccable service.
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
         </section>



         <!-- Project Section Start -->
         <section class="project-section fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">Section projet</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>N</span>os récents projets
                    </h2>
                </div>
            </div>
            <div class="swiper project-slider">
                <div class="swiper-wrapper slide-transtion">
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet1.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet1.png" alt="img">
                                </div>
                                <div class="project-content">
                                    <div class="content">
                                        <h3>
                                            <a href="project-details.html">Dépistage du VIH SIDA</a>
                                        </h3>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet2.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet2.png" alt="img">
                                </div>
                                <div class="project-content">
                                    <div class="content">
                                        <h3>
                                            <a href="project-details.html">Conférence publique</a>
                                        </h3>
                                        <h5>Soutien PsychoSocial</h5>
                                    </div>
                                    <a href="project-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet3.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet3.png" alt="img">
                                </div>
                                {{-- <div class="project-content">
                                    <div class="content">
                                        <h3>
                                            <a href="project-details.html">Child Educations</a>
                                        </h3>
                                        <h5>Charity & Funding</h5>
                                    </div>
                                    <a href="project-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div dir="rtl" class="swiper project-slider-2">
                <div class="swiper-wrapper slide-transtion">
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet4.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet4.png" alt="img">
                                </div>
                                <div class="project-content style-2">
                                    {{-- <div class="content">
                                        <h3>
                                            <a href="project-details.html">Child Educations</a>
                                        </h3>
                                        <h5>Charity & Funding</h5>
                                    </div> --}}
                                    <a href="project-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet5.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet5.png" alt="img">
                                </div>
                                {{-- <div class="project-content style-2">
                                    <div class="content">
                                        <h3>
                                            <a href="project-details.html">Child Educations</a>
                                        </h3>
                                        <h5>Charity & Funding</h5>
                                    </div>
                                    <a href="project-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide-element">
                        <div class="project-card-item">
                        <div class="project-image">
                            <img src="assets/img/acceuil/section_projet6.png" alt="img">
                                <div class="shape-image">
                                    <img src="assets/img/acceuil/section_projet6.png" alt="img">
                                </div>
                                {{-- <div class="project-content style-2">
                                    <div class="content">
                                        <h3>
                                            <a href="project-details.html">Child Educations</a>
                                        </h3>
                                        <h5>Charity & Funding</h5>
                                    </div>
                                    <a href="project-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Team Section Start -->
         {{-- <section class="team-section section-padding fix pb-0">
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
         </section> --}}

          <!-- Testimonial Section Start -->
         {{-- <section class="testimonial-section section-padding fix">
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
         </section> --}}

         <!-- Counter Section Start -->
      

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
                                           Quelle est la mission principale de l’AFD/DD ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                               La lutte contre les IST/VIH ; le paludisme ; les drogues et l’hépatite 
                                                La protection de l’environnement 
                                                La promotion de la solidarité 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Quels sont les principaux objectifs de l’association ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Les objectifs de l’AFD/DD sont : Promouvoir l’éducation inclusive, Réduire les disparités liées au genre, Promouvoir la santé sexuelle et 
                                                reproductive des adolescents et 
                                                        jeunes, Promouvoir les Droits Humains 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsethree" aria-expanded="false"
                                            aria-controls="collapsethree">
                                           Comment puis-je devenir membre ou bénévole de l’association ?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                              Pour devenir membre ou bénévole de l’AFD/DD, il vous suffit de contacter l’association 
                                              via nos différents canaux de communication ou de remplir le formulaire d’adhésion disponible sur la plateforme. Toute
                                              personne motivée à contribuer aux actions humanitaires et au développement communautaire est la bienvenue. Vous pourrez
                                               ainsi participer activement à nos activités et projets sur le terrain.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapsefour">
                                           Comment l’association contribue-t-elle à l’éducation inclusive ?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                L’association contribue à l’éducation inclusive à travers le soutien scolaire, 
                                                les sensibilisations et l’accompagnement des enfants et jeunes en situation de vulnérabilité.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                                Comment peut-on soutenir les actions de l’AFD/DD ?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                               Comment peut-on soutenir les actions de l’AFD/DD ?
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
                                    <span class="sub-title wow fadeInUp">Plus de renseignements</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Obtenez des réponses à vos questions les plus fréquentes sur notre association.
                                    </h2>
                                </div>
                                {{-- <p class="text wow fadeInUp" data-wow-delay=".5s">
                                    Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society. It reminds us of the can make it your significant difference in someone's life.
                                </p> --}}
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

          <!-- News Section Start -->
       

         <!-- Contact Section Start -->
         <section class="contact-section section-padding pb-0">
            <div class="container-fluid">
                <div class="contact-wrapper">
                    <div class="row g-4 align-items-end">
                        <div class="col-lg-6">
                            <div class="contact-image wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                <img src="assets/img/acceuil/footer1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="title mb-0 wow fadeInUp" data-wow-delay=".3s">
                                    <H2>ADFDD</H2>
                                </div>
                            <div class="section-title mb-0">
                                    <h2 class="sec-title text-white">
                                        <span>T</span>oujours ouvert pour ceux qui rêvent de changer le monde et de faire une différence positive dans la vie des autres.
                                    </h2>
                                </div>
                                <p class="text wow fadeInUp" data-wow-delay=".3s">
                                    Charity not only helps to reduce suffering but also fosters a sense of unity and shared responsibility in society It reminds us of the can make it.
                                </p>
                                <div class="contact-item wow fadeInUp" data-wow-delay=".5s">
                                    <a href="contact.html" class="theme-btn">Rejoigner Nous <i class="fa-solid fa-arrow-right-long"></i></a>
                                    <h6>
                                        <span>Call :</span>
                                        <a href="tel: +123 876 234"> (+226) 64.20.95.15</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
@endsection