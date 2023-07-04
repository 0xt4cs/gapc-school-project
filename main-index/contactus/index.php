<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <title>Contact Us - Governor Andres Pascual College</title>
  <link rel="icon" href="../../gapc.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8668404933371529" crossorigin="anonymous"></script>
</head>

<body>
  <iframe src="../../media/" frameborder="0" style="
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 350px;
        height: 80px;
        z-index: 999;
      "></iframe>
  <div class="container">
    <button class="go-back-btn" onclick="goToHomePage()">
      &nbsp; &larr; Go Back &nbsp;
    </button>
    <div class="contact-box">
      <div class="left"></div>
      <div class="right">
        <h2>Contact Us</h2>
        <div class="input-container">
          <input type="text" class="field" placeholder="Your Name" />
          <i class="fas fa-user icon"></i>
        </div>
        <div class="input-container">
          <input type="text" class="field" placeholder="Your Email" />
          <i class="fas fa-envelope icon"></i>
        </div>
        <div class="input-container">
          <input type="text" class="field" placeholder="Phone" />
          <i class="fas fa-phone icon"></i>
        </div>
        <textarea placeholder="Message" class="field"></textarea>
        <button class="btn">Send</button>
        <button class="btn location-btn">Location</button>
      </div>
    </div>
  </div>
  <div class="modal">
    <div class="modal-content">
      <span class="close"> CLOSE &times; </span>
      <div class="map-responsive">
        <div class="col-md-6 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.8641860384337!2d120.94189377681404!3d14.663647875526525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b4566239fe99%3A0x14da3752bbf119d3!2sGovernor%20Andres%20Pascual%20College!5e0!3m2!1sen!2sph!4v1682587819213!5m2!1sen!2sph" width="100%" height="800" style="border: 0; border-radius: 5px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script src="./script.js"></script>
</body>

</html>