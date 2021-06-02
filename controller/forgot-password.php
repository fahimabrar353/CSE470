<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 $token = "592e7331b8cece5a899a0339097f74fe";
 $url = "http://api.greenweb.com.bd/api.php";
if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
    $otp=$_POST['otp'];
    
    
    $queryy=mysqli_query($con,"select ID from tblotp where  otp='$otp'");
    $rett=mysqli_fetch_array($queryy);
    if($rett>0){
      $query=mysqli_query($con,"select ID from tbluser where  Email='$email' or MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
    }
    else{
      $msg="Invalid OTP. Please try again.";
    }
    
  }
  
  if(isset($_POST['submitotp']))
  {
    
    $contactno=$_POST['otpcontactno'];
    

    $query=mysqli_query($con,"select otp from tblotp where MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
       $result=$ret['otp'];
       $msgg="Otp found. Your otp has been sent to your mobile";
       $message=  "Welcome from ETo-Let. Your OTP for password reset is : $result";
       $data= array(
        'to'=>"$contactno",
        'message'=>"$message",
        'token'=>"$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
    
    }
    else{
      $msgg="Invalid Details. Please try again.";
    }
    
  }
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
    <link href="assets/css/style.css?v48" rel="stylesheet">
   
    <title>ETo-Let || Forgot Password</title>
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
                                    <h1>Forgot Password</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="active">Forgot Password</li>
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

        <!-- #Add Property
============================================= -->
        <section id="add-property" class="add-property">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                       
                           
  
                          
                           

                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title">Forgot Password</h4>
                                        
                                        <form role="form" method="post" action="">
                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email (Optional)" >

                    </div>
                     <div class="form-group">
                        <input class="form-control form-control-lg" type="type" name="contactno" required="true" maxlength="11" pattern="[0-9]+" placeholder="Mobile Number">
                        
                    </div>
                     <div class="form-group">
                        <input class="form-control form-control-lg" type="type" name="otp" required="true" maxlength="10" placeholder="OTP">
                        
                    </div>
                    <div class="form-group pt-1"><button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Reset</button></div>
                </form>             </div>
                                    <!-- .col-md-12 end -->
               
                                   
                                   <!-- .col-md-13 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title" >GET OTP Below</h4>
                                        
                                        <form role="form" method="post" action="">
                    <p style="font-size:16px; color:red" align="center"> <?php if($msgg){
    echo $msgg;
  }  ?> </p>
                    
                     <div class="form-group">
                        <input class="form-control form-control-lg" type="type" name="otpcontactno" required="true" maxlength="11" pattern="[0-9]+" placeholder="Mobile Number">
                        
                    </div>
                    
                    <div class="form-group pt-1"><button type="submit" class="btn btn-primary btn-lg btn-block" name="submitotp">Send OTP</button></div>
                </form>             </div>
                                    <!-- .col-md-13 end -->
                                    

                                </div>
                                <!-- .row end -->
                            </div>
                  
                            
                       
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                         <a href="contact.php" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </header>
        
        

        <!-- Footer #1
============================================= -->
        <?php include_once('includes/footer.php');?>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>
 