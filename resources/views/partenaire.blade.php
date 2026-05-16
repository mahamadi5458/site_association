@extends('layouts.template')


@section('content')
    <!-- Hero Section Start -->
    <div class="breadcrumb-wrapper fix bg-cover" style="background-image: url(assets/img/partenaire/partenaire2.jpg);">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Partenaires</h1>
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
                        Partenaires
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Team Section Start -->
    <section class="team-section section-padding fix pb-0">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title wow fadeInUp">Nos Partenaires</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    <span>S</span>ection des différents partenaires de l'association
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/armoirie-01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                Ministère de la Justice, des Droits Humains et de la Promotion Civique
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/armoirie-01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                Ministère de la jeunesse et
                                l’insertion professionnelle
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/armoirie-01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                Ministère de la santé,
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/armoirie-01.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                Ministère de l’Action Humanitaire et de la solidarité Nationale
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section section-padding fix pb-0">
        <div class="container">

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/logo2.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                PAMAC
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/logo1.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                IGNITY
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/logo3.jpg" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                CILS IS Burkina Faso,
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assets/img/partenaire/logo4.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h5>
                                MEBAPLN,
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

       

    <div class="container">
        <div class="row">
           
            <div class="col-4">
                <img src="assets/img/partenaire/partenaire1.jpg" alt="Example Image" class="img-fluid rounded" style="max-width: 100%; height: 80%; display: block; margin: 0 auto;" />
            </div>

            <div class="col-8">
                    <!-- fin colonne image -->

                <!-- ══ COLONNE FORMULAIRE ══ -->
               
                    <div class="p-4 p-lg-5 w-100">

                        <!-- En-tête formulaire -->
                        <p class="text-uppercase text-warning fw-semibold small letter-spacing mb-1">
                            <i class="bi bi-stars me-1"></i> Rejoignez-nous
                        </p>
                        <h2 class="fw-bold mb-1" style="color: #3b0764;">Devenir Partenaire</h2>
                       
                        <hr class="border-warning border-2 opacity-100 mb-4" style="width: 48px;" />

                        <form action="{{ route('partenariat.send') }}" method="POST" novalidate>
                            @csrf

                            <!-- Type de partenariat -->
                            <p class="text-uppercase fw-semibold small text-secondary mb-2">
                                <i class="bi bi-tag me-1"></i> Type de partenariat
                            </p>
                            <div class="row g-2 mb-4">
                                <div class="col-6 col-sm-3">
                                    <input type="radio" class="btn-check" name="typePartenariat" id="tp-financier"
                                        value="financier" autocomplete="off" checked />
                                    <label class="btn btn-outline-warning w-100 text-start py-2 px-3" for="tp-financier">
                                        <i class="bi bi-cash-coin d-block fs-5 mb-1"></i>
                                        <span class="small">Financier</span>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <input type="radio" class="btn-check" name="typePartenariat" id="tp-technique"
                                        value="technique" autocomplete="off" />
                                    <label class="btn btn-outline-warning w-100 text-start py-2 px-3" for="tp-technique">
                                        <i class="bi bi-tools d-block fs-5 mb-1"></i>
                                        <span class="small">Technique</span>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <input type="radio" class="btn-check" name="typePartenariat" id="tp-formation"
                                        value="formation" autocomplete="off" />
                                    <label class="btn btn-outline-warning w-100 text-start py-2 px-3" for="tp-formation">
                                        <i class="bi bi-mortarboard d-block fs-5 mb-1"></i>
                                        <span class="small">Formation</span>
                                    </label>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <input type="radio" class="btn-check" name="typePartenariat" id="tp-medias"
                                        value="medias" autocomplete="off" />
                                    <label class="btn btn-outline-warning w-100 text-start py-2 px-3" for="tp-medias">
                                        <i class="bi bi-megaphone d-block fs-5 mb-1"></i>
                                        <span class="small">Médias</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Informations de contact -->
                            <p class="text-uppercase fw-semibold small text-secondary mb-2">
                                <i class="bi bi-person me-1"></i> Informations de contact
                            </p>
                            <div class="row g-3 mb-4">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="prenom" placeholder="Prénom"
                                            required />
                                        <label for="prenom">Prénom</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nom" placeholder="Nom"
                                            required />
                                        <label for="nom">Nom de famille</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            required />
                                        <label for="email"><i class="bi bi-envelope me-1"></i> Adresse e-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="telephone"
                                            placeholder="Téléphone" />
                                        <label for="telephone"><i class="bi bi-telephone me-1"></i> Téléphone</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations organisation -->
                            <p class="text-uppercase fw-semibold small text-secondary mb-2">
                                <i class="bi bi-building me-1"></i> Votre organisation
                            </p>
                            <div class="row g-3 mb-4">
                                <div class="col-sm-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="organisation"
                                            placeholder="Organisation" />
                                        <label for="organisation">Nom de l'organisation</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="typeOrg">
                                            <option value="" disabled selected></option>
                                            <option>ONG / Association</option>
                                            <option>Entreprise privée</option>
                                            <option>Institution publique</option>
                                            <option>Organisme international</option>
                                            <option>Particulier</option>
                                        </select>
                                        <label for="typeOrg">Catégorie</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pays"
                                            placeholder="Pays / Ville" />
                                        <label for="pays"><i class="bi bi-geo-alt me-1"></i> Pays / Ville</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="url" class="form-control" id="site"
                                            placeholder="Site web" />
                                        <label for="site"><i class="bi bi-globe me-1"></i> Site web
                                            (optionnel)</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Motivation -->
                            <p class="text-uppercase fw-semibold small text-secondary mb-2">
                                <i class="bi bi-chat-left-text me-1"></i> Votre démarche
                            </p>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="motivation" placeholder="Motivation" style="height:110px"></textarea>
                                <label for="motivation">Décrivez votre motivation et ce que vous souhaitez
                                    apporter…</label>
                            </div>

                            <!-- Bouton + note -->
                            <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3">
                                <button type="submit"
                                    class="btn btn-warning text-white fw-semibold px-4 py-3 rounded-pill d-flex align-items-center gap-2">
                                    Soumettre ma candidature
                                    <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                                </button>
                                <span class="text-muted small">
                                    <i class="bi bi-shield-check text-warning me-1"></i>
                                    Données traitées de manière confidentielle
                                </span>
                            </div>

                        </form>
                    </div>
               
                <!-- fin colonne formulaire -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
