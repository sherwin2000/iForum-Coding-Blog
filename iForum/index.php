  <?php include("header.php");?>
  <!DOCTYPE html>
<html lang="en">

<head>

    <title>Disease_Prediction_Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Make the image fully responsive */
        
        * {
            margin: 0;
            padding: 0;
            font-family: Josefin sans-serif;
        }
        
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        
        footer a {
            color: rgb(255, 255, 255);
        }
        
        footer a:hover {
            color: rgb(114, 21, 21);
        }
    </style>

</head>

<body>
    <header>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/all/1.jpg" alt="Doctor2" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="./images/all/2.jpg" alt="Doctor2" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="./images/all/12.jpeg" alt="Docter3" width="1100" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </header>

    <section>
        <div class="container">
            <h1 class="text-center text-capitalize pt-5">About Project</h1>
            <hr class="w-25 mx-auto pt-5">
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/all/10.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h1>
                        Details
                    </h1>
                    <hr>
                    <p>
                        In This Project we need to take the symptoms from patient then after that we predict the disease according to the symptoms and then show the output.If the disease is acute we display home made remidies else if the disease is cronic we tell the patient
                        to book appointment to the respective doctor of that speciality then after that docotor needs to login and checkwhether there is any appointment booked if booked then he needs to approve the appointment and then get connect with
                        the respective doctor and assist them.carousel-inner after that there will be feedback system in which patient can write the feedback with respect to the UI/UX design or Doctor issue or any other services soo we can assist them
                        accordingly.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <a class="btn btn-outline-danger" href="joindoctor.php">Join Us Doctor</a>
    <footer>
        <div class="badge-dark text-white py-3">
            <div class="container py-3 pb-2">
                <div class="row">
                    <div class="col-lg-3">
                        <h4>
                            About us
                        </h4>
                        <p>In This Project we need to take the symptoms from patient then after that we predict the disease according to the symptoms and then show the output.If the disease is acute we display home made remidies else if the disease is cronic
                        </p>

                    </div>
                    <div class="col-lg-3 pb-2">
                        <h4>
                            Useful Links
                        </h4>
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-3 pb-2">
                        <h4>Contact us</h4>
                        <p>
                            <address>Block No 202 Janaki Nagar Jule Solapur :413004</address>
                            <strong>Phone:</strong>7448186987</br>
                            <strong>Email:</strong><a href="swapnilharwalkar1512@.com">test@test.com</a>
                        </p>
                    </div>
                    <div class="col-lg-3 pb-2">
                        <h4>Newspaper</h4>
                        <p>Prevention is Better than cure </p>
                        <p>
                            Stay Healthy
                        </p>
                        <form action="">
                            <div class="input-group text-white-50">
                                <input type="email" name="" id="" class="">
                                <div class="input-group-append text-white">
                                    <button class="btn btn-secondary border-danger btn-danger">
                                    Subscribe
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid text-center bg-secondary py-2">
            &copy:2020.All rights reserved.
        </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>