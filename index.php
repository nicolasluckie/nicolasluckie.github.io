<?php
function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) //check ip from share internet
  {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //to check ip is pass from proxy
  {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return strval($ip);
}
// List of IPs with tracking disabled
$noTracking = ["10.0.0.50", "100.105.141.60", "99.246.125.252"]
  ?>

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

  <title id="title">Nic Luckie</title>

  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />

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

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Tracking [DISABLED FROM LOCAL IP] -->
  <?php
  if (in_array(getRealIpAddr(), $noTracking) == false) {
    echo '<script async src="https://analytics.nicolasluckie.com/script.js" data-website-id="0c0795bd-4750-45b6-bcec-ffd99748bb85"></script>';
  }

  ?>
</head>

<body>
  <!-- Hero Section, Background Image change in css -->
  <div id="top" class="hero background-overlay">
    <!-- Name & Description -->
    <div class="hero-content">
      <h1>Nic Luckie<span class="blink">_</span></h1>
      <p class="hero-job" style="margin-top: 40px">
        <span style="border-bottom: none">SOFTWARE DEVELOPER
      </p>
      <!--<p class="hero-job-desc">FOR HIRE</p>-->
    </div>
    <!-- /.hero-content -->

    <div class="hero-arrow page-scroll home-arrow-down">
      <a class="" href="#quote"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
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
            <!--<li class="page-scroll"><a href="#intro">Intro</a></li>-->
            <li class="page-scroll">
              <a href="#about" id="skills1">Skills</a>
            </li>
            <!--<li class="page-scroll"><a href="#services">Services</a></li>-->
            <!--<li class="page-scroll"><a href="#team">Team</a></li>-->
            <li class="page-scroll">
              <a href="#history" id="education1">Education</a>
            </li>
            <!--<li class="page-scroll"><a href="#works">Works</a></li>-->
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
    <!-- Quote section -->
    <section class="section-background section-quote background-overlay text-center" id="quote">
      <div class="container"
        style="background-color: rgba(0, 0, 0, 0.5);border-radius: 15px;padding: 10px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);-moz-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);">
        <p>
          A creative problem solver who enjoys <span>designing</span>, <span>improving</span>, and <span>automating
            processes</span> with software-driven solutions.

          <br /><br />Experienced in <span style="color: #128df9">web</span> and <span style="color: #128df9">software
            development</span>, IT project management,
          and supporting multiple large-scale technology projects and initiatives at various stages in the software
          development life cycle.

          <br /><br />Having always been fascinated by technology and eager to learn new things, I have learned several
          <span style="color: #128df9">programming languages</span>, <span style="color: #128df9">applications</span>,
          <span style="color: #128df9">platforms</span>, and <span style="color: #128df9">operating systems</span> on my
          own initiative; and in school.
        </p>
      </div>
    </section>
    <!-- /.section-quote -->
    <!-- End Quote section -->

    <!-- About section -->
    <section class="site-section section-about text-center" id="about">
      <div class="container">
        <h2>SKILLS</h2>
        <p class="section-subtitle">
          <span>SOME OF MY AREAS OF EXPERTISE</span>
        </p>
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-code" aria-hidden="true"></i>
              </div>

              <h3>FULL STACK DEVELOPMENT</h3>
              <p>As a full stack developer, I support both front-end and back-end aspects of web development. I code the
                graphical elements of websites using languages like HTML, PHP, CSS, and JavaScript. For back-end
                development I primarily use MySQL and Python.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-code-fork" aria-hidden="true"></i>
              </div>

              <h3>SOFTWARE DEVELOPMENT</h3>
              <p>I conceive, specify, design, program, document, test, and debug software components and applications;
                often in Java and C#. I also have experience in maintaining and updating software to adapt to changing
                business needs and user requirements.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-shield" aria-hidden="true"></i>
              </div>

              <h3>CYBER SECURITY</h3>
              <p>As a cybersecurity enthusiast, I take pride in implementing security protocols and measures to
                safeguard data from cyber-attacks. I can analyze security risks and vulnerabilities in systems,
                implement effective solutions, and proactively monitor, identify, and eliminate threat actors.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>

              <h3>DIGITAL INVESTIGATION</h3>
              <p>I find my strength in identifying, collecting, examining, and analyzing data while maintaining data
                integrity and a strict chain of custody. I am well-versed in digital investigation, and can offer
                valuable technical support conducting forensic investigations, and preparing detailed incident reports
                for resolution and legal action.
              </p>
            </div>

          </div>
        </div>
        <div class="row">

          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-laptop" aria-hidden="true"></i>
              </div>

              <h3>SYSTEM ADMINISTRATION</h3>
              <p>With expertise in Windows and Linux operating systems, I proficiently handle system administration
                tasks; ensuring smooth installations, configurations, maintenance, and data backups. I also develop
                comprehensive emergency response plans, and efficient backup and restoration procedures.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </div>

              <h3>NETWORK SECURITY</h3>
              <p>I design and implement robust network security solutions, including firewalls, intrusion detection and
                prevention systems, and conduct regular security audits.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-server" aria-hidden="true"></i>
              </div>

              <h3>VIRTUALIZATION</h3>
              <p>I deploy and manage hypervisors in virtualized environments for optimized resource utilization and
                seamless integration with physical infrastructure.
              </p>
            </div>

          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-cloud" aria-hidden="true"></i>
              </div>

              <h3>CLOUD MIGRATION AND MANAGEMENT</h3>
              <p>I support migrating on-premises systems to the cloud and optimizing cloud-based applications for
                cost-effectiveness, performance, and reliability.
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- /.section-about -->
    <!-- End About section -->

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
            <div class="rectangle"><span>2022</span></div>
          </li>
          <!-- /.timeline-start -->

          <!-- Timeline job & description, inverted  -->
          <li class="timeline-inverted">
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-position">
                  <p>CERTIFICATE</p>
                </div>
                <!-- /.timeline-position -->
                <div class="timeline-date">
                  <p>2022</p>
                </div>
                <!-- /.timeline-date -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-hc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Certified Cyber Security Specialist<br /></p>
                <p style="position: absolute; bottom: 40px; font-weight: bold">
                  Humber College
                </p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-inverted -->

          <!-- Timeline job & description  -->
          <li>
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-date">
                  <p>2020</p>
                </div>
                <!-- /.timeline-date -->
                <div class="timeline-position">
                  <p>DIPLOMA</p>
                </div>
                <!-- /.timeline-position -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-dc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Protection, Security, and Investigations<br /></p>
                <p style="position: absolute; bottom: 40px; font-weight: bold">
                  Durham College
                </p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>

          <!-- Timeline job & description, inverted  -->
          <li class="timeline-inverted" style="display: none">
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-position">
                  <p>ONTARIO SECURITY GUARD</p>
                </div>
                <!-- /.timeline-position -->
                <div class="timeline-date">
                  <p>2020</p>
                </div>
                <!-- /.timeline-date -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-sg.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Ministry of the Solicitor General</p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-inverted -->

          <!-- Timeline job & description  -->
          <li style="display: none">
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-date">
                  <p>2018</p>
                </div>
                <!-- /.timeline-date -->
                <div class="timeline-position">
                  <p>Standard First Aid CPR/AED Level C</p>
                </div>
                <!-- /.timeline-position -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-rc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Canadian Red Cross Certification</p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>

          <!-- Timeline job & description, inverted  -->
          <li class="timeline-inverted">
            <div class="rectangle timeline-rectangle"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <div class="timeline-position">
                  <p>DIPLOMA</p>
                </div>
                <!-- /.timeline-position -->
                <div class="timeline-date">
                  <p>2017</p>
                </div>
                <!-- /.timeline-date -->
              </div>
              <!-- /.timeline-heading -->
              <div class="timeline-body">
                <div class="timeline-body-thumb">
                  <img src="assets/img/timeline-img-sc.jpg" class="img-res" alt="" />
                </div>
                <!-- /.timeline-body-thumb -->
                <p>Computer Programming<br /></p>
                <p style="position: absolute; bottom: 40px; font-weight: bold">
                  Sheridan College
                </p>
              </div>
              <!-- /.timeline-body -->
            </div>
            <!-- /.timeline-panel -->
          </li>
          <!-- /.timeline-inverted -->

          <!-- Timeline Badge  -->
          <li class="timeline-end">
            <div class="rectangle"><span>2017</span></div>
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
        <!--<div class="rectangle">
          <i class="fa fa-envelope"></i>
        </div>-->
        <div class="text-center section-diff-title">
          <h2 style="color: white;">Contact Me</h2>
          <!--<p>This my Education and Experience</p>-->
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
        <!--<a href="mailto:nicolasluckie@gmail.com" class="btn btn-inverted" id="email">EMAIL</a>-->
      </div>
    </section>
    <!-- /.section-twitter-->
    <!-- End Twitter section -->

    <!-- Clients section -->
    <section class="section-clients">
      <div class="container">
        <div class="text-center section-diff-title">
          <h2>Clients I’ve Worked With</h2>
          <p></p>
        </div>
        <div class="row text-center">
          <!-- RBC -->
          <a target="_blank" href="https://www.rbc.com/about-rbc.html" class="client" id="btnRbc">
            <img src="assets/img/client-3.png" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- MacKinnon and Bowes -->
          <a target="_blank" href="https://mackinnonandbowes.com/" class="client" id="btnMackBowes">
            <img src="assets/img/client-1.png" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Eurofase -->
          <a target="_blank" href="https://www.eurofase.com/" class="client" id="btnEurofase">
            <img src="assets/img/client-2.png" class="img-responsive" alt="" /> </a><!-- /.client -->
        </div>
        <!-- /.clients-carousel -->
      </div>
    </section>
    <!-- /.section-clients -->
    <!-- End Clients section -->

    <!-- Social Networks section -->
    <section class="section-networks blue-bg">
      <div class="container">
        <!-- <a target="_blank" href="https://www.facebook.com/nicolasluckie" id="btnFacebook">
          <i class="fa fa-facebook"></i>
        </a> -->
        <a target="_blank" href="https://www.linkedin.com/in/nicolasluckie" id="btnLinkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a target="_blank" href="https://github.com/nicolasluckie" id="btnGithub">
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
        <!--<li class="page-scroll"><a href="#intro">Intro</a></li>-->
        <li class="page-scroll">
          <a href="#about" id="skills2">Skills</a>
        </li>
        <!--<li class="page-scroll"><a href="#services">Services</a></li>-->
        <!--<li class="page-scroll"><a href="#team">Team</a></li>-->
        <li class="page-scroll">
          <a href="#history" id="education2">Education</a>
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

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- jQuery core js | Do not Delete -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap core js | Do not Delete -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap progressbar JS -->
  <script src="assets/js/bootstrap-progressbar.min.js"></script>

  <!-- Count To JS -->
  <script src="assets/js/jquery.countTo.min.js"></script>

  <!-- Easing JS -->
  <script src="assets/js/jquery.easing.min.js"></script>

  <!-- Shuffle JS -->
  <script src="assets/js/jquery.shuffle.min.js"></script>

  <!-- Slick Carousel JS -->
  <script src="assets/js/slick.min.js"></script>

  <!-- Touchswipe JS -->
  <script src="assets/js/touchswipe.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      // Button click events
      // top navbar
      $("#about1").click(function () {
        umami.track("About (top) clicked");
      });
      $("#skills1").click(function () {
        umami.track("Skills (top) clicked");
      });
      $("#education1").click(function () {
        umami.track("Education (top) clicked");
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
      // Contact section
      $("#contactqr").click(function () {
        umami.track("Contact:QR clicked");
      });
      $("#email").click(function () {
        umami.track("Contact:email clicked");
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
      // $("#btnFacebook").click(function() {
      //   umami.track("Social:Facebook clicked");
      // });
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
      $("#skills2").click(function () {
        umami.track("Skills (bottom) clicked");
      });
      $("#education2").click(function () {
        umami.track("Education (bottom) clicked");
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