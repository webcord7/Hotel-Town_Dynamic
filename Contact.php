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
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/xEDeoTafb2isst28A " target="_blank" class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>
            Pearl Continental Hotel,Lahore</a>
              <h5 class="mt-4">Call us:</h5>
              <a href="tel: +92325822834" class="d-inline-block text-dark mb-2 text-decoration-none "><i
                  class="bi bi-telephone-fill "></i> 03258228602</a>
              <br>
              <a href="tel: +92325822834" class="d-inline-block text-dark mb-2 text-decoration-none"><i
                class="bi bi-telephone-fill"></i> 03258228602</a>
                <h5 class="mt-4">
                  Email
                </h5>
                <a href="mailto: abdulrehmanwebz@gmail.com" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">abdulrehmanwebz@gmail.com</a>
                <h5 class="mt-4">Follow us:</h4>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-twitter-x me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                  <i class="bi bi-facebook me-1"></i>
              </a>
              <a href="#" class="d-inline-block text-dark fs-5">
                <i class="bi bi-instagram me-1 "></i>
            </a>
              </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="p-4 bg-white shadow rounded">
          <form>
            <h5>Send a Message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none "rows="1" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white shadow-none custom-bg mt-3">Send</button>

          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer  + Bootstrap Js-->

  <?php require('inc/footer.php'); ?>





</body>

</html>