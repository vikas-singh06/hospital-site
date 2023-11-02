<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h1>Gallery</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="links ml-auto ml-sm-0 ml-md-0 w-auto">
                <a href="./index.php">Home</a><i class="fa-solid fa-arrow-left-long fa-flip-horizontal"></i><a
                    href="./gallery.php">Gallery</a>
            </div>
        </div>
    </div>
    

    <section class="gallery-section my-5">
        <div class="container-fluid">
            <div class="row px-5 mt-5">

                
                    <h1>Our Hospital Gallery</h1>
           
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal9.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-sm-6 col-12 py-2">
                    <img src="./images/galleryimg/gal6.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section >
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="./images/galleryimg/gal1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./images/galleryimg/gal3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/galleryimg/gal2.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="./images/galleryimg/gal2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./images/galleryimg/gal1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/galleryimg/gal3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include('./footer-4.html') ?>
    <script>

    </script>



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