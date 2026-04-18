@extends('layouts.template')

@section('content')
    
 <!-- Hero Section Start -->
        <div class="breadcrumb-wrapper fix bg-cover" style="background-image: url(assets/img/contact/contact_image.jpg);">
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Contactez Nous</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                      Contact Us
                    </li>
                  </ul>
                </div>
            </div>
        </div>

         <!-- Contact Section Start -->
        <div class="contact-us-section-2 section-padding fix">
            <div class="container">
                <div class="contact-us-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="contact-us-box">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contact-us-content">
                                    <span>Numéro de Telephone</span>
                                    <h5>
                                        <a href="tel:+13685678954"> (+226) 78 53 13 90</a> <br>
                                        <a href="tel:+23645689622"> (+226) 64 20 95 15 </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="contact-us-box">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact-us-content">
                                    <span>Localisation</span>
                                    <h5>
                                        Gounghin, secteur 20 <br> Burkina Faso, Ouagadougou
                                    </h5>
                                </div>
                            </div>
                            <div class="contact-us-box mb-0">
                                <div class="icon">
                                    <i class="fa-solid fa-square-chevron-down"></i>
                                </div>
                                <div class="contact-us-content">
                                    <span>Emails</span>
                                    <h5>
                                    <a href="mailto:example@email.com"> afd219@yahoo.com</a> <br>
                                    <a href="mailto:hridoytb@email.com">omariefrancoise@yahoo.fr </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="from-fill-up-box">
                                <h4>
                                    Envoyez nous un Message
                                </h4>
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name2" placeholder="Votre nom">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Entrer votre mail">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="number" id="number" placeholder="Numéro de telephone">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn ">
                                                Envoyer <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection