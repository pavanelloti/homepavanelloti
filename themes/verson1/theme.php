<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?= $head; ?>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- fonts style -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap">
  <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="<?= url("/"); ?>">
            <img src="<?= theme("/assets/images/logopavanello.png"); ?>" title="PavanelloTI" alt="PavanelloTI">
            <span>
             Pavanello TI
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?= url("/"); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url("/sobre"); ?>"> Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url("/servico"); ?>"> Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= url("/contato"); ?>">Contatos</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    
    
      <?= $this->section("content"); ?>
    

  <section class="info_section layout_padding" style="background-color: #ffffff;">
    <div class="footer_contact">
      <div class="heading_container">
        <h2>
          Contate-nos
        </h2>
      </div>
      <div class="box">
        <a href="" class="img-box">
          <img src="<?= theme("/assets/images/location.png"); ?>" alt="" class="img-1">
          <img src="<?= theme("/assets/images/location-o.png"); ?>" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="<?= theme("/assets/images/call.png"); ?>" alt="" class="img-1">
          <img src="<?= theme("/assets/images/call-o.png"); ?>" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="<?= theme("/assets/images/envelope.png"); ?>" alt="" class="img-1">
          <img src="<?= theme("/assets/images/envelope-o.png"); ?>" alt="" class="img-2">
        </a>
      </div>
    </div>


  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 - 2023 Todos direitos reservados
      <a href="https://html.design/">Pavanello Tecnologia da Informação</a>
    </p>
  </section>
  <!-- footer section -->

  <script src="<?= theme("/assets/script.js"); ?>"></script>
  <?= $this->section("scripts"); ?>

</body>

</html>