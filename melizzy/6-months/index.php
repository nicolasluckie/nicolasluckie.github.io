<?php
session_start();
require_once("../db/db.inc.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Melizzy</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Poppins&family=Solitreo&display=swap" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    * {
      padding: 0;
      margin: 0;
      font-family: "Poppins", sans-serif;
    }

    audio {
      visibility: hidden;
    }

    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }

    body {
      background-color: #539eff;
    }

    .container {
      height: 650px;
      width: 600px;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .container:hover .overlay {
      height: 100%;
    }

    .shapes {
      height: 250px;
      width: 250px;
      background: linear-gradient(45deg, #07b516, #80fa8a);
      border-radius: 50%;
      position: absolute;
      right: 0;
    }

    .shapes:before {
      content: "";
      position: absolute;
      height: 250px;
      width: 250px;
      top: 197px;
      background: linear-gradient(45deg, #b50707, #fa8080);
      border-radius: 50%;
      right: 347px;
    }

    .card {
      position: absolute;
      height: 550px;
      width: 550px;
      background-color: rgba(255, 255, 255, 0.15);
      border: 2px solid rgba(255, 255, 255, 0.2);
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 8px;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.08);
      cursor: pointer;
      overflow: hidden;
    }

    .card img {
      position: absolute;
      width: 300px;
      filter: drop-shadow(0 0 20px rgba(26, 0, 68, 0.34));
      bottom: 0;
      left: 120px;
      top: 20%;
      transition: 0.5s ease;
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.95);
      overflow: hidden;
      width: 100%;
      height: 0;
      transition: 0.5s ease;
    }

    .text-container {
      color: white;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 60%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .card h2 {
      color: #000000;
    }

    .card h3 {
      color: #000000;
    }

    .card h4 {
      color: #000000;
    }

    .card h5 {
      color: #000000;
    }

    .card p {
      font-weight: 300;
      text-align: justify;
      color: #000000;
      line-height: 1.8;
      letter-spacing: 0.3px;
    }

    /* .card:hover img {
        width: 250px;
        left: 15px;
        bottom: 20px;
      } */
    /* .card:hover .text-container {
        right: 15px;
      } */
  </style>
</head>

<body>
  <div class="container">
    <div class="w3-center w3-animate-bottom" style="line-height: 0; text-shadow: rgba(255,255,255,0.9) 0px 0px 12px;">
      <h2 style="text-align: center; font-family: 'Playfair Display', serif;">Hello, beautiful 😘</h2>
    </div>
    <div class="card" id="card" style="font-family: 'Poppins', sans-serif;">
      <img src="../public/loveyou4.PNG" />
      <div class="overlay">
        <div class="text-container">
          <h2 id="date" style="font-family: 'Poppins', sans-serif;">Happy 6 Months!</h2>
          <p>
          I can’t believe you’ve put up with me for half a year and haven’t ran away… yet 😈<br><br>
      I appreciate all of your love, patience, and incredible dad jokes. You make me a better man with each passing day.<br><br>
      Thank you for being so simply wonderful.
            <br />
            <small>I love you now and always,<br />Ninky Doody 💘</small>
          </p>
        </div>
      </div>
    </div>
    <!-- <audio controls id="audio">
        <source
          src="../public/Jim_Reeves_An_Old_Christmas_Card.mp3"
          type="audio/mp3"
        />
        Your browser does not support the audio element.
      </audio> -->
  </div>
</body>
<script type="text/javascript">
  const shapes = document.querySelector('.shapes');

  function printCurrentDate() {
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth() + 1; // January is 0
    var day = today.getDate();

    // Add leading zeros to the month and day if necessary
    month = (month < 10) ? "0" + month : month;
    day = (day < 10) ? "0" + day : day;

    document.getElementById("date").innerHTML = year + "-" + month + "-" + day;
    // console.log(year + "-" + month + "-" + day);
  }


  function setRandomColor() {
    const color1 = getRandomColor();
    const color2 = getRandomColor();
    shapes.style.background = `linear-gradient(45deg, ${color1}, ${color2})`;
  }

  function getRandomColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16);
  }

  setRandomColor();
  //printCurrentDate();


  // var card = document.getElementById("card").addEventListener("mouseover", (event) => {});

  // onmouseover = (event) => {
  //   playAudio();
  // };

  // function playAudio() {
  //   var audio = document.getElementById("audio");
  //   audio.play();
  // }
</script>

</html>