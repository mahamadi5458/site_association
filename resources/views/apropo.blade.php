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
        <div class="breadcrumb-wrapper fix bg-cover" style="background-image: url(assets/img/apropo/apropo1.jpg);">
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

          <!-- Modernized design for the "A propos" page -->
         <section class="about-section section-padding fix">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8">
                        <div class="about-left-item">
                            <div class="section-title style-2 mb-4">
                                <span class="sub-title text-warning fw-bold">Présentation</span>
                                <h2 class="fw-bold" style="color: #3b0764;">L'association Femme Debout pour le Développement</h2>
                                <p class="text-muted">
                                    L'association Femme Debout pour le Développement (AFDD) est une organisation reconnue par ordonnance N°1887 du 16 février 2022. Elle vise à renforcer les capacités communautaires pour la résilience aux effets des disparités liées au genre.
                                </p>
                            </div>
                            <div class="about-image rounded shadow-sm overflow-hidden">
                                <img src="assets/img/home-2/about/01.jpg" alt="Présentation" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-right-item">
                            <div class="about-image rounded shadow-sm overflow-hidden mb-4">
                                <img src="assets/img/home-2/about/02.jpg" alt="Mission" class="img-fluid">
                            </div>
                            <div class="about-icon-main-item">
                                <div class="icon-item d-flex align-items-center mb-3">
                                    <div class="icon text-warning fs-3 me-3">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Éducation</h5>
                                        <p class="text-muted mb-0">Promouvoir l'accès à une éducation de qualité pour tous.</p>
                                    </div>
                                </div>
                                <div class="icon-item d-flex align-items-center mb-3">
                                    <div class="icon text-warning fs-3 me-3">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Santé sexuelle</h5>
                                        <p class="text-muted mb-0">Sensibiliser et améliorer la santé sexuelle et reproductive.</p>
                                    </div>
                                </div>
                                <div class="icon-item d-flex align-items-center">
                                    <div class="icon text-warning fs-3 me-3">
                                        <i class="fa-solid fa-leaf"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Environnement</h5>
                                        <p class="text-muted mb-0">Agir pour préserver notre planète et ses ressources.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Faq Section Start -->
         <section class="faq-section section-padding fix bg-light">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-items">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Quand l'association a-t-elle été créée ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Elle a été créée en 2022.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Quelle est la mission principale de l’AFDD ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Contribuer au bien-être des communautés en promouvant l’éducation inclusive, la santé, et l’égalité de genre.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <h4 class="fw-bold mb-4">Vidéo de présentation</h4>
                            <p class="text-muted">
                                Découvrez notre mission, nos projets et notre impact dans la communauté à travers cette vidéo.
                            </p>
                            <div class="faq-image position-relative">
                                <img src="assets/img/home-1/faq.jpg" alt="Vidéo" class="img-fluid rounded shadow-sm">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
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
                    
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>N</span>ous avons des Objectifs nobles
                    </h2>
                </div>
                <div class="testimonial-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-5 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="testimonial-image">
                                <img src="assets/img/apropo/apropo2.jpg" alt="img">
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
                                               
                                                <h3>Promouvoir l’éducation inclusive</h3>
                                                
                                                <p>
                                                   L’association œuvre pour garantir un accès équitable à l’éducation pour tous, sans distinction de sexe, de condition sociale ou de handicap. Elle met en place des actions pour accompagner les enfants et les jeunes en difficulté.
                                                   L’objectif est de réduire les exclusions scolaires. Elle encourage également un environnement d’apprentissage adapté à tous. Ainsi, chaque individu peut développer pleinement son potentiel.
                                                </p>
                                                
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                               
                                                <h3>Réduire les disparités liées au genre</h3>
                                                <p>
                                                    L’association œuvre pour garantir l’égalité des chances en matière d’éducation, indépendamment du genre. Elle met en place des initiatives pour sensibiliser et combattre les stéréotypes et les préjugés qui peuvent limiter l’accès à l’éducation pour certains groupes.
                                                </p>
                                                
                                               
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                              <h3>Promouvoir la santé sexuelle et reproductive</h3>
                                                <p>
                                                    L’association informe et sensibilise les adolescents et les jeunes sur les questions liées à la santé sexuelle. Elle
                                                    encourage des comportements responsables et prévient les risques comme les IST et les grossesses
                                                    précoces. Des campagnes de dépistage et de conseil sont organisées
                                                </p>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
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