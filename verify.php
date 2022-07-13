<?php

require('config.php');
session_start();
$regid=$_SESSION['regid'];
//db connection
include 'dataconnect.php';

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $sql = "INSERT INTO transaction(payment_id,order_id) VALUES ('$razorpay_payment_id','$razorpay_order_id')";
    if($conn->query($sql)){

        $tidq=$conn->query("select t_id from transaction where payment_id='$razorpay_payment_id' ");

        if($tidq)
         {
            while($row=mysqli_fetch_assoc($tidq))
          {
                $t_id=$row['t_id'];
          }     
         }
     
     $query=$conn->query("update registration set t_id='$t_id' where userid='$regid'");
    }
    
    // $html = "<p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

    $sql=$conn->query("select * from registration where userid='$regid'");
            if($sql->num_rows >0)
            {
            
            While($row=mysqli_fetch_assoc($sql))
            {

            $exam_id=$row['exam_id'];
                
            } 
            }
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
            $balance_no_seats=$balance_no_seats-1;
            $booked_seats=$booked_seats+1;
            $conn->query("update exam set balance_no_seats='$balance_no_seats',booked_seats='$booked_seats' where exam_id='$exam_id'");
            echo'<script>window.alert("Payment successfully!!");
             window.location.href="student_home.php";</script>';

  
        }
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
