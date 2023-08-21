<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JoTravel</title>
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.php">
            JoTravel
          </a></h1>

        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Pocetna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administracijaPonuda.php">Administracija ponuda</a>
            </li>
          </ul>
        </div>

        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </header>

  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>Ne morate da putujete daleko da otkrijete ono sto vam znaci.</h3>
              <h6 class="mb-3">Nadji svoju novu avanturu</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Posetite</h6>
        <h3 class="hny-title">Neke od nasih destinacija</h3>
      </div>
      <div id="ponude" class="row bottom-ab-grids">

      </div>
    </div>
  </section>

  <footer>
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2023 JoTravel. All rights reserved.</p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };
  
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }
  
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/slider-js-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/modernizr-2.6.2.min.js"></script>
  <script src="assets/js/jquery.zoomslider.min.js"></script>
  <!--//slider-js-->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>

  <script src="assets/js/jquery.waypoints.min.js"></script>

  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });
  </script>

  <script src="assets/js/bootstrap.min.js"></script>

    <script>
        $.ajax({
            'url': 'server.php',
            'data': {
                'operacija': 'dohvatiPonude'
            },
            success: function (data){

                let niz = JSON.parse(data);

                let podaci = niz.map(function (ponuda){

                    let cenaSaPopustom = ponuda.cena - ponuda.cena * ponuda.popust / 100;

                    return '<div class="col-lg-6 subject-card mt-lg-0 mt-4">' +
                    '<div class="subject-card-header p-4">' +
                    '<a href="#" class="card_title p-lg-4d-block">' +
                        '<div class="row align-items-center">' +
                            '<div class="col-sm-5 subject-img">' +
                                '<img src="assets/images/' + ponuda.slika +'" class="img-fluid" alt="">' +
                            '</div>' +
                            '<div class="col-sm-7 subject-content mt-sm-0 mt-4">' +
                                '<h4>' + ponuda.naziv + '</h4>' +
                                '<p> Trajanje putovanja: ' + ponuda.duzina_putovanja + ' dana</p>' +
                                '<div class="dst-btm">' +
                                    '<h6 class=""> Cena putovanja: </h6>' +
                                    '<span>' + cenaSaPopustom + ' &euro; ' + ((ponuda.popust !== 0) ? '<p style="text-decoration-line: line-through;">('+ponuda.cena+'&euro;)</p>' : '') + '</span>' +
                                '</div>' +
                                '<p class="sub-para">Drzava: ' + ponuda.naziv_zemlje +'</p>' +
                                '<p class="sub-para">Tip putovanja: ' + ponuda.tip +'</p>' +
                        '</div>'  +
                        '</div>' +
                    '</a>' +
                '</div>' +
            '</div>';
                });


                $("#ponude").html(podaci);
            }
        });
    </script>

</body>

</html>