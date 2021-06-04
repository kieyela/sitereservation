<?php
session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title>Destinations - Keybat Travel</title>
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
            <h1>Nos destinations</h1>
            <div class="page-nav">
              <p>
                <a href="#">Acceuil</a> &nbsp; | &nbsp;
                <a href="#">Destinations</a>
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
              <span>Destinations</span>
              <h2 style="color: #000">Partez à la découverte<br />du monde</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card-columns">
            <div class="card">
              <img
                class="card-img-top"
                src="img/dubai.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Dubai</h4>
                <p class="card-text">Dubai, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/bresil.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Bresil</h4>
                <p class="card-text">Bresil, un très beau site.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/etats unis.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Etats Unis</h4>
                <p class="card-text">Etats Unis, un très beau site.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
          </div>
          <div class="card-columns">
            <div class="card">
              <img
                class="card-img-top"
                src="img/france.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">France</h4>
                <p class="card-text">France,un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/espagne2.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Espagne</h4>
                <p class="card-text">Espagne, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/danemark.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Danemark</h4>
                <p class="card-text">Danemark, un très beau site.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
          </div>
          <div class="card-columns">
            <div class="card">
              <img
                class="card-img-top"
                src="img/turki.jpg"
                alt=""
                width="10px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Turki</h4>
                <p class="card-text">Turki, un très beau pays</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/australie.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Australie</h4>
                <p class="card-text">Astralie, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/angleterre.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Angleterre</h4>
                <p class="card-text">Angleterre, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
          </div>
          <div class="card-columns">
            <div class="card">
              <img
                class="card-img-top"
                src="img/ghana.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Ghana</h4>
                <p class="card-text">Ghana, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/togo.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Togo</h4>
                <p class="card-text">Togo, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
            <div class="card">
              <img
                class="card-img-top"
                src="img/Afrique du sud.jpg"
                alt=""
                width="30px"
                height="200px"
              />
              <div class="card-body">
                <h4 class="card-title">Afrique du Sud</h4>
                <p class="card-text">Afrique du Sud, un pays de rêve.</p>
                <a class="btn btn-primary" href="reservation.php" role="button"
                  >Réserver</a
                >
              </div>
            </div>
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