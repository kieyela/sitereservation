<?php
session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>

<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title>Réservation - Keybat Travel</title>
    <meta
      charset="utf-8"
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <!--Fontawesome CDN-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="img/logo-white.png" alt="logo-keybat" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li>
                <a class="nav-link" href="index.php">Acceuil</a>
              </li>
              <li>
                <a class="nav-link" href="destinations.php">Destinations</a>
              </li>
              <li>
                <a class="nav-link" href="contact.php">Nous contacter</a>
              </li>
              <li>
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="language-selector"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img src="img/france-flag-icon-32.png" alt="french-flag" />
                  fr
                </a>
                <div class="dropdown-menu" aria-labelledby="language-selector">
                  <a class="dropdown-item" href="#">
                    <img
                      src="img/united-kingdom-flag-icon-32.png"
                      alt="uk-flag"
                    />
                    en
                  </a>
                  <a class="dropdown-item" href="#">
                    <img src="img/spain-flag-icon-32.png" alt="uk-flag" />
                    es
                  </a>
                </div>
              </li>
              <li class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="agent-profile"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-user"></i>
                  <?php if (!empty($_SESSION['login'])){ echo $_SESSION['agent']; } else { echo "Espace Agent";}   ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="agent-profile">
                  <?php
                  if (empty($_SESSION['login']) ){
                    echo '<a class="dropdown-item" href="login.php">Connexion</a>';
                  } else {
                    echo '<a class="dropdown-item" href="logout.php">Déconnexion</a>';
                  }
                  ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="welcome-container">
        <div class="container">
          <div class="pages-title">
            <h1>Réservation</h1>
            <div class="page-nav">
              <p>
                <a href="index.php">Acceuil</a> &nbsp; | &nbsp;
                <a href="destinations.php">Destination</a> &nbsp; | &nbsp;
                <a href="reservation.php">Réservation</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="slide container mt-3 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <span>Réservation</span>
              <h2 style="color: #000">Réservez votre billet</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form
              class="p-4 bg-dark-opaque"
              method="post"
              action="confirmation.php"
            >
              <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">
                  Informations client
                </legend>
                <div class="col-lg-8 p-3">
                  <div class="form-group">
                    <label>Nom du client</label>
                    <input
                      required="required"
                      name="client-name"
                      class="form-control"
                      placeholder="saisir ici"
                    />
                  </div>
                  <div class="form-group">
                    <label>numéro de télephone</label>
                    <input
                      required="required"
                      name="client-tel"
                      class="form-control"
                      placeholder="saisir ici"
                    />
                  </div>
                  <br />
                  <div class="form-group">
                    <label>Adresse Email</label>
                    <input
                      required="required"
                      name="client-mail"
                      class="form-control"
                      placeholder="saisir ici"
                    />
                  </div>
                  <br />
                  <div class="form-group">
                    <label>Numéro de passeport</label>
                    <input
                      name="client-passport"
                      class="form-control"
                      placeholder="saisir ici"
                    />
                  </div>
                </div>
              </fieldset>
              <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">
                  Détail de la resevation
                </legend>
                <div class="col-lg-8 p-3">
                  <div class="form-group">
                    <label>Identifiant de la destination</label>
                    <input
                      read-only
                      name="destination-iddest"
                      class="form-control"
                      placeholder="saisir ici"
                      hidden
                    />
                  </div>
                  <div class="form-group">
                    <label>Nom de la ville </label>
                    <select class="custom-select" name="" id="">
                      <option selected>Selectionner la destination</option>
                      <option value="">paris</option>
                      <option value="">abidjan</option>
                      <option value="">rabat</option>
                      <option value="">casablanca</option>
                      <option value="">bamako</option>
                      <option value="">millan</option>
                      <option value="">quebec</option>
                      <option value="">lile</option>
                    </select>

                    <div class="form-group">
                      <label>nom du pays</label>
                      <select class="custom-select" name="" id="">
                        <option selected>Selectionner la destination</option>
                        <option value="">cote d'ivoire</option>
                        <option value="">france</option>
                        <option value="">maroc</option>
                        <option value="">Mali</option>
                        <option value="">Allemagne</option>
                        <option value="">belgique</option>
                        <option value="">suisse</option>
                        <option value="">canada</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>date de départ</label>
                      <input name="billet-datdep" type="date" "form-control"
                      placeholder="saisir ici" />
                      <label>date de retour</label>
                      <input name="billet-datfin" type="date" "form-control"
                      placeholder="saisir ici" />
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <figure class="footer-logo">
          <img src="img/logo-white.png" alt="" />
        </figure>
        <ul class="footer-menu d-flex justify-content-center">
          <li><a href="index.php">ACCEUIL</a></li>
          <li><a href="destinations.php">DESTINATIONS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="#">BLOG</a></li>
        </ul>

        <div class="footer-social d-flex justify-content-center">
          <a href="#">
            <div><i class="fab fa-facebook-f"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-twitter"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-instagram"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-youtube"></i></div>
          </a>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>