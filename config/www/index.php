<!DOCTYPE html>
<!--
################################
||                            ||
||    My Personal Website     ||
||   www.nicolasluckie.com    ||
||Copyright (c) Nicolas Luckie||
||                            ||
################################
-->
<html lang="en">

<head>
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title id="title">Nicolas Luckie</title>

  <meta name="description" content="Nicolas Luckie" />
  <meta name="author" content="Nicolas Luckie" />
  <meta name="keywords" content="Nicolas Luckie" />

  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet" />

  <!-- Favicon
    ================================================== -->
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon.png?v=2" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png?v=2" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png?v=2" />
  <link rel="icon" sizes="16x16" href="assets/img/favicon.ico?v=2" />
  <link rel="manifest" href="assets/img/manifest.json" />
  <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Stylesheets
    ================================================== -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Font Awesome core CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=2" />

  <!-- Analytics -->
  <script async src="https://analytics.nicolasluckie.com/script.js"
    data-website-id="fb4a75a5-dce7-4dc5-bb1a-159be3e82ae1"></script>
</head>

<body>
  <!-- Hero Section, Background Image change in css -->
  <div id="top" class="hero background-overlay">
    <!-- Name & Description -->
    <div class="hero-content">
      <h1>Nic Luckie</h1>
      <!--<p id="debug"></p>-->
      <!-- <span class="blink">_</span> -->
      <p class="hero-job"><span class="typed" data-typed-items="SOFTWARE ENGINEER, PROBLEM-SOLVER, NERD"></span></p>
      <!-- <p class="hero-job" style="margin-top: 40px">
        <span style="border-bottom: none">SOFTWARE DEVELOPER
      </p> -->
      <!--<p class="hero-job-desc">FOR HIRE</p>-->
    </div>
    <!-- /.hero-content -->

    <div class="hero-arrow page-scroll home-arrow-down">
      <a class="" href="#works"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>
    <!-- /.hero-arrow -->
  </div>
  <!-- /.hero -->
  <!-- End Hero -->

  <!-- Header -->
  <header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation" data-spy="affix">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#portfolio-perfect-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Name -->
          <div class="page-scroll site-logo">
            <a href="#top">Nic</a>
          </div>
        </div>
        <!-- /.navbar-header -->

        <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">
          <!-- Navigation -->
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll">
              <a href="#main" id="about1">About</a>
            </li>
            <li class="page-scroll">
              <a href="#works" id="projects1">Projects</a>
            </li>
            <li class="page-scroll">
              <a href="#contact" id="contact1">Contact</a>
            </li>
            <li class="page-scroll">
              <a href="https://blog.nicolasluckie.com/" target="_blank" id="blog1">Blog</a>
            </li>
            <li class="page-scroll">
              <a href="https://wiki.nicolasluckie.com/" target="_blank" id="wiki1">Wiki</a>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- /.primary-navigation -->
  </header>
  <!-- /#header -->
  <!-- End Header -->

  <!-- Main content -->
  <main id="main" class="site-main">

    <!-- Portfolio/Works section -->
    <section class="site-section section-works" id="works" style="background-color: #f6f6f6;">
      <div class="container">
        <h2>PROJECTS</h2>
        <!-- <p class="section-subtitle"><span>Subtitle</span></p> -->

        <!-- Portfolio -->
        <div class="portfolio">

          <!-- Portfolio sorting -->
          <ul class="portfolio-sorting list-inline">
            <li><a href="#" class=" active" data-group="all">all</a></li>
            <li><a href="#" class="" data-group="desktopapps">Desktop Apps</a></li>
            <li><a href="#" class="" data-group="webdev">Web Apps</a></li>
            <!-- <li><a href="#" class="" data-group="mobileapps">Mobile apps</a></li> -->
          </ul><!-- /.portfolio-sorting  -->

          <!-- grid | 4-columns="col-md-3 col-sm-4 col-xs-6" 2-columns="col-md-6 col-sm-8 col-xs-12 -->
          <div id="grid" class="shuffle">

            <!-- Portfolio item -->
            <div class="col-md-6 col-sm-8 col-xs-12 shuffle-item filtered" data-groups="[&quot;webdev&quot;]">
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-2.jpg" alt="" class="img-res">
                  <a href="https://nicolasluckie.com/FIS/" id="fis" class="rectangle" target="_blank">
                    <i class="fa fa-plus"></i>
                  </a>
                </div><!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <a href="https://nicolasluckie.com/FIS/" target="_blank" id="fis2">
                    <h3>Funeral Information System</h3>
                  </a>
                  <p>A mobile-first CMS solution designed for a funeral home.</p>
                </div><!-- /.portfolio-info  -->
              </div>
            </div><!-- /.col-md-3  -->

            <!-- Portfolio item" -->
            <div class="col-md-6 col-sm-8 col-xs-12 shuffle-item filtered" data-groups="[&quot;desktopapps&quot;]">
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-1.jpg" alt="" class="img-res">
                  <a href="https://github.com/nicolasluckie/streamdeck-gpu" id="gpu" class="rectangle" target="_blank">
                    <i class="fa fa-plus"></i>
                  </a>
                </div><!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <a href="https://github.com/nicolasluckie/streamdeck-gpu" target="_blank" id="gpu2">
                    <h3>streamdeck-gpu</h3>
                  </a>
                  <p>A Stream Deck plugin that displays the current GPU temperature.</p>
                </div><!-- /.portfolio-info  -->
              </div>
            </div><!-- /.col-md-3  -->

          </div><!-- /#grid -->

        </div>
        <!-- /.portfolio -->

      </div>
    </section><!-- /.section-works -->
    <!-- End Works section -->


    <!-- Quote section -->
    <section class="site-section section-background section-quote background-overlay text-center" id="quote">
      <p class="section-subtitle" style="margin-bottom: 15px;">
        <span style="color: #fff;">ABOUT</span>
      </p>
      <div class="container"
        style="background-color: rgba(0, 0, 0, 0.5);border-radius: 15px;padding: 10px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);-moz-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);">
        <p>
          Software Engineer with a combined 10 years of experience in web and software development.
          <br><br>Background in designing, implementing, and maintaining software solutions using both agile and
          waterfall methodologies.
          <br><br>Leverages skills in programming, software architecture, and automation to support and enhance
          large-scale technology
          projects throughout the software development life cycle.
        </p>
      </div>
    </section>
    <!-- /.section-quote -->
    <!-- End Quote section -->


    <!-- History section -->
    <section class="section-history" id="history">
      <div class="container">
        <div class="text-center section-diff-title">
          <h2>EDUCATION & CERTIFICATIONS</h2>
          <!--<p>This my Education and Experience</p>-->
        </div>
        <!-- Timeline -->
        <ul class="timeline">
          <!-- Timeline badge -->
          <li class="timeline-start">
            <div class="rectangle"></div>
          </li>
          <!-- /.timeline-start -->

          <!-- Timeline-Left  -->
          <li>
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <!-- <div class="timeline-date">
                  <p>2022</p>
                </div> -->
                <!-- /.timeline-date -->
                <div class="timeline-position">
                  <p style="text-transform: unset;">Humber College</p>
                </div>
                <!-- /.timeline-position -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-hc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Certified Cyber Security Specialist</p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-left -->

          <!-- Timeline-Right  -->
          <li class="timeline-inverted">
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-position">
                  <p style="text-transform: unset;">Durham College</p>
                </div>
                <!-- /.timeline-position -->
                <!-- <div class="timeline-date">
                  <p>2020</p>
                </div> -->
                <!-- /.timeline-date -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-dc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Protection, Security, and Investigations</p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-right -->

          <!-- Timeline-Left  -->
          <li>
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <!-- <div class="timeline-date">
                  <p>2017</p>
                </div> -->
                <!-- /.timeline-date -->
                <div class="timeline-position">
                  <p style="text-transform: unset;">Sheridan College</p>
                </div>
                <!-- /.timeline-position -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-sc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Computer Programming</p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-left -->

          <!-- Timeline Badge  -->
          <li class="timeline-end">
            <div class="rectangle"></div>
          </li>
          <!-- /.timeline-end -->
        </ul>
        <!-- /.timeline -->
      </div>
    </section>
    <!-- /.section-history -->
    <!-- End History section -->

    <!-- GitHub section -->
    <section class="section-background section-twitter background-overlay text-center" id="contact">
      <div class="container">
        <div class="text-center section-diff-title">
          <h2 style="color: white; z-index: 1000;">CONTACT</h2>
        </div>
        <div class="text-center" style="
              margin-left: auto;
              margin-right: auto;
              margin-top: 35px;
              position: relative;
            ">
          <a href="vcard/nicolasluckie" id="contactqr"><img style="border-radius: 10px; width: 200px"
              src="assets/img/qr-code.svg" /></a>
        </div>
      </div>
    </section>
    <!-- /.section-twitter-->
    <!-- End Twitter section -->

    <!-- Social Networks section -->
    <section class="section-networks blue-bg">
      <div class="container">
        <!-- <a target="_blank" href="https://www.facebook.com/nicolasluckie" id="btnFacebook">
          <i class="fa fa-facebook"></i>
        </a> -->
        <a class="rectangle" target="_blank" href="https://www.linkedin.com/in/nicolasluckie" id="btnLinkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a class="rectangle" target="_blank" href="https://github.com/nicolasluckie" id="btnGithub">
          <i class="fa fa-github"></i>
        </a>
      </div>
    </section>
    <!-- /.section-networks-->
    <!-- End Social Networks section -->
  </main>
  <!-- /#main -->
  <!-- End Main content -->

  <!-- Footer -->
  <footer id="colophon" class="site-footer">
    <div class="container-fluid">
      <ul class="list-unstyled list-inline">
        <li class="page-scroll">
          <a href="#main" id="about2">About</a>
        </li>
        <!--<li class="page-scroll"><a href="#team">Team</a></li>-->
        <li class="page-scroll">
          <a href="#works" id="projects2">Projects</a>
        </li>
        <!--<li class="page-scroll"><a href="#works">Works</a></li>-->
        <li class="page-scroll">
          <a href="#contact" id="contact2">Contact</a>
        </li>
        <li class="page-scroll">
          <a href="https://blog.nicolasluckie.com/" target="_blank" id="blog2">Blog</a>
        </li>
        <li class="page-scroll">
          <a href="https://wiki.nicolasluckie.com/" target="_blank" id="wiki2">Wiki</a>
        </li>
      </ul>

      <div class="page-scroll">
        <a href="#top" class="rectangle">
          <i class="fa fa-angle-double-up"></i>
        </a>
      </div>
    </div>

    <div class="container text-center">
      <p class="copyright">&copy;
        <?php echo date("Y"); ?> Nicolas Luckie
      </p>
    </div>
  </footer>
  <!-- /#footer -->
  <!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-progressbar.min.js"></script>
  <script src="assets/js/jquery.countTo.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.shuffle.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/touchswipe.min.js"></script>
  <script src="assets/js/typed.js/typed.umd.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {

      // Debugging feature to show the width and height of the viewport
      // in a <p> tag located under the main page title

      //var h=$(window).height(), w=$(window).width();
      //$("#debug").html("<p style='color: yellow; text-transform: none; background-color: rgba(0, 0, 0, 0.8); border-radius: 15px;'>Screen: "+w+"x"+h+"</p>");

      // Intro text
      var typed = $('.typed');
      if (typed.length) {
        var typed_strings = typed.data('typed-items');
        typed_strings = typed_strings.split(',');
        new Typed('.typed', {
          strings: typed_strings,
          loop: true,
          typeSpeed: 25,
          backSpeed: 25,
          backDelay: 750
        });
      }

      // Button click events
      $("#about1").click(function () {
        umami.track("About (top) clicked");
      });
      $("#projects1").click(function () {
        umami.track("Projects (top) clicked");
      });
      $("#contact1").click(function () {
        umami.track("Contact (top) clicked");
      });
      $("#blog1").click(function () {
        umami.track("Blog (top) clicked");
      });
      $("#wiki1").click(function () {
        umami.track("Wiki (top) clicked");
      });

      // Project section
      $("#gpu").click(function () {
        umami.track("Projects: streamdeck-gpu clicked");
      });
      $("#gpu2").click(function () {
        umami.track("Projects: streamdeck-gpu clicked");
      });
      $("#fis").click(function () {
        umami.track("Projects: FIS clicked");
      });
      $("#fis2").click(function () {
        umami.track("Projects: FIS clicked");
      });

      // Contact section
      $("#contactqr").click(function () {
        umami.track("Contact:QR clicked");
      });

      // Client buttons
      $("#btnRbc").click(function () {
        umami.track("Client:RBC clicked");
      });
      $("#btnMackBowes").click(function () {
        umami.track("Client:MackBowes clicked");
      });
      $("#btnEurofase").click(function () {
        umami.track("Client:Eurofase clicked");
      });

      // Social buttons
      $("#btnLinkedin").click(function () {
        umami.track("Social:Linkedin clicked");
      });
      $("#btnGithub").click(function () {
        umami.track("Social:GitHub clicked");
      });

      // Bottom navbar
      $("#about2").click(function () {
        umami.track("About (bottom) clicked");
      });
      $("#projects2").click(function () {
        umami.track("Projects (bottom) clicked");
      });
      $("#contact2").click(function () {
        umami.track("Contact (bottom) clicked");
      });
      $("#blog2").click(function () {
        umami.track("Blog (bottom) clicked");
      });
      $("#wiki2").click(function () {
        umami.track("Wiki (bottom) clicked");
      });
    });
  </script>
</body>

</html>