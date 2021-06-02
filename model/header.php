<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['signup']))
  {
    $token = "592e7331b8cece5a899a0339097f74fe";
    $url = "http://api.greenweb.com.bd/api.php";
      
    $fname=$_POST['fullname'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $usertype=$_POST['usertype'];
    $otp=$_POST['Otp'];

    $rand1= rand(120,620);
    $rand2= rand(3350,9955);
    $randt= "$rand1"."$rand2";
    $password=md5($randt);

    $message = "Welcome from ETo-Let. Your Registration is complete . Use this PIN to login: $randt";

    $ret=mysqli_query($con, "select MobileNumber from tbluser where MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
 echo "<script>alert('This Mobile Number is already associated with another account');</script>";
    }
    else{
    $rett=mysqli_query($con, "select MobileNumber from tblotp where MobileNumber='$mobno' AND otp='$otp'");
    $resultt=mysqli_fetch_array($rett);
    if($resultt>0){
        $query=mysqli_query($con, "insert into tbluser(FullName, Email, MobileNumber, Password,UserType) value('$fname', '$email','$mobno', '$password','$usertype' )");
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
    if ($query) {
 echo "<script>alert('You have successfully registered');</script>";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
 
    }
    else{
            echo "<script>alert('OTP not varified');</script>";


    }
}
}

//code for login
if(isset($_POST['signin']))
  {
     
    $mobnumber=$_POST['mobilenumber'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID,UserType,MobileNumber from tbluser where  MobileNumber='$mobnumber' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
$_SESSION['ut']=$ret['UserType'];
$_SESSION['remsuid']=$ret['ID'];
$_SESSION['uemail']=$ret['Email'];
   
     header('location:index.php');
    }
    else{
   echo "<script>alert('Invalid Details');</script>";
    }
  }


if(isset($_POST['otp']))
  {
    $token = "592e7331b8cece5a899a0339097f74fe";
    $url = "http://api.greenweb.com.bd/api.php";
   
    $rand11= rand(130,890);
    $rand22= rand(100,999);
    $otp= "$rand11"."$rand22";
    $message = "Welcome from ETo-Let. Your Registration OTP is: $otp";
      
    $mobno=$_POST['mobilenumber'];
    

    $ret=mysqli_query($con, "select MobileNumber from tbluser where MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
 echo "<script>alert('This Mobile Number is already associated with another account');</script>";
    }
    else{
    $rett=mysqli_query($con, "select MobileNumber from tblotp where MobileNumber='$mobno'");
    $resultt=mysqli_fetch_array($rett);
    if($resultt>0){

    echo "<script>alert('Duplicate number for OTP');</script>";
    }
    else{
        $query=mysqli_query($con, "insert into tblotp(MobileNumber, otp) value('$mobno', '$otp')");
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
    if ($query) {
 echo "<script>alert('OTP Sent');</script>";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
    
    }
}
}

?>
<script type="text/javascript">
timer();
                                    $('.otp_msg').html('<div class="alert alert-success">OTP sent successfully</div>').fadeIn();
                                        
                                        window.setTimeout(function(){
                                        $('.otp_msg').fadeOut();
                                    },1000)
                                </script>

<style type="text/css">
#resend_otp{
        display: none;
    }
.countdown{
        display: table;
        width: 100%;
        text-align: left;
        font-size: 15px;

    }
</style>
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top" >
                <div class="container-fluid" style="background-color: #121b22;">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only" >Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                 <a class="logo" href="index.php">
                    <img src="assets/images/about/uscopyright-gov-etolet.png" width="180" height="55" alt="logo" style="vertical-align:middle; padding-left: 50px; ">
                </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1"  style="background-color: #121b22;">
                        <ul class="nav navbar-nav nav-pos-center navbar-right ">
                            <!-- Home Menu -->
                            <li>
                                <a href="index.php" style="color: white;" >home</a>
                               
                            </li>
                            <!-- li end -->

                             <li><a href="about.php" style="color: white;">about</a></li>

                        
                            <li><a href="properties-grid.php" style="color: white;">eTo-Lets</a></li>

                            <li><a href="contact.php" style="color: white;">contact</a></li>
                              <!-- Profile Menu-->
                            <li class="has-dropdown">
                                <?php if (strlen($_SESSION['remsuid']!=0)) {?>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" style="color: white ;">My Account</a>
                                <ul class="dropdown-menu">
                                    <li><a href="user-profile.php">user profile</a></li>
                                    <li><a href="change-password.php">change password</a></li>
                                   <li><a href="logout.php">Logout</a></li>
                                </ul>
                                <?php } ?>
                            </li>
                               <?php if (strlen($_SESSION['remsuid']==0)) {?>
                               <!--
                            <li>
                                <a href="admin/login.php">admin</a>
                               
                            </li>
                            -->
                            <li>
                                <a href="tutorial.php" style="color: white;">[Guide]</a>
                               
                            </li>
                        <?php } ?>
                        </ul>
                        <!-- Module Signup  -->

                        <div class="module module-login pull-left">
                            <?php if (strlen($_SESSION['remsuid']==0)) {?>  
                            <a class="btn-popup" data-toggle="modal" data-target="#signupModule" style="color: #64ddbb;font-size: 25px;">Login</a>
                            <?php } ?>
                            <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active" style="font-size:18px;"><a href="#login" data-toggle="tab">login</a>
                                                    
                                                    </li>
                                                    <li><a href="#signup" data-toggle="tab">signup</a></li>
                                                      <li><a href="#otpsign" data-toggle="tab">Get OTP</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="login">
                                                        <div class="signup-form-container text-center">
                                                            <form class="mb-0" method="post" name="signin">
                                                                
                                                                <div class="or-text">
                                                                <span style="color: blue">eTo-Let</span>
                                                            </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" maxlength="11" required="true" placeholder="Mobile Number">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" name="password" id="password" required="true" placeholder="PIN">
                                                                </div>
                                                               
                                                                <input type="submit" name="signin" class="btn btn--primary btn--block" value="Sign In">
                                                                <a href="forgot-password.php" class="forget-password">Forgot your PIN?</a>
                                                            </form>
                                                            <!-- form  end -->
                                                        </div>
                                                        <!-- .signup-form end -->
                                                    </div>
                                                    
                                                     <div class="tab-pane" id="otpsign">
                                                        
                                                        <form class="mb-0" method="post" name="otp">
                                                            <h6>If you have not taken an OTP yet use this section</h6>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" required="true" placeholder="Mobile Number to send OTP">
                                                            </div>
                                                            <input type="submit" class="btn btn--primary btn--block" name="otp" value="Send OTP" style="color: tomato;">
                                                            <div class="countdown"></div>
                                                           <a href="#" id="resend_otp" type="button">Resend</a>
                                                           <div class="otp_msg"></div>
                                                           <script type="text/javascript">

                                                            //start of timer function

            function timer(){

                    var timer2 = "00:31";
                    var interval = setInterval(function() {


                      var timer = timer2.split(':');
                      //by parsing integer, I avoid all extra string processing
                      var minutes = parseInt(timer[0], 10);
                      var seconds = parseInt(timer[1], 10);
                      --seconds;
                      minutes = (seconds < 0) ? --minutes : minutes;
                      
                      seconds = (seconds < 0) ? 59 : seconds;
                      seconds = (seconds < 10) ? '0' + seconds : seconds;
                      //minutes = (minutes < 10) ?  minutes : minutes;
                      $('.countdown').html("Resend otp in:  <b class='text-primary'>"+ minutes + ':' + seconds + " seconds </b>");
                      //if (minutes < 0) clearInterval(interval);
                      if ((seconds <= 0) && (minutes <= 0)){
                        clearInterval(interval);
                        $('.countdown').html('');
                        $('#resend_otp').css("display","block");
                      } 
                      timer2 = minutes + ':' + seconds;
                    }, 1000);

                }

                //end of timer
            </script>



                                                        </form>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="signup">
                                                        <form class="mb-0" method="post" name="signup">
                                                            
                                                            <div class="or-text">
                                                                <span style="color: blue">ETo-Let</span>
                                                            </div>
                                                            <h6>Step1: Get OTP for registration</h6>
                                                            <h6>Step2: Fill up this form</h6>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                                                            </div>
                                                            <!-- .form-group end -->
                                                           <div class="form-group">
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address (Optional)">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" maxlength="11" required="true" placeholder="Mobile Number (11 digit)">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="Otp" id="Otp" required="true" placeholder="OTP for dual varification"> <a href="#otpsign" data-toggle="tab">Get OTP</a>
                                                            </div>
                                                             <div class="form-group">
                                                               <!--
                                                                <input type="radio" name="usertype" value="1" checked="true"> Broker &nbsp; &nbsp;
                                                                -->
                                                                <input type="radio" name="usertype" value="2" checked="true"> Owner &nbsp; &nbsp; 
                                                                <input type="radio" name="usertype" value="3"> User
                                                            </div>
                                                            <!-- .form-group end -->
                                                            
                                                            <input type="submit" class="btn btn--primary btn--block" name="signup" value="Register">
                                                            <br> &nbsp; &nbsp; 
                                                            
                                                           
                                                        </form>
                                                        <!-- form  end -->
                                                      
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                        <?php if (strlen($_SESSION['ut']!=3)) {?>
                        <div class="module module-property pull-left">
                            <a href="add-property.php" target="_blank" class="btn"><i class="fa fa-plus"></i> Post eto-let</a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <script src="js/otp.js"></script>

        </header>