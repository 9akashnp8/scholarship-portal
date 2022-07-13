<?php
include 'dataconnect.php';
$userid=$_POST['userid'];

   
   ini_set('display_errors',1);
   error_reporting(E_ALL & ~E_STRICT);
   session_start();
    
     $_SESSION['userid']=$userid;
    
     $res=$conn->query("select * from login where userid='$userid' ");
     	if($res->num_rows >0)  
     {
		 $sql=$conn->query("select * from login where userid='$userid'");
		 if($sql->num_rows >0)
		 {
			 While($row=mysqli_fetch_assoc($sql))
			 {
				 $type=$row['type'];
				}
		}
        echo $type;
		 if($type=="Admin")
		{
            header("Location: admin_home.php");  		 
		}
		 else if($type=="student")
		  {			
            header("Location: student_home.php");  	
          }
		 else
		 {
			 echo'<script>alert("invalid userid")</script>';	
		
	     }
	 }
	else
		 {
			echo'<script>window.alert("please enter correct userid !!");
			             window.location.href="index.php";</script>'; 
		 }	
	   $conn->close();
	   ?>
	
    </body>
    </html>