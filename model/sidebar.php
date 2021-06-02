<div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="edit--profile-area">
  <ul class="edit--profile-links list-unstyled mb-0">
                            <?php if($_SESSION['ut']=='3'){?>
                          
                                <li><a style="color:red" href="user-profile.php" class="active">Edit Profile</a></li>
                                <li><a style="color:red" href="enquiry-status.php" class="active">Enquiry Status</a></li>
                                <li><a href="change-password.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                 <li><a href="account-varification.php" style="color: red;"><STRONG> Varify your Account</STRONG></a></li>
                                  <li><a href="payment.php" style="color: green;"><STRONG> Make Payment </STRONG></a></li>
                            <?php } else{?>
   <li><a href="user-profile.php" class="active">Edit Profile</a></li>
                                <li><a style="color:#00d8e8" href="change-password.php">Change Password</a></li>
                                <li><a style="color:#00d8e8" href="add-property.php">Add Eto-let</a></li>
                                <li><a style="color:#00d8e8" href="my-properties.php">My Eto-Lets</a></li>
                                <li><a style="color:#00d8e8" href="enquiry.php">Received Enquiry</a></li>
                                <li><a style="color:#00d8e8" href="ansenquiry.php">Answered Enquiries</a></li>
                                <li><a style="color:#00d8e8" href="logout.php">Logout</a></li>
                                <li><a href="account-varification.php" style="color: red;"><STRONG> Varify your Account</STRONG></a></li>

                            <?php } ?>
                            </ul>
                        </div>
                    </div>