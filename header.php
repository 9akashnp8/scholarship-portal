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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<div class="header" >
<div class="row">
<div class="col-lg-6">
<span class="logo" >Scholarship Registration</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="admin_logout.php" class="pull-right btn sub1" style="border-radius:0%" >
<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Logout</b></span></a></div>

<!--sign in modal start-->

</div><!--header row closed-->
</div>
              
                    
                 