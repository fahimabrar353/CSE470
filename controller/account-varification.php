<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsuid']==0)) {
  header('location:logout.php');
  }
  else{

if(isset($_POST['submit']))
  {
$uid=$_SESSION['remsuid'];

$uservarification=1;

$protitle=$_POST['propertytitle'];
$prodec=$_POST['propertydescription'];


$proid=mt_rand(100000000, 999999999);
//NID Image
$pic=$_FILES["nidimage1"]["name"];
$extension = substr($pic,strlen($pic)-4,strlen($pic));
//NID Image 1
$pic1=$_FILES["nidimage2"]["name"];
$extension1 = substr($pic1,strlen($pic1)-4,strlen($pic1));


// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension1,$allowed_extensions))
{
echo "<script>alert('Property gallery image1 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}


else
{
//rename property images
$propic=md5($pic).time().$extension;
$propic1=md5($pic1).time().$extension1;

     move_uploaded_file($_FILES["nidimage1"]["tmp_name"],"creds/".$propic);
     move_uploaded_file($_FILES["nidimage2"]["tmp_name"],"creds/".$propic1);
     

    $query=mysqli_query($con,"insert into tblnid(uid,idpic1,idpic2,uservarified)value('$uid','$propic','$propic1','$uservarification')");
   if ($query) {
    echo '<script>alert("ID detail has been added.")</script>';
echo "<script>window.location.href ='user-profile.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
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
    <link href="assets/css/style.css?tolet=v56" rel="stylesheet">
   
    <title>ETo-Let || Varification</title>
</head>
<script>
function getsate(val) {
  $.ajax({
type:"POST",
url:"get-sate.php",
data:'$countryid='+val,
success:function(data){
$("#state").html(data);
}

  });
}
</script>

<script>
function getcity(val1) {
  $.ajax({
type:"POST",
url:"get-sate.php",
data:'$stateid='+val1,
success:function(data){
$("#city").html(data);
}

  });
}
</script>


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
                                    <h1>Account Varification</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Varification</li>
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
           
        </section>
        <!-- #page-title end -->

        <!-- #Add Property
============================================= -->

        <section id="add-property" class="add-property">
            
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <form class="mb-0" method="post"  enctype="multipart/form-data">
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title">NID Varification Consent Area</h4>
                                    </div>
                                    <p> The varification description goes here </p>
                          
                         
                              
                                    
                                </div>
                                <!-- .row end -->
                            </div>
                            
                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title">Upload Picture Area</h4>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Front Side Image</label>
                                            <input type="file" class="form-control" name="nidimage1" required>
                                        </div>
                                    </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Backside Image</label>
                                            <input type="file" class="form-control" name="nidimage2" required>
                                        </div>
                                    </div>
                                      
                                     
                                    
                                  

                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .form-box end -->

                                 <?php  
                                  $uid=$_SESSION['remsuid'];
                                    $query=mysqli_query($con,"select * from tblnid where uid='$uid'");
                                    $num=mysqli_num_rows($query);
                                    if($num>0){
                                        $msg="Already Submitted";
                                        echo $msg;

                                    }
                                    else{
                                   


                                 ?>
                            <!-- .form-box end -->
                            <input type="submit" value="Submit" name="submit" class="btn btn--primary">

                            <?php } ?>
                        </form>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
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
 <?php } ?>