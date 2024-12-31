<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tauship Hotel-about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    
    <style>
    .box{
      border-top-color: var(--teal) !important;
    }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">ABOUT US</h2>

<div class="h-line bg-dark"></div>
<p class="text-center mt-3">
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
  Iste quidem veniam aperiam iusto praesentium omnis corrupti, 
  quis delectus quos explicabo?
  </p>
  </div>
    <div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-2 order-2">
      <h3 class="mb-3">Taushir Mansur</h3>
      <p>
       Founder and CEO of Tauship Hotel <br>
       Under Taushir's leadership, Tauship Hotel's Rooms has become a global hospitality giant, with operations in multiple countries and a significant presence in the hotel industry. His vision and determination have made him one of the youngest and most successful entrepreneurs in the world
  </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-2 order-1">
  <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
  </div>
<div class="container mt-5">
<div class="row">
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-whtie rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/hotel.svg" width="70px">
      <h4 class="mt3">100+ ROOMS</h4>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-whtie rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/customers.svg" width="70px">
      <h4 class="mt3">200+ CUSTOMERS</h4>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-whtie rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/rating.svg" width="70px">
      <h4 class="mt3">150+ REVIEWS</h4>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-whtie rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/staff.svg" width="70px">
      <h4 class="mt3">200+ STAFFS</h4>
    </div>
  </div>
</div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team1.jpg" class="w-100">
      <h5 class="mt-2">Taushir Mansur</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/aashik.jpg" class="w-100">
      <h5 class="mt-2">Aashik Mansur</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/sugam.jpg" class="w-100">
      <h5 class="mt-2">Sugam Shrestha</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
  slidePerView: 2,
  spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });
</script>
</body>
</html>