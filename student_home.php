<?php
include 'header.php';
?>
    <?php
    session_start();
    $amt=200;
    include 'dataconnect.php';
    $regid=$_SESSION['regid'];
     $name=$_SESSION['name'];
     $email=$_SESSION['email'];
    $phno= $_SESSION['phno'];

   //$regid=$_GET['id'];
   $tidq=$conn->query("select t_id from registration where userid='$regid' ");

   if($tidq)
    {
       while($row=mysqli_fetch_assoc($tidq))
     {
           $t_id=$row['t_id'];
     }     
    }
    ?>
    <div class="bg1">
    <div class="row">
    
    <div class="col-md-7"></div>
    <div class="col-md-4 panel">
   
    <p class="text-center"><b>Welcome to Scholarship Portal</b></p>
    
    <!-- Text input-->
    <form class="px-md-2" name="regform" id="regform" action="pay.php" method="POST" onsubmit="return validateForm()" >
    <fieldset>
      
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2"></h3>
         
            <div class="form-4">
            <Button  class="btn btn-primary btn-lg input" style="background-color: #0b5697; font-weight: bold; width: 40%;color:black;"name="submit"> 
            <?php
            if($t_id=="")
            {
              
              include 'pay.php';
            }
            ?>
        </div>
           
            

              
              <div class="form-outline mb-4">
          <input type="text" id="form3Example1q" class="form-control"  name="regid" value="<?php echo $regid ?>" />
                          <label class="form-label" for="form3Example1q">User id</label>
              </div>
            
              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control"  name="amt" value="<?php echo $amt ?>"/>
                <label class="form-label" for="form3Example1q">Amount</label>
              </div>
              
              <!--<button type="submit" class="btn btn-primary" name="submit" style="background-color:005697;">Procced to pay</button>
-->
            </form>

          </div>
  
    </div>
  </div> 
</body>
</html>