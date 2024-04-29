<?php 
include '../db.php';
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email=$_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $slot = $_POST['slot'];
    $msg= $_POST['message'];
    // Checking if any field is empty 
    if (empty($name) || empty($phone)|| empty($email)||empty($email)||empty($service)|| empty($date)|| empty($slot)) { 
        echo "<script>alert('please enter all fields')</script>"; 
    }
    else{
        $sql = "SELECT * FROM `appointment` WHERE `date`='$date' AND `slot`='$slot' AND `service`='$service'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Appointment already booked for this date and time. Please choose another slot')</script>";  
         } else {
            $sql1="INSERT INTO `appointment` ( `name`, `phone`, `email`, `service`, `date`, `slot`, `message`) VALUES ( '$name', '$phone', '$email', '$service', '$date', '$slot', '$msg')";
            $res = mysqli_query($conn, $sql1);
            if($res) {
               
                echo "<script>alert('your appointment is booked')</script>"; 
                header("Location:/makeup/user/index.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }



}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORDS">
    <meta name="author" content="AUTHOR NAME">
    <!-- TITLE -->
    <title>Appointment</title>
    <!-- FAVICON -->
    <link href="img/favicon.ico" rel="icon">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- OWL CAROUSEL -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <!-- LIGHTBOX -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- VEGAS CSS -->
    <link rel="stylesheet" href="css/vegas.min.css">
    <!--Style CSS file-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- ====== Preloader ======  -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- ======End Preloader ======  -->

    <!-- ======START NAVIGATION ======  -->
    <nav class="navbar">
        <div class="nav-icon">
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
        </div>
        <div class="navbg">&nbsp;</div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php" data-scroll-nav="0">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-scroll-nav="1">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio" data-scroll-nav="2">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#package" data-scroll-nav="3">Package</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#blog" data-scroll-nav="4">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact" data-scroll-nav="5">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- ====== END NAVIGATION ======  -->

    <!-- =======START HEADER=========== -->
    <header class="home" id="home" data-scroll-index="0">
        <div class="logo-box">
            <img src="img/logo.png" alt="header-Logo" class="logo">
        </div>
        <!-- START HEADER SECTION CONTENT -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 home-content mt-md-5 mt-sm-5 text-center">
                    <h2>Palak Arora</h2>
                    <h1 class="heading-tertiary mb-3">
                        Professional Makeup Artist
                    </h1>
                    <!-- <div class="button-bg">
                        <button class="button button-fill">
                            Learn More
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="arrow bounce">
            <a class="fa fa-long-arrow-down fa-2x" href="#about"></a>
        </div>
        <!-- END HEADER SECTION CONTENT -->
    </header>
    <!-- ====== END HEADER ======  -->

    <!-- ======= CONTACT FORM ======= -->
    <section class="contact padding" id="contact" data-scroll-index="5">
        <div class="container">

            <!-- START INFO-->
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-10 mx-auto">
                    <h2 class="heading-primary mb-5"><span> We Always welcome you <span>Book your Appointment</span></h2>
                    <p class="mb-5">"Experience luxury makeup services tailored to your unique style. Book your appointment with our skilled makeup artist and transform your look today."</p>
                    <div class="contact-info">
                        <i class="fa fa-map fa-fw"></i>
                        <div class="contact-info_text">
                            <h5>Address:</h5>
                            <p>modal Town block D </p>
                        </div>
                    </div>

                    <div class="contact-info">
                        <i class="fa fa-phone fa-fw"></i>
                        <div class="contact-info_text">
                            <h5>Mobile:</h5>
                            <p>+91-9988945356, +91-161-4500862</p>
                        </div>
                    </div>

                    <div class="contact-info">
                        <i class="fa fa-envelope fa-fw"></i>
                        <div class="contact-info_text">
                            <h5>Email:</h5>
                            <p>Gaurishanker97790@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-info">
                        <i class="fa fa-refresh fa-fw"></i>
                        <div class="contact-info_text">
                            <h5>Timing:</h5>
                            <p>Mon-Sun - 10:00 AM to 7:00 PM</p>
                        </div>
                    </div>
                </div>
                <!-- END INFO -->

                <!-- START CONTACT FORM -->
                <div class="contact-form col-lg-6 col-md-12 col-sm-10 mx-auto">
                    <form class="form" id="contact-form" method="POST" action="Appointment.php">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder=" Name *"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" type="number" name="phone" placeholder="phone *"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" type="email" name="email" placeholder="email *"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    
                                       <select class="form-select" name="service" aria-label="Default select example">
                                         <option selected>Select Service</option>
                                         <option disabled >Skin</option>
                                        <option value="Express Facials and Cleanup">Express Facials and Cleanup</option>
                                        <option value="Manicure">Manicure</option>
                                        <option value="Pedicure">Pedicure</option>
                                        <option value="Threading">Threading</option>
                                        <option value="Chemical Peels">Chemical Peels</option>
                                        <option value="Skin Care & Anatomy">Skin Care & Anatomy</option>
                                        <option value="Body Polishing">Body Polishing</option>
                                        <option disabled >Hair</option>
                                        <option value="Shampoo & Conditioning">Shampoo & Conditioning</option>
                                        <option value="Hair Anatomy">Hair Anatomy</option>
                                        <option value="Hair cutting & Blowdryer">Hair cutting & Blowdryer</option>
                                        <option value="Head massage">Head massage</option>
                                        <option value="Hair colouring">Hair Colouring</option>
                                        <option value="Hair Smoothing">Hair Smoothning</option>
                                        <option value="Hair Rebonding">Hair Rebonding</option>
                                        <option value="Hair karetin">Hair keratin</option>
                                        <option disabled>Nails</option>
                                        <option value="Nail Anatomy">Nail Anatomy</option>
                                        <option value="Nail Extension-Acrylic &Gel">Nail Extension-Acrylic &Gel</option>
                                        <option value="Nail Art- 2D,3D,4D">Nail Art- 2D,3D,4D</option>
                                        <option value="Refills">Refills</option>
                                        <option value="Drilling">Drilling</option>
                                        <option value="overlays">Overlays</option>

                                        
                                        </select>
                                    
                                </div> <br><br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" type="date" name="date" placeholder="date *"
                                            required="required">
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    
                                    <select class="form-select" name="slot" aria-label="Default select example">
                                      <option selected>Select Slot</option>
                                      <option value="9:00 AM">9:00 AM</option>
                                     <option value="10:00 AM">10:00 AM</option>
                                     <option value="11:00 AM">11:00 AM</option>
                                     <option value="12:00 PM">12:00 PM</option>
                                     <option value="1:00 PM">1:00 PM</option>
                                     <option value="2:00 PM">2:00 PM</option>
                                     <option value="3:00 PM">3:00 PM</option>
                                     <option value="4:00 PM">4:00 PM</option>
                                     <option value="5:00 PM">5:00 PM</option>
                                     <option value="6:00 PM">6:00 PM</option>
                                     </select>
                                 
                             </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Additional Message" rows="4"
                                            ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="button">Book Appointment</button>
                                </div>

                                

                            </div>
                        </div>
                    </form>
                </div>
                <!-- END CONTACT FORM -->

            </div>
        </div>
    </section>
    <!-- ====== END CONTACT FORM ====== -->

    <!-- Scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- scrollIt js -->
    <script src="js/scrollIt.min.js"></script>
    <!-- filter js -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- waypoints js -->
    <script src="js/waypoints.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- validator js -->
    <script src="js/validator.js"></script>
    <!-- paroller js -->
    <script src="js/jquery.paroller.min.js"></script>
    <script>$('.jumbotron').paroller();</script>
    <!-- maps js -->
    <script src="js/gmaps.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
    <script src="js/map.js"></script>
    <!-- vegas js -->
    <script src="js/vegas.min.js"></script>
    <!-- custom js -->
    <script src="js/main.js"></script>
    <!-- lightbox js -->
    <script src="js/lightbox.js"></script>
</body>
</html>
