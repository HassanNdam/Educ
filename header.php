<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
    <title><?php echo bloginfo("name");?></title>

    <?php wp_head();?>
</head>
<body>


<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
           
      <div class="collapse navbar-collapse" id="navbarCollapse">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Mot clé..." aria-label="Rechercher">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>

</header>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
      <a href="<?php echo get_site_url();?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" >
        <img src="<?php echo (get_template_directory_uri(). '/img/Logo.png');?>" class="img-fluid" alt="..." width="100%">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">ACCEUIL</a></li>
        <li class="nav-item"><a href="#" class="nav-link">A PROPOS</a></li>
        <li class="nav-item"><a href="#" class="nav-link">NOS SERVICES</a></li>
        <li class="nav-item"><a href="#" class="nav-link">NOS FORMATIONS</a></li>
        <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
      </ul>
    </header>
</div>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="<?php echo (get_template_directory_uri(). '/img/learning2.png');?>" class="img-fluid" alt="..." width="100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>E-Ducation.</h1>
            <p>Toutes vos formations en Elearning chez E-DUC</p>
            <p><a class="btn btn-lg btn-primary" href="#">Commencer</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="<?php echo (get_template_directory_uri(). '/img/learning2.png');?>" class="img-fluid" alt="..." width="100%">

        <div class="container">
          <div class="carousel-caption text-start">
             <h1>E-Ducation.</h1>
            <p>Toutes vos formations en Elearning chez E-DUC</p>
            <p><a class="btn btn-lg btn-primary" href="#">Commencer</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="<?php echo (get_template_directory_uri(). '/img/learning2.png');?>" class="img-fluid" alt="..." width="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>E-Ducation.</h1>
            <p>Toutes vos formations en Elearning chez E-DUC</p>
            <p><a class="btn btn-lg btn-primary" href="#">Commencer </a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<div class="container bienvenue">
 
        <h1 class="text-center"><span class="meilleur">Bienvenue</span> sur E-DUC, le meilleur du <span class="point">Elearning!</span> </h1>
</div>


<div class="container corps">
  <div class="row">
    <div class="col entreprise">
            <span class="material-icons">
            home
            </span>

            <p>
                <h1>Notre entreprise</h1>
            </p>
    </div>
    <div class="col pedagogie">
                <span class="material-icons">
            add_circle_outline
            </span>
            <p>
                <h1>Notre pédagogie</h1>
                <span class="material-icons bas">
                vertical_align_bottom
                </span>
                <a class="btn btn-lg btn-primary" href="#">Me former maintenant</a>
            </p>
    </div>
    <div class="col formation">
            <span class="material-icons">
        lightbulb
        </span>
        <p>
                <h1>Nos formations</h1>
        </p>
    </div>

  </div>
</div>

<div class="container formons">
 
        <h1 class="text-center">Le <span class="meilleur">meilleur</span> de nos cours <span class="point">!</span> </h1>
</div>



<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           
            <img src="<?php echo (get_template_directory_uri(). '/img/CSHARP.png');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">C#</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Mohamed Ndiaye</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/PHP.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">PHP</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Hassan Ndam</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/js.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Javascript</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Hassan Ndam</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/gestion.png');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Clés du management</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Mohamed Ndiaye</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/gestion.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Gestion de projet</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Fabiola</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/wordpress.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">WordPress</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Charonne</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/react.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">React</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : Nassaratou</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/css.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">
            <div class="card-body">
              <p class="card-text">CSS</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : M. ATTAL</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo (get_template_directory_uri(). '/img/jsquery.jpg');?>" class="img-fluid" alt="..." width="100%" height="225">

            <div class="card-body">
              <p class="card-text">jQuery</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                </div>
                <small class="text-muted">Auteur : </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<p class="interet">
    <a class="btn btn-lg btn-primary" href="#">JE SUIS TRES INTERESSE</a>
</p>
