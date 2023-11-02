<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .links a {
    font-size: 1.5rem;
    color: black;
  }

  .fa-arrow-left-long {
    margin: 0 1rem;
  }

  .navbar {
    background-color: aliceblue;
  }

  .nav-item .nav-link {
    color: black !important;

  }
</style>

<body>
  <?php include('./header.html') ?>

  <div class="container-fluid parralax2 ">
        <div class="row p-5 d-flex align-items-center justify-content-center">
            <div class="col w-auto">
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="links ml-auto ml-sm-0 ml-md-0 w-auto">
                <a href="./index.php">Home</a><i class="fa-solid fa-arrow-left-long fa-flip-horizontal"></i><a
                    href="./contact.php">Contact</a>
            </div>
        </div>
    </div>

  <section class="my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-4 col-sm-6 my-4 align-items-center d-flex justify-content-center ">
          <div class="text-center contact-icons">
            <i class="fa-solid fa-location-dot"></i>
            <p >Location</p>
            <h4>Delhi, India</h4>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-sm-6 my-4 align-items-center d-flex justify-content-center ">
          <div class="text-center contact-icons">
            <i class="fa-solid fa-envelope"></i>
            <p >Email</p>
            <h4>vikas610@gmail.com</h4>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-sm-12 my-4 align-items-center d-flex justify-content-center ">
          <div class="text-center contact-icons">
            <i class="fa-solid fa-phone"></i>
            <p >Contact No.</p>
            <h4>9310488674</h4>
          </div>
        </div>
      </div>
  </section>
<section class="our-service-section">
  <div class="container mt-5 pb-5">
    <div class="row d-flex justify-content-between" >
      <div class="col text-center mt-5 pt-5">
        <p>JUST A CALL AWAY</p>
        <H1>We'd Love To Hear From You</H1>
        <p>We are here and always ready to help you. Let us know how we serve you and we’ll get back within no time.</p>
      </div>
    </div>
    <form action="./dbconfig/config.php" class="row  form-center" method="POST">
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4  ">
          <input type="text" class="form-control py-4" placeholder="Your name" required name="first_name">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4  ">
          <input type="text" class="form-control py-4" placeholder="Last Name" required name="last_name">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4  ">
          <input type="email" class="form-control py-4" placeholder="Your Email" required name="email">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4  ">
          <input type="text" class="form-control py-4" placeholder="Phone No." minlength="10" maxlength="10" required name="contact">
      </div>
      <div class="col-12 mt-4  ">
          <textarea type="text" class="form-control py-4" rows="5" placeholder="Your Message" style="resize: none;" required name="contacttext"></textarea>
      </div>
      <div class="col mt-4">
      <button type="submit" class="btn btn-primary w-100">Submit</button>
      </div>
      
    </form>
  </div>
</section>



  <?php include('./footer-4.html') ?>

  <script src=".\js\script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>



</body>

</html>