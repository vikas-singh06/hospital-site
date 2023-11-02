<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<style>
  .section-2 {
    background-image: url('../images/bg2.jpg');
    background-size: 300px 100px;
    background-repeat: no-repeat;
  }

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


  <!-- here start body  -->
  <div class="container-fluid parralax2 ">
    <div class="row p-5 d-flex align-items-center justify-content-center">
      <div class="col w-auto">
        <h1>About</h1>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="links ml-auto ml-sm-0 ml-md-0 w-auto">
        <a href="./index.php">Home</a><i class="fa-solid fa-arrow-left-long fa-flip-horizontal"></i><a
          href="./about.php">About Us</a>
      </div>
    </div>
  </div>

  <!-- our medical section start here  -->

  <section class="section-2 my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 col-md-12">
          <div class="image-1">
            <img src="./images/img1.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12 our-medical px-lg-5 px-sm-4 px-2">
          <h5 class="text-center mt-4">OUR MEDICAL</h5>
          <h2>We're setting Standards in Research what's more, Clinical Care.</h2>
          <p>We provide the most full medical services, so every person could have the pportunity o receive qualitative
            medical help.</p>
          <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics
            and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with
            over 30 years of uality training and experience.</p>
          <button class="btn btn-primary">MORE ABOUT</button>
        </div>
      </div>
    </div>
  </section>


  <!-- our medical section end here  -->
  <!-- our appointment section end here  -->
  <div class="container-fluid mt-1 mb-5">
    <div class="row p-lg-5">
      <div class="col-lg-6 col-md-12 col-12 bg-white query-box">
     
          <form class="row p-lg-5" action="./dbconfig/config.php" method="POST">
            <div class="col-12 mt-3 pt-lg-5">
              <input type="text" class="form-control " height="20px" placeholder="Firts Name" required name="first_name">
            </div>
            <div class="col-12 mt-3">
              <input type="text" class="form-control " height="20px" placeholder="Last Name" required name="last_name">
            </div>
            <div class="col-12 mt-3">
              <input type="email" class="form-control " height="20px" placeholder="Your Email" required name="email">
            </div>
            <div class="col-12 mt-3">
              <input type="text" class="form-control " height="20px" placeholder="Your Number" required name="contact">
            </div>
            <div class="col-12 mt-3">
              <textarea name="" id="" rows="6" class=" w-100 p-2" placeholder="Tell us about patient"
                style="resize: none;" required name="contacttext"></textarea>
            </div>
            <div class="col-12 mt-3">
              <button type="submit" class="form-control btn btn-primary ">Send Query</button>
            </div>
          </form>
     
      </div>
      <div class="col-lg-6 col-md-12 pt-2 pl-lg-5  pl-md-5 pl-sm-3 pl-2">
        <p>Need a Doctor for Check-up?</p>
        <h1>Just Make an Appointment
          and You’re Done!</h1>
        <p>Get Your Quote or Call:</p>
        <h2>(0080) 123-453-789</h2>
        <div class="time">
          <h2 class="my-4 text-primary" style="font-weight:bold;">Opening Hours</h2>
          <div class="row week-time">
            <div class="col">
              <p><i class="fa-regular fa-clock"></i>Monday - Thursday</p>
            </div>
            <div class="col">08:00 - 20:00</div>
          </div>
          <div class="row week-time">
            <div class="col">
              <p><i class="fa-regular fa-clock"></i>Monday - Thursday</p>
            </div>
            <div class="col">08:00 - 20:00</div>
          </div>
          <div class="row week-time">
            <div class="col">
              <p><i class="fa-regular fa-clock"></i>Monday - Thursday</p>
            </div>
            <div class="col">08:00 - 20:00</div>
          </div>
          <div class="row week-time">
            <div class="col">
              <p><i class="fa-regular fa-clock"></i>Monday - Thursday</p>
            </div>
            <div class="col">08:00 - 20:00</div>
          </div>
        </div>
      </div>


    </div>
  </div>




  <!-- our appointment section end here  -->


  <!-- doctor session   -->
  <!-- our doctor section start here -->
  <section>
    <div class="container-fluid my-5 center">
      <div class="row gy-5 gx-3 gx-md-5 justify-content-around">
        <div class="col-lg-3 col-md-5 col-sm-6 px-sm-4 col-12 shadow">
          <img src="./images/doctor2.jpg" class="img-fluid" alt="">
          <div class="text text-center mt-3">
            <h3 style="color:blue;">
              Maria Rose
            </h3>
            <p>Dental Surgeon</p>
          </div>
          <div class="doctor-social d-flex justify-content-around">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-6 px-sm-4 col-12 shadow">
          <img src="./images/doctor4.jpg" class="img-fluid" alt="">
          <div class="text text-center mt-3">
            <h3 style="color:blue;">
              Maria Rose
            </h3>
            <p>Dental Surgeon</p>
          </div>
          <div class="doctor-social d-flex justify-content-around">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-6 px-sm-4 col-12 shadow">
          <img src="./images/doctor3.jpg" class="img-fluid" alt="">
          <div class="text text-center mt-3">
            <h3 style="color:blue;">
              Maria Rose
            </h3>
            <p>Dental Surgeon</p>
          </div>
          <div class="doctor-social d-flex justify-content-around">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-sm-6 px-sm-4 col-12 shadow">
          <img src="./images/doctor3.jpg" class="img-fluid" alt="">
          <div class="text text-center mt-3">
            <h3 style="color:blue;">
              Maria Rose
            </h3>
            <p>Dental Surgeon</p>
          </div>
          <div class="doctor-social d-flex justify-content-around">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- our doctor section end here -->
  <section>
    <div class="container my-5">
      <div class="row mx-lg-5 mx-sm-1 mx-0">
        <div class="col-lg-6 col-sm-12  pt-5">
          <img src="./images/mainhospital.gif" class="img-fluid w-100" alt="">
        </div>
        <div class="col-lg-6 col-sm-12 ">
          <p>BEST OF THE BEST</p>
          <h1>
            High End Equipments.
          </h1>
          <p>Surgery of the respiratory tract is generally performed by specialists in cardiothoracic surgery (or
            thoracic surgery) though minor procedures may be performed by pulmonologists. Pulmonology is closely.</p>
          <div class="skills mt-5 ">
            <div class="skill d-flex justify-content-between">
              <h6>CARDIO-ONCOLOGY</h6>
              <h6>55%</h6>
            </div>
            <div class="progress my-2" style="height:0.4rem;">
              <div class="progress-bar" role="progressbar" style="width:20.6rem;"></div>
            </div>
          </div>
          <div class="skills my-4 ">
            <div class="skill d-flex justify-content-between">
              <h6>HEART ASSESSMENT</h6>
              <h6>72%</h6>
            </div>
            <div class="progress my-2" style="height:0.4rem;">
              <div class="progress-bar" role="progressbar" style="width:26.6rem;"></div>
            </div>
          </div>
          <div class="skills my-4 ">
            <div class="skill d-flex justify-content-between">
              <h6>Dental SURGERY</h6>
              <h6>88%</h6>
            </div>
            <div class="progress my-2" style="height:0.4rem;">
              <div class="progress-bar" role="progressbar" style="width:30.6rem;"></div>
            </div>
          </div>
          <div class="skills my-4 ">
            <div class="skill d-flex justify-content-between">
              <h6>SKIN CARE</h6>
              <h6>78%</h6>
            </div>
            <div class="progress my-2" style="height:0.4rem;">
              <div class="progress-bar" role="progressbar" style="width:28rem;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="service-section d-flex my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="common-heading w-auto m-auto text-center">
            <p>Vik Helthcare</p>
            <h1>Vik Helthcare - The Platform You Deserve</h1>
            <p>If you are planning on developing a product landing app or website, take
              a look at this beautiful-crafted</p>
          </div>
        </div>
      </div>
      <div class="row mt-5 ">
        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Doctor.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">QUALIFIED DOCTORS</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Medicine.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">TRUSTED TREATMENT</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 col-sm-6 service-box mt-md-3 mt-sm-3 mt-3">
          <div class="card-box shadow">
            <img src="images/Hospital.png" class="img-fluid" width="100px">
            <h5 class="my-3 fw-normal">24/7 SERVICES</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus
              perferendis dolore, ratione culpa molestias.</p>
          </div>
        </div>
      </div>
    </div>


  </section>


  <!-- here end body  -->



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