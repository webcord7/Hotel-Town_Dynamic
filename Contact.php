<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL TOWN - Contact-us</title>
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

</head>

<body class="bg-light">
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all .3s;

    }
  </style>
  <!-- header  -->
  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="h-font fw-bold text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Facere mollitia id odit, vero expedita molestiae veniam labore in rem ea!</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="p-4 bg-white shadow rounded">
          <iframe class="w-100 rounded mb-4" height="320px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217698.64919803524!2d74.3343893!3d31.509287213823633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1715250566761!5m2!1sen!2s"
            loading="lazy"></iframe>
            <h5>d</h5>
            <a href="https://maps.app.goo.gl/xEDeoTafb2isst28A " target="_blank" ><i class="bi bi-geo-alt-fill"></i>MY hotel</a>
          </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="p-4 bg-white shadow rounded">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_43553.svg" width="40px" alt="">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Soluta non qui dolor hic, doloribus suscipit praesentium?
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer  + Bootstrap Js-->

  <?php require('inc/footer.php'); ?>





</body>

</html>