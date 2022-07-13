<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lakshya</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/logo1.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="libs/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet  <link href="css/agent_home.css" rel="stylesheet"> -->
        <link href="css/style.css" rel="stylesheet">
        

      </head>
      <?php
      session_start();
      include 'dataconnect.php';
      ?>
      <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+91 09061277777"><i class="fa fa-phone-alt" ></i>+91 09061277777</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@lakshyaca.com"><i class="fa fa-envelope"></i>info@lakshyaca.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                      <a href="https://www.google.com/maps/place/Adv+Easwara+Iyer+Rd,+Pullepady,+Ernakulam,+Kerala+682035/@9.9805503,76.2839523,17z/data=!3m1!4b1!4m5!3m4!1s0x3b080d4ef3d34c8f:0xbdc51073c7563cb1!8m2!3d9.9805503!4d76.286141"><i class="fa fa-map-marker"></i>Adv Easwara Iyer Rd, Pullepady, Kochi, Kerala</a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <!--<a href="#" class="navbar-brand">MENU</a>-->
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                    <a href="admin_home.php" class="nav-item nav-link ">Schedule Exam</a>
                                        <a href="exam_sch.php" class="nav-item nav-link ">Exams Scheduled</a>
    
                                        <a href="admin_logout.php" class="nav-item nav-link">Logout</a>
    
                                        
                               
                                        <!--<a href="" download="proposed_file_name">Download</a>
                                        <a href="https://htmlcodex.com/bootstrap-agency-template" class="btn"><i class="fa fa-download"></i>Download Now</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->

<body class="large-screen">
<div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Form</h3>

            <form class="px-md-2" name="regform" id="regform" action="" method="POST" onsubmit="return validateForm()" >

              
             
              <div class="form-outline mb-4">
                  <select class="form-control" name="exm_center">
                  <option value="Trivandrum">Trivandrum</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kochi">Kochi</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kozhikode">Kozhikode</option>
                    <option value="Malappuram">Malappuram</option>
                  </select>
                  <label class="form-label" for="form3Example1q"> Select Exam Center</label>
               
              </div>
              <div class="form-outline mb-4">
                <input type="date" id="form3Example1q" class="form-control"  name="sdate"/>
                <label class="form-label" for="form3Example1q">Application Starting Date</label>
              </div>
              <div class="form-outline mb-4">
                <input type="date" id="form3Example1q" class="form-control"  name="edate"/>
                <label class="form-label" for="form3Example1q">Application Ending Date</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control"  name="nseats"/>
                <label class="form-label" for="form3Example1q">Number of seats available </label>
              </div>
              <div class="form-outline mb-4">
                <input type="date" id="form3Example1q" class="form-control"  name="exmdate"/>
                <label class="form-label" for="form3Example1q">Exam Date</label>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" style="background-color:005697;">Submit</button>

            </form>

          </div>
      
  
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $exm_center=$_POST['exm_center'];
  $sdate=$_POST['sdate'];
  $edate=$_POST['edate'];
  $nseats=$_POST['nseats'];
  $exmdate=$_POST['exmdate'];
  $query="insert into exam(exam_center,start_date,end_date,date_of_exam,total_no_seats,balance_no_seats)values( '$exm_center', '$sdate','$edate','$exmdate' ,'$nseats','$nseats')";
  if($conn->query($query))
  {
   echo'<script>window.alert("Exam scheduled successfully");
   window.location.href="admin_home.php";</script>';
  }

}