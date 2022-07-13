<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Scholarship Registration </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
   <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
<style>

  body {
    color: #0b5697;
    font-family:montserrat;
  }
  </style>
<script type="text/javascript">  
    function validateForm() {
  let name = document.forms["regform"]["fname"].value;
  let lname = document.forms["regform"]["lname"].value;
  let phno = document.forms["regform"]["phno"].value;

  if((name == "")&&(lname == "") &&(phno == ""))
  {
      alert("Please fill the details");
      return false;
  }
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (typeof name === 'string' || name instanceof String)
  {

  }
// it's a string
else
// it's something else
{
  alert("Name can only contain letters");
    return false;
}
  if (lname == "") {
    alert("Name must be filled out");
    return false;
  }
  if (phno == "") {
    alert("Number must be filled out");
    return false;
  }

  if (phno.length!=10) {
      console.log(phno.length)
    alert("Invalid Phone number");
    return false;
  }
  if(isNaN(phno)){
	document.write(" Phone number only contains number <br/>");
 }

}
</script>
</head>

<body>
<?php
      session_start();
      ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Scholarship Registration</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" style="border-radius:0%" data-toggle="modal" data-target="#myModal">
<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1 text-center"><span style="color:black"><b>USER LOGIN</b></span></h4>
      </div>
      <div class="modal-body">
        
<!-- Password input-->
<form class="form-horizontal" action="login.php?q=" method="POST">
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="userid" name="userid" placeholder="Enter userid" class="form-control input-md" type="password" required>
    
  </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
        <input type="submit" class="btn btn-primary" value="Login">


      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  


<p class="text-center"><b>Register Now</b></p>

<!-- Text input-->
<form class="px-md-2" name="regform" id="regform" method="POST" onsubmit="return validateForm()" >
<fieldset>
<div class="form-outline mb-4">
  <input type="text" id="fname" class="form-control"  name="fname" required/>
  <label class="form-label" for="form3Example1q">First Name</label>
</div>
<div class="form-outline mb-4">
  <input type="text" id="lname" class="form-control"  name="lname"/>
  <label class="form-label" for="form3Example1q">Last Name</label>
</div>
<div class="form-outline mb-4">
  <input type="text" id="phno" class="form-control" name="phno" required/>
  <label class="form-label" for="form3Example1q">Phone Number</label>
</div>
<div class="form-outline mb-4">
  <input type="email" id="email" class="form-control" name="email" required/>
  <label class="form-label" for="form3Example1q">Email</label>
</div>
    <div class="form-outline mb-4">
                  <select class="form-control" name="int_course" required>
                  <option value="CA">CA</option>
                    <option value="ACCA">ACCA</option>
                    <option value="CMA(USA)">CMA(USA)</option>
                    <option value="CAT">CAT</option>
                    <option value="CMA(INDIA)">CMA(INDIA)</option>
                    <option value="CS">CS</option>
                    <option value="B.VOC+ACCA">B.VOC+ACCA</option>
                    <option value="CA INTERMEDIATE">CA INTERMEDIATE</option>
                    <option value="BCOM + CIMA">BCOM + CIMA</option>
                    <option value="MBA + CIMA">MBA + CIMA</option>
                    <option value="MBA+ACCA">MBA+ACCA</option>
                    <option value="BBA+ACCA">BBA+ACCA</option>
                    <option value="B.COM+ACCA">B.COM+ACCA</option>
                    <option value="M.COM+ACCA">M.COM+ACCA</option>
                  </select>
                  <label class="form-label" for="form3Example1q">Interested course</label>
               
              </div>
              <div class="form-outline mb-4">
                  <select class="form-control" name="qual" required>
                  <option value="plustwo">Plus Two</option>
                    <option value="degree">Degree</option>
                    <option value="pg">PG</option>
                    <option value="plusone">Plus one passed</option>
                   
                  </select>
                  <label class="form-label" for="form3Example1q">Qualification</label>
               
              </div>
              <div class="form-outline mb-4">
                  <select class="form-control" name="exam_center" required>
                    
                  
                    
                 
              <?php
              include 'dataconnect.php';
              $sql=$conn->query("select * from exam");
              if($sql->num_rows >0)
              {
              
      While($row=mysqli_fetch_assoc($sql))
      {
      
          $id=$row['exam_id'];
          $exam_center=$row['exam_center'];
          echo $id;
          echo $exam_center;
          echo '<option value='.$id.'>'.$exam_center.'</option>';
      }
    
    }
    ?>
  
    </select>
    <label class="form-label" for="form3Example1q">Exam Center</label>
 
</div>
<div class="form-4">
                <input type="submit" class="btn btn-primary btn-lg input" style="background-color: #0b5697; font-weight: bold; width: 40%;"value="REGISTER NOW!" name="submit">
            </div>
</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->


</body>
</html>
<?php 
if(isset($_POST['submit'])){
 
 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $int_course=$_POST['int_course'];
    $qual=$_POST['qual'];
    $exam_id=$_POST['exam_center'];
    
    $sql=$conn->query("select * from exam where exam_id='$exam_id'");
    if($sql->num_rows >0)
    {
    
    
While($row=mysqli_fetch_assoc($sql))
{

$id=$row['exam_id'];
$date_of_exam=$row['date_of_exam'];
$exam_center=$row['exam_center'];
$balance_no_seats=$row['balance_no_seats'];
$booked_seats=$row['booked_seats'];
$sdate=$row['start_date'];
$edate=$row['end_date'];
}
    }
    $count="select count(*)  as 'c' from registration";
        $result=$conn->query($count);
        if($result)
        {
        while($row=mysqli_fetch_assoc($result))
      {
            $s=$row['c'];
      }     
     }
    
        
        {
            $p=intval($s)+1;
        }
        
$regid="LAK_SCH00".$p;
    $curdate=date("Y-m-d");
    if($balance_no_seats>0)
    { 
      //(()&&
    if($curdate>=$sdate && $curdate <= $edate) 
    {
      
      $query="insert into registration(userid,fname,lname,phno,email,int_course,exam_id,qualification)values('$regid','$fname','$lname','$phno','$email','$int_course','$exam_id','$qual')";

      if($conn->query($query))
      {
       
        $_SESSION['regid']=$regid;
        $_SESSION['name']=$fname.' '.$lname;
        $_SESSION['email']=$email;
        $_SESSION['phno']=$phno;
      
     $name=$_SESSION['name'];   
     
     
   $conn->query("insert into login(userid,type)values('$regid','student')");
   //include 'pushing.php';
  //  echo '<script type="text/javascript">';
  //        echo ' swal("Welcome to LAKSHYA IIC","First step of registration is completed" , "ok");
  //        window.location.href = "student_home.php";</script>';
  echo '<script type="text/javascript">';
  echo 'swal({
    title: "IIC Lakshya",
    text: "First step of registration is completed",
    type: "success"
}).then(function() {
    window.location = "student_home.php";
});';
echo'</script>';
include 'mail_test.php';
      }
      

    }
    else{

      echo'<script>window.alert("Sorry application submission is overdue");
      window.location.href="index.php";</script>';
      $query="insert into registration(userid,fname,lname,phno,email,int_course,exam_id,qualification)values('$regid','$fname','$lname','$phno','$email','$int_course','$exam_id','$qual')";
      //include 'pushing.php';
    }

  }
  else{
    echo'<script>window.alert("Sorry the seats are already filled.");
    window.location.href="index.php";</script>';
   //include 'pushing.php';
   $query="insert into registration(userid,fname,lname,phno,email,int_course,exam_id,qualification)values('$regid','$fname','$lname','$phno','$email','$int_course','$exam_id','$qual')";
  }

  
    
   
}
