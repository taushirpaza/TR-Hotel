<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tauship Hotel-home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <?php require('inc/links.php'); ?>
<style>
  main{
  display: flex;
}
.availability-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width: 575px){
.availability-form{
  margin-top: 25px;
  padding: 0 35px;
}
}
</style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/main (1).png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/main (2).png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/main (3).png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/main (4).png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/main (5).png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/main (6).png" class="w-100 d-block"/>
      </div>
      <!-- carousel -->
<div.<div class="container-fluid px-lg-4 mt-4">
</div>
<!-- check availability form -->
<div class="container availability-form">
<div class="row">
  <div class="col-lg-12 bg-white shadow p-4 rounded">
    <h5 class="mb-4">Check Booking Availability</h5>
    <form>
      <div class="row align-items-end">
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-in</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-out</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Adult</label>
          <select class="form-select shadow-none">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500;">Children</label>
          <select class="form-select shadow-none">
              <option value="1">None</option>
            <option value="2">One</option>
            <option value="3">Two</option>
            <option value="4">Three</option>
          </select>
        </div>
<div class="col-lg-1 mb-lg-3 mt-2">
  <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
</div>
      </div>
    </form>
  </div>
</div>
</div>
      </div>
    </div>
</div>

<!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Super Deluxe Room</h5>
          <h6 class="mb-4">रु 2500 per night</h6>
          <div class="features mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
           2 Rooms
          </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Bathroom
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Balcony
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            3 Sofa
           </span>
          </div>
          <div class="facilities mb-4">

          </div>
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Wi-Fi
           </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Television
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             Room Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             24 hrs Hot/cold Water
            </span>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>

                  <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap"></span>
                </div>
                <div class="d-flex justify-content-evently mb-3">

                </div>
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div> 
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/room (5).png" class="card-img-top">
        <div class="card-body">
          <h5>Most Popular Room</h5>
          <h6 class="mb-4">रु 2000 per night</h6>
          <div class="features mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
           2 Rooms
          </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Bathroom
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Balcony
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            2 Sofa
           </span>
          </div>
          <div class="facilities mb-4">

          </div>
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Wi-Fi
           </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Television
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             Room Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             24 hrs Hot/cold Water
            </span>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>

                  <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap"></span>
                </div>
                <div class="d-flex justify-content-evently mb-3">

                </div>
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/room (7).png" class="card-img-top">
        <div class="card-body">
          <h5>Luxury Room</h5>
          <h6 class="mb-4">रु 5000 per night</h6>
          <div class="features mb-4">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
           2 Rooms
          </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Bathroom
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            1 Balcony
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            3 Sofa
           </span>
          </div>
          <div class="facilities mb-4">

          </div>
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Wi-Fi
           </span>
          <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
            Television
           </span>
           <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             AC
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             Room Heater
            </span>
            <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap">
             24 hrs Hot/cold Water
            </span>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>

                  <span class="badge rounded-pill bg-light text-dark mn-3 text-wrap"></span>
                </div>
                <div class="d-flex justify-content-evently mb-3">

                </div>
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
    </div>
  </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row d-flex justify-content-space-evently px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin-left: 10px;">
  <img src="images/facilities/wifi.svg" width="80px">
  <h5 class="mt-3">Wi-Fi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/tv.svg" width="80px">
      <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/ac.svg" width="80px">
          <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/facilities/heater.svg" width="80px">
              <h5 class="mt-3">Heater</h5>
                </div>

                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
                                <!-- Testimonials -->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
      <div class="swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
    <div class="profile d-flex align-item-center mb-3">
  <img src="images/about/rating.svg" width="30px">
  <h6 class="m-0 ms-2">Random User1</h6>
</div>
<p>
  The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown.
</p>
<div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-item-center mb-3">
      <img src="images/about/rating.svg" width="30px">
      <h6 class="m-0 ms-2">Random User1</h6>
    </div>
    <p>
      I had a wonderful experience at Tauship Hotel. Every staff member I encountered, from the valet to the check-in to the cleaning staff, was delightful and eager to help! Thank you! Will recommend to my colleagues!
    </p>
    <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-item-center mb-3">
          <img src="images/about/rating.svg" width="30px">
          <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>
          The best hotel I’ve ever been privileged enough to stay at. Gorgeous building, and it only gets more breathtaking when you walk in. High-quality rooms and high-quality service. Also, they are one of the few hotels that allow people under 21 to book a reservation.
        </p>
        <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
                  <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-item-center mb-3">
                  <img src="images/about/rating.svg" width="30px">
                  <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                  The staff at this property are all great! They all go above and beyond to make your stay comfortable. Please give your staff awards!
                </p>
                <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

   </div>
  </div>
</div>

               <!-- Reach us -->
               <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14136.443328194022!2d85.31816831646867!3d27.652042469426362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1763afe90a91%3A0x24e78f10fcea8163!2sSatdobato%2C%20Lalitpur%2044700!5e0!3m2!1sen!2snp!4v1735296804675!5m2!1sen!2snp" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col lg-4 col-md-4">
<div class="bg-white p-4 rounded mb-4">
  <h5>Call Us</h5>
  <a href="tel: +977 9864056441" class="d-inline-block mb-2 text-decoration-none text-dark">
    <i class="bi bi-telephone-forward-fill"></i> +977 9864056441
  </a>
  <a href="tel: +977 9864056441" class="d-inline-block mb-2 text-decoration-none text-dark">
    <i class="bi bi-telephone-forward-fill"></i> +977 9704540410
  </a>
</div><div class="bg-white p-4 rounded mb-4">
  <h5>Follow Us</h5>
  <a href="https://www.facebook.com/who.am.i.2058?sfnsn=wa&mibextid=RUbZ1f" class="d-inline-block mb-3">
    <span class="badge bg-light text-dark fs-6 p-2">
      Facebook
      </span>
    <i class="bi bi-facebook me-1"></i></a>
    <br>
    <a href="https://www.instagram.com/whoami101011?utm_source=qr&igsh=enk4djI2bHZ3Y2Y4" class="d-inline-block mb-3">
      <span class="badge bg-light text-dark fs-6 p-2">
        Instagram
        </span>
      <i class="bi bi-instagram me-1"></i></a>
      </br>
</div>

    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "2",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1080: {
          slidesPerView: 3,
        },
        1440: {
          slidesPerView: 3,
        },
        
      }
    });
</script>

</body>
</html>