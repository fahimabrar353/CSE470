<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['sendinfo']))
  {
    $uid=$_SESSION['remsuid'];
    $token = "592e7331b8cece5a899a0339097f74fe";
    $url = "http://api.greenweb.com.bd/api.php";
      

    $type='baskh';  
    $paymentNumber=$_POST['bkashNumber'];
    $fname=$_POST['name'];
    $trnxID=$_POST['trnx'];
    $timestamp = date('Y-m-d H:i:s');
    $propertyID=$_POST['propertyId'];
    $message = "Welcome from ETo-Let. Your payment request has been received we will soon confirm the payment";

    $ret=mysqli_query($con, "select trnxID from tblpayment where trnxID='$trnxID'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
 echo "<script>alert('ERROR: This Transaction is already done');</script>";
    }
    else{
    
        $query=mysqli_query($con, "insert into tblpayment(uid,type, paymentNumber, trnxID, PropertyID,paymentDate,adminConfirm,ownerPayment) value('$uid','$type', '$paymentNumber','$trnxID', '$propertyID','$timestamp',0,0)");
        
    if ($query) {
 echo "<script>alert('You have successfully registered');</script>";

 $data= array(
        'to'=>"$mobno",
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
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
 
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
    <title>ETo-Let || Bkash Payment</title>



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
                                    <li><a href="payment.php">Payment</a></li>
                                    <li class="active">bKash Payment</li>
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
                        <small>
                            # <strong>Make payment  & fill the payment confirmation form</strong> 
                        </small>
                   
               
            </div>
        </div>
    <div class="row">

        <div class="col-lg-12">

            <div class="ibox">
                <div class="ibox-title">
                    Payment confirmation
                </div>
                <div class="ibox-content">

                    <div class="panel-group payments-method" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-credit-card text-success"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color: red;"><strong>Bkash details & procedure</strong></a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-10">
                                            <h2>Summary</h2>
                                            <strong>Service:</strong>: ETo-Let Payment <br>
                                            <strong>Price:</strong>: <span class="text-navy"> <a href=""> Calculate </a></span>

                                            <p class="m-t">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <strong>1. Open Bkash App Or Dial *247#</strong> <br>
                                            <strong>2. Select Send Money/Scan QR: </strong> <br>
                                            <strong>3. Send Exact BDT to 01615-******</strong> <br>
                                            <strong>4. Reference (Mandetory): **Your Property ID**</strong> <br>
                                            <strong>5. Check APP Inbox (If send From APP) / Bkash SMS for TRXID</strong> <br>
                                            <strong>6. Enter the TRXID Below in the form</strong> <br>
                                            
                                        </div>
                                    </div>
                                     </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-credit-card text-success"></i>
                                    
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color: red;"><strong>Bkash Payment confirmation</strong></a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-box">
                                    <div class="row">
                                         
                                        <div class="col-md-4">
                                            
                                            <strong>Service:</strong>: ETo-Let payment <br>
                                            <strong>Price:</strong>: <span class="text-navy"> <a href="">calculate</a> </span>

                                            <p class="m-t">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.

                                            </p>
                                            <p>
                                                Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat.
                                            </p>
                                        </div>
                                        <div class="col-md-8">

                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label style=" color=gray;">bKash NUMBER</label><p style="color:red;"> Please Avoid Using +88 or any country code before the number</p> 
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="bkasNnumber" name="bkashNumber" placeholder="Valid Bkash Number (Do not use +88❌),(Ex:017xxxxxxx✅)" required="" minlength="11" maxlength="11">
                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 col-md-7">
                                                        <div class="form-group">
                                                            <label>TrxID/TxnID (Case Sensitive)</label>
                                                            <input type="text" class="form-control" id="trnx" name="trnx" placeholder="TrxID/TxnID" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                        <div class="form-group">
                                                            <label>Property ID </label>
                                                            <input type="text" class="form-control" id="propertyId" name="propertyId" placeholder="Property ID" required="" minlength="9" maxlength="9">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button type="submit" name="sendinfo" class="btn btn-primary"  >Complete payment!</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- Footer #1 -->

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