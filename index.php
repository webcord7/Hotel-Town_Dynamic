<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL TOWN</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- icon bootstrap link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- css file  -->
  <link rel="stylesheet" href="css/common.css">
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
  <!-- Poppins & Merienda fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
  <!-- Swipper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-light">
  <!-- NavBar  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 shadow-sm sticky-top ">
    <!-- sticky-top  shadow bootstrap -->
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
        <!-- <img src="images/logo.png" class="logo d-none d-lg-block d-xl-block d-xxl-block" alt=""> -->
        Hotel Town
      </a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>


        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 login-btn" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            LogIn
          </button>
        </div>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
  </nav>


  <!-- LogIn Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h5>
            <button type="rest" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">

              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">LogIn</button>
              <a href="javascript: void(0)">Forgot Password?</a>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Register Modal -->

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i
                class="bi bi-person-lines-fill text-warning fs-3 me-2"></i>User
              Registeration</h5>
            <button type="rest" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match
              with your ID Card that will be required during check-in.</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="text-center  my-1">
                  <button type="submit" class="btn btn-dark shadow-none">Register</button>

                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

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

  <!-- Footer  -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 p-4 text-center">
        <h3 class="h-font fw-bold fs-3 mb-2 text-decoration-underline">HOTEL TOWN</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Porro dolorem rem unde maxime blanditiis 
          possimus saepe expedita ad. Molestias nisi,
           atque sit maxime quae mollitia culpa eveniet aliquam architecto nobis!
        </p>
      </div>
      <div class="col-lg-4 p-4 text-center">
<h5 class="mb-3 text-decoration-underline">Links</h5>
<a href="#"class=" d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
<a href="#"class=" d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
<a href="#"class=" d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
<a href="#"class=" d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
<a href="#"class=" d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4 text-center">
<h5 class="mb-3 text-decoration-underline">Follow us</h5>
<a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
  <i class="bi bi-twitter-x me-1"></i>Twitter </a> <br>
  <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-facebook me-1"></i>Facebook </a> <br>
    <a href="#" class="d-inline-block text-dark text-decoration-none">
  <i class="bi bi-instagram me-1"></i>Instagram
</a>

      </div>
      <h6 class="bg-dark text-center text-white p-3 m-0">Designed and Develop By Abdulrehman</h6>
    </div>
  </div>
 



  <!-- bootstrap js  -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
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