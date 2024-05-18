<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL TOWN - Home</title>
<?php require('inc/links.php')?>
  <style>
    .form-availablity {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
    @media screen and (max-width: 768px) {
      .login-btn{
        margin-bottom: 15px;
      }
    }
    
    @media screen and (max-width: 575px) {
      .form-availablity {
        margin-top: 25px;
        padding: 0px 35px;

      }
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }



    /* .logo {
    height: 60px;
    width: 80px;
} */
  </style>
  
  <!-- Swipper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-light">
<!-- header  -->
<?php require('inc/header.php') ?>
  <!-- Carousel  -->

  <div class="container-fluid px-lg-4 mt-4">
    <!-- padding left right ... lg screen and margin top 4  -->
    <div class="swiper Swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/carousel/IMG_15372.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="./images/carousel/IMG_40905.png" class="w-100 d-block" />
        </div>
        <div class=" swiper-slide">
          <img src="./images/carousel/IMG_55677.png" class="w-100 d-block" />
        </div>
        <div class=" swiper-slide">
          <img src="./images/carousel/IMG_62045.png" class="w-100 d-block" />
        </div>
        <div class=" swiper-slide">
          <img src="./images/carousel/IMG_93127.png" class="w-100 d-block" />
        </div>
        <div class=" swiper-slide">
          <img src="./images/carousel/IMG_99736.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>
  <!-- Check Availablity form -->
  <div class="container form-availablity">
    <div class="row ">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availablity</h5>
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
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-dark shadow-none custom-bg ">Submit</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <!--  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5">

        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="">Simple Room Name</h5>
            <h6 class="mb-4">2000 RS Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Children
              </span>
             
            </div>
            <div class="mb-4 Rating">
              <h6 class="mb-1">Rating</h6>

              <span class="badge rounded-pill bg-light ">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm  btn-outline-dark custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">

        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="">Simple Room Name</h5>
            <h6 class="mb-4">2000 RS Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Children
              </span>
             
            </div>
            <div class="mb-4 Rating">
              <h6 class="mb-1">Rating</h6>

              <span class="badge rounded-pill bg-light ">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm  btn-outline-dark custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">

        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="">Simple Room Name</h5>
            <h6 class="mb-4">2000 RS Per Night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Children
              </span>
             
            </div>
            <div class="mb-4 Rating">
              <h6 class="mb-1">Rating</h6>

              <span class="badge rounded-pill bg-light ">

                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm  btn-outline-dark custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More >>></a>
      </div>
    </div>
  </div>
  <!-- Our Facilities -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <!--  -->
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-lg-0 px-5">
      <div class="col-lg-2 col-md-2 bg-white text-center rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white text-center rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_41622.svg" width="80px" alt="">
        <h5 class="mt-3">Television</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white text-center rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_27079.svg" width="80px" alt="">
        <h5 class="mt-3">Water Heater</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white text-center rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_47816.svg" width="80px" alt="">
        <h5 class="mt-3">SPA</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white text-center rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_49949.svg" width="80px" alt="">
        <h5 class="mt-3">AC</h5>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
  <!-- Our Testimonials -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR TESTIMONIALS</h2>
  <!--  -->
  <div class="container mt-5">
    <div class="swiper swiper-testtimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="images/facilities/IMG_43553.svg" width="30px">
            <h6 class="m-0 ms-2">Random User</h6>
          </div>
          <p>

            This is the paragraph you know his is about testimonials ok.Thanks.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
  </div>

  <!-- Reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <!--  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217698.64919803524!2d74.3343893!3d31.509287213823633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1715250566761!5m2!1sen!2s"
          loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="bg-white p-4 mb-4 rounded">
          <h4 class="text-decoration-underline">Call us:</h4>
          <a href="tel: +92325822834" class="d-inline-block text-dark mb-2 text-decoration-none p-2"><i
              class="bi bi-telephone-fill p-2"></i> 03258228602</a>
          <br>
          <a href="tel: +92325822834" class="d-inline-block text-dark mb-2 text-decoration-none p-2"><i
              class="bi bi-telephone-fill p-2"></i> 03258228602</a>
        </div>
        <div class="bg-white p-4 mb-4 rounded">
          <h4 class="text-decoration-underline">Follow us:</h4>
          <a href="#" class="d-inline-block mb-3 ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter-x me-1"></i>Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3 ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer  + Bootstrap Js-->

 <?php require('inc/footer.php'); ?>
 



 
  <!-- Swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".swiper-testtimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: "auto",
      slidesPerView: "3",

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
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        320: {
          slidesPerView: 1,
        }
      }
    });
  </script>
</body>

</html>