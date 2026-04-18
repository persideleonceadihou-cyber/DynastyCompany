<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYNASTY COMPANY</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        /* uniquement pour les ecrans large on fixe la hauteur des carousels a 500px */
        @media (min-width: 992px) {
            
        }
    </style>
</head>
<body>
    <main class="container-fluid" style="padding-top: 20px">
        <div class="text-center p-3">
            <nav  class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <!--logo  -->
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="assets/image/logo.jpg" alt="logo_dynasty" width="100" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notre Equipe</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a  class="nav-link" href= "#">
                                    Nos partenaires
                                </a>
                              
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="d-flex flex-column justify-content-center align-items-center"
                style="
                    background-image: url('assets/image/back.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    width: 100%; height: 500px;">
                <h1 class="text-white">L'Élégance de la Logistique.</h1> <br>
                 <p >L'excellence en matière de transport de marchandises, location de véhicules et de formation en Afrique de l'Ouest. Structuré, fiable et infiniment performant.</p>
                <a href="service.php" class="btn btn-primary btn-lg">Nos services</a>

            </div>
        </div>
    </main>
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- Colonne 1 : À propos -->
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Dynasty Company</h5>
                <p>L'élégance de la logistique en Afrique de l'Ouest.</p>
            </div>

            <!-- Colonne 2 : Liens utiles -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Services</h5>
                <p>Transport</a></p>
                <p>Location</p>
                <p>Formation</p>
            </div>

            <!-- Colonne 3 : Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contact</h5>
                <p><i class="fas fa-home mr-3"></i> Cotonou, Bénin</p>
                <p><i class="fas fa-envelope mr-3"></i> info@dynasty.com</p>
                <p><i class="fas fa-phone mr-3"></i> +229 00 00 00 00</p>
            </div>
        </div>

        <hr class="mb-4">

        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p>Copyright ©2024 Tous droits réservés par :
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-primary">DYNASTY COMPANY</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>

</html>