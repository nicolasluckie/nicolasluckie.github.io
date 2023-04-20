<?php
function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
  {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
  {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return strval($ip);
}
// List of IPs with tracking disabled
$noTracking = ["10.0.0.50", "173.34.41.208"]
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
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->

  <!-- Font Awesome core CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <!-- <link rel="stylesheet" href="assets/css/style.css?v=2" /> -->

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

  <style>
    @import url('https://fonts.googleapis.com/css?family=Fira+Mono:400');

    body {
      display: flex;
      width: 100vw;
      height: 100vh;
      align-items: center;
      justify-content: center;
      margin: 0;
      background: #131313;
      color: #fff;
      font-size: 96px;
      font-family: 'Fira Mono', monospace;
      letter-spacing: -7px;
    }

    div {
      animation: glitch 1s linear infinite;
    }

    @keyframes glitch {

      2%,
      64% {
        transform: translate(2px, 0) skew(0deg);
      }

      4%,
      60% {
        transform: translate(-2px, 0) skew(0deg);
      }

      62% {
        transform: translate(0, 0) skew(5deg);
      }
    }

    div:before,
    div:after {
      content: attr(title);
      position: absolute;
      left: 0;
    }

    div:before {
      animation: glitchTop 1s linear infinite;
      clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
      -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
    }

    @keyframes glitchTop {

      2%,
      64% {
        transform: translate(2px, -2px);
      }

      4%,
      60% {
        transform: translate(-2px, 2px);
      }

      62% {
        transform: translate(13px, -1px) skew(-13deg);
      }
    }

    div:after {
      animation: glitchBotom 1.5s linear infinite;
      clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
      -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
    }

    @keyframes glitchBotom {

      2%,
      64% {
        transform: translate(-2px, 0);
      }

      4%,
      60% {
        transform: translate(-2px, 0);
      }

      62% {
        transform: translate(-22px, 5px) skew(21deg);
      }
    }
  </style>
</head>

<body>

  <div title="404">404</div>

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
</body>

</html>