<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL TOWN - About</title>
  <?php require('inc/links.php')?>
  <style>
    .form-availablity {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 768px) {
      .login-btn {
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
  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>
  <!-- header  -->
  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="h-font fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark">
    </div>
    <p class="text-center mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Facere mollitia id odit, vero expedita molestiae veniam labore in rem ea!</p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">

        <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quibusdam vel neque ipsam accusantium esse est vero aliquam,
          iusto corrupti!Ab doloribus dolorem veniam magnam dolor
          debitis amet modi, non reiciendis.</p>
      </div>
      <div class="col-lg-6 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/about.jpg" class="w-100">
      </div>

    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="p-4 bg-white shadow rounded border-4 border-dark border-top text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3 fs-5">200+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="p-4 bg-white shadow rounded border-4 border-dark border-top text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3 fs-5">200+ STAFFS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="p-4 bg-white shadow rounded border-4 border-dark border-top text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3 fs-5">200+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="p-4 bg-white shadow rounded border-4 border-dark border-top text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3 fs-5">200+ CUSTOMERS</h4>
        </div>
      </div>
    </div>
  </div>
  <h3 class="my-5 h-font fw-bold text-center">MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="row">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide text-center rounded overflow-hidden bg-white">
            <img src="images/about/staff.svg " class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView:4,
            spaceBetween:40,
            loop:true,
              pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
      
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
    </div>
  </div>

  <!-- Footer  + Bootstrap Js-->

  <?php require('inc/footer.php'); ?>





</body>

</html>