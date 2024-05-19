<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL TOWN - Rooms</title>
  <?php require('inc/links.php')?>


</head>

<body class="bg-light">
  <!-- header  -->
  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="h-font fw-bold text-center">Rooms</h2>
    <div class="h-line bg-dark"></div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-In</label>
                <input type="date" class="shadow-none mb-3 form-control">
                <label class="form-label">Check-Out</label>
                <input type="date" class="shadow-none mb-3 form-control">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <!-- form-chech-input       new info  -->
                <div>
                  <input type="checkbox" id="f1" class="form-chech-input shadow-none me-1 ">
                  <label class="form-check-label" for="f1">facility one</label>
                </div>
                <div>
                  <input type="checkbox" id="f2" class="form-chech-input shadow-none me-1 ">
                  <label class="form-check-label" for="f2">facility two</label>
                </div>
                <div>
                  <input type="checkbox" id="f3" class="form-chech-input shadow-none me-1 ">
                  <label class="form-check-label" for="f3">facility three</label>
                </div>

              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="number" class="shadow-none form-control">
                  </div>
                  <div>
                    <label class="form-label">Adults</label>
                    <input type="number" class="shadow-none form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
              <img src="./images/rooms/IMG_11892.png" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
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
              <div class="Facilities mb-3">
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
              <div class="Guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2  mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4">200Rs Per Night</h6>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
              <img src="./images/rooms/IMG_11892.png" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
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
              <div class="Facilities mb-3">
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
              <div class="Guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2  mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4">200Rs Per Night</h6>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
              <img src="./images/rooms/IMG_11892.png" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
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
              <div class="Facilities mb-3">
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
              <div class="Guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                  4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4">200Rs Per Night</h6>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <!-- Footer  + Bootstrap Js-->

  <?php require('inc/footer.php'); ?>





</body>

</html>