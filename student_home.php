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

              require('config.php');
              require('razorpay-php/Razorpay.php');
              // session_start();
              // $regid=$_SESSION['regid'];
              //   $name=$_SESSION['name'];
              //     $email=$_SESSION['email'];
              //  $phno= $_SESSION['phno'];
              
              
              // Create the Razorpay Order
              
              use Razorpay\Api\Api;
              
              $api = new Api($keyId, $keySecret);
              
              //
              // We create an razorpay order using orders api
              // Docs: https://docs.razorpay.com/docs/orders
              //
              $price =200;
              $_SESSION['price'] = $price;
              $customername = $_SESSION['name'];
              $email =$_SESSION['email'];
              $contactno = $phno;
              $orderData = [
                  'receipt'         => 3456,
                  'amount'          => $price * 100, // 2000 rupees in paise
                  'currency'        => 'INR',
                  'payment_capture' => 1 // auto capture
              ];
              
              $razorpayOrder = $api->order->create($orderData);
              
              $razorpayOrderId = $razorpayOrder['id'];
              
              $_SESSION['razorpay_order_id'] = $razorpayOrderId;
              
              $displayAmount = $amount = $orderData['amount'];
              
              if ($displayCurrency !== 'INR')
              {
                  $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
                  $exchange = json_decode(file_get_contents($url), true);
              
                  $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
              }
              
              $data = [
                  "key"               => $keyId,
                  "amount"            => $amount,
                  "name"              => "Lakshya",
                  "description"       => "Scholarship Registration",
                  "image"             => "https://i.ibb.co/6DhhMVf/logo-1-1-1.png",
                  "prefill"           => [
                  "name"              => $customername,
                  "email"             => $email,
                  "contact"           => $contactno,
                  ],
                  "notes"             => [
                  "address"           => "Adv Easwara Iyer Rd, Pullepady, Kochi, Kerala",
                  "merchant_order_id" => "12312321",
                  ],
                  "theme"             => [
                  "color"             => "#F37254"
                  ],
                  "order_id"          => $razorpayOrderId,
              ];
              
              if ($displayCurrency !== 'INR')
              {
                  $data['display_currency']  = $displayCurrency;
                  $data['display_amount']    = $displayAmount;
              }
              
              $json = json_encode($data);
              ?>
              
              
              <form action="verify.php" method="POST">
                <script
                  src="https://checkout.razorpay.com/v1/checkout.js"
                  data-key="<?php echo $data['key']?>"
                  data-amount="<?php echo $data['amount']?>"
                  data-currency="INR"
                  data-name="<?php echo $data['name']?>"
                  data-image="<?php echo $data['image']?>"
                  data-description="<?php echo $data['description']?>"
                  data-prefill.name="<?php echo $data['prefill']['name']?>"
                  data-prefill.email="<?php echo $data['prefill']['email']?>"
                  data-prefill.contact="<?php echo $data['prefill']['contact']?>"
                  data-notes.shopping_order_id="3456"
                  data-order_id="<?php echo $data['order_id']?>"
                  <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
                  <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
                >
                </script>
                <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
                <input type="hidden" name="shopping_order_id" value="3456">
              </form>
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