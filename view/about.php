<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
  <link href="assets/team/icofont.min.css" rel="stylesheet">
  <link href="assets/team/aos.css" rel="stylesheet">
  <link href="assets/team/teamstyle.css" rel="stylesheet">


    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?tolet=v56" rel="stylesheet">
     <link rel="shortcut icon" href="/assets/images/favicon/favicon.png">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>ETo-Let || About Us</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <?php include_once('includes/header.php');?>

        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/3.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>About</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">About</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- about #1
============================================= -->
        <section id="about" class="about bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="about--img"><img class="img-responsive" src="assets/images/about/tolet_v1.jpg" width="350" height="350" alt="about img"></div>
                    </div>
                    <!-- .col-md-5 -->
                    <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                        <?php

                    
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <div class="heading heading-3">
                            <h2 class="heading--title"><?php echo $row['PageTitle'];?></h2>
                        </div>
                        <!-- .heading-title end -->
                        <div class="about--panel">
                            
                            <p><?php  echo $row['PageDescription'];?></p>
                        </div>
                        <!-- .about-panel end -->
                       
                        <!-- .about-panel end -->
                    </div>
                   <?php } ?>
                </div>
                
            </div>
            <!-- .container -->
        </section>
        <!-- #about end -->

            <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our</h2>
          <h3>ETo-Let <span>Team</span></h3>
          <p>The people who are with you 24/7.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/img/ceo.jpg" class="img-fluid" alt="" style="width:280px;height:300px;">
                <div class="social">
                  <a href="mailto: hares@etolet.net"><i class="icofont-envelope"></i></a>
                  
                </div>
              </div>
              <div class="member-info">
                <h4>Mohammad Hares</h4>
                <span> Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/img/cfo2.jpg" class="img-fluid" alt="" style="width:280px;height:300px;">
                <div class="social">
                  <a href="mailto: rayhan@etolet.net"><i class="icofont-envelope"></i></a>
                 
                </div>
              </div>
              <div class="member-info">
                <h4>S. M. Rayhan Mujahid</h4>
                <span>Chief Finance Officer  </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/img/cto.JPG" class="img-fluid" alt="" style="width:280px;height:300px;">
                <div class="social">
                  <a href="mailto: farhan@etolet.net"><i class="icofont-envelope"></i></a>
                 
                </div>
              </div>
              <div class="member-info">
                <h4>Farhan Khan</h4>
                <span>Technical Officer</span>
              </div>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/img/sm.jpeg" class="img-fluid" alt="" style="width:280px;height:300px;">
                <div class="social">
                  <a href="mailto: ayman@etolet.net"><i class="icofont-envelope"></i></a>
                 
                </div>
              </div>
              <div class="member-info">
                <h4>Md. Nazimul Haque </h4>
                <span>Sales Manager</span>
              </div>
            </div>
          </div>
          
           <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/img/dcc2.jpg" class="img-fluid" alt="" style="width:280px;height:300px;">
                <div class="social">
                  <a href="mailto: faria@etolet.net"><i class="icofont-envelope"></i></a>
                
                </div>
              </div>
              <div class="member-info">
                <h4>Faria Rahaman</h4>
                <span>Digital Content Creator</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
      

        

      <!-- cta #2
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>See tutorial on how to use this website</h3>
                         <a href="tutorial.php" class="btn btn--primary">Visit</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta2 end -->
        <!-- Footer #1

        <?php include_once('includes/footer.php');?>
       
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
        <!-- Vendor JS Files -->
  <script src="assets/team/jquery.min.js"></script>
  <script src="assets/team/jquery.waypoints.min.js"></script>
  <script src="assets/team/counterup.min.js"></script>
  <script src="assets/team/owl.carousel.min.js"></script>
  <script src="assets/team/isotope.pkgd.min.js"></script>
  <script src="assets/team/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/team/main.js"></script>
</body>

</html>