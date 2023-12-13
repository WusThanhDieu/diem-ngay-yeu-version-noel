<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_expire(1);
header('Vary: Accept');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng～Giáng sinh</title>
    <meta name="description" content="Điếm ngày yêu - cùng chờ đợi tới ngày giáng sinh.">
    <meta property="og:description" content="Điếm ngày yêu - cùng chờ đợi tới ngày giáng sinh.">
    <meta property="og:image" content="https://i.imgur.com/UjWNwDK.png?<?=bin2hex(random_bytes(5));?>">
    <link rel="icon" type="image/jpg" href="https://thanhdieu.com/thanhdieuft-data/img/logo.jpg?<?=bin2hex(random_bytes(5));?>">
    <link href="./_static/jav/css/xh.css?<?=bin2hex(random_bytes(5));?>" rel="stylesheet">
    <link href="./_static/jav/css/main.css?<?=bin2hex(random_bytes(5));?>" rel="stylesheet">
  </head>
  <body>
    <div class="background-ngayyeu"></div>
    <div class="diem-ngay-yeu">
      <div class="inner-glow-ngayyeu">
        <div class="text-ngayyeu" id="ngay-noel"></div>
        <div class="text-ngayyeu" id="ngay-yeu"></div>
      </div>
    </div>
    <div id="main">
      <div id="BackgroundImage"></div>
      <div id="videoContainer">
        <video id="video1" muted="muted" preload="auto" onended="ChangeVideo()">
          <source src="./_static/render/mc.mp4?<?=bin2hex(random_bytes(5));?>" type="video/mp4">
        </video>
      </div>
      <audio id="music1" loop="loop" preload="auto">
        <source src="./_static/render/Noel.mp3?<?=bin2hex(random_bytes(5));?>" type="audio/mpeg">
      </audio>
      <div id="start-noel">
        <div id="snow"></div>
      <div id="Container-Jav">
        <div class="inner-glow-container">
          <img class="avatar-image" src="./_static/img/thanhhdieu.jpg?<?=bin2hex(random_bytes(5));?>" alt="Ảnh tôi">
          <div class="text-container">
       Thanh Diệu <img class="girl-tick" src="./_static/img/banhradiem.webp?<?=bin2hex(random_bytes(5));?>">
          </div>
        </div>
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;">
          <img class="jumping-image" src="./_static/img/love.gif?<?=bin2hex(random_bytes(5));?>" style="">
        </div>
        <div class="inner-glow-container">
          <img class="avatar-image" src="./_static/img/phuongtrang.jpeg?<?=bin2hex(random_bytes(5));?>" alt="Ảnh bạn gái tôi">
          <div class="text-container">
     Phương Trang <img class="girl-tick" src="./_static/img/dutvodianh.webp?<?=bin2hex(random_bytes(5));?>">
          </div>
        </div>
      </div>
      <div id="ButtonContainer">
        <button id="PlayButton" onclick="StartMedia()">❄ Giáng Sinh Vui Vẻ ❄</button>
      </div>
    </div>
    <script src="./_static/jav/js/jquery-3.6.4.min.js?<?=bin2hex(random_bytes(5));?>"></script>
    <script src="./_static/jav/js/td-main.js?<?=bin2hex(random_bytes(5));?>"></script>
  </body>
</html>