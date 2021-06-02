<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?" rel="stylesheet">
    
     <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>ETo-Let || Payment</title>

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
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Payment Options</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Payment</li>
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
        <div class="col-md-4">
            <div class="payment-card">
                <img src="assets/images/payment/bkash.png" alt="Bkash" style="width:100px;height:48px;">
                <h2>
                    017129*****
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        
                     <a class="text-danger" href="bkash_payment.php"><i class="fa fa-credit-card"></i> Make payment with Bkash</a></p>
                       
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
                <img src="assets/images/payment/rocket.png" alt="Rocket" style="width:100px;height:48px;">
                <h2>
                    Coming Soon...
                </h2>
                <div class="row">
                   <div class="col-sm-6">
                        
                      <a class="text-danger" href=" "><i class="fa fa-credit-card"></i> Make payment with Rocket</a></p>
                       
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="payment-card">
                <img src="assets/images/payment/nogod.png" alt="Nagad" style="width:100px;height:48px;">
                <h2>
                    Coming Soon...
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        
                      <a class="text-danger" href=" "><i class="fa fa-credit-card"></i> Make payment with Nagad</a></p>
                       
                    </div>
                    
                </div>
            </div>

        </div>
    

    </div>
           </div>
        </section>
        <!-- #about end -->


      

        

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
  

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>