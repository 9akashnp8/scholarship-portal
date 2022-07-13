<?php
include 'dataconnect.php';
$query="SELECT NOW() as 'time'";
$res=$conn->query($query);
if($res)
{
   while($row=mysqli_fetch_assoc($res))
 {
       $dtime=$row['time'];
 }     
}

$url = 'https://api-in21.leadsquared.com/v2/ProspectActivity.svc/CreateCustom?accessKey=AccessKey&secretKey=Secret&SearchBy=EmailAddress';

$ch = curl_init($url);
//echo $owner_id;
// $ow="fd4ff612-1d1d-11ec-bdcc-02aca1b5f6dc";
// echo $ow;

$payload = json_encode(
    array (
        'LeadDetails' => 
        array (
          0 => 
          array (
            'Attribute' => 'FirstName',
            'Value' => $fname,
          ),
          1 => 
          array (
            'Attribute' => 'LastName',
            'Value' => $lname,
          ),
          2 => 
          array (
            'Attribute' => 'EmailAddress',
            'Value' => $email,
          ),
          3 => 
          array (
            'Attribute' => 'Mobile',
            'Value' => $phno,
          ),
          4 => 
          array (
            'Attribute' => 'mx_Interested_Course',
            'Value' => $int_course,
          ),
          5 => 
          array (
            'Attribute' => 'Source',
            'Value' => 'OfflineLead',
          ),
          6 => 
          array (
            'Attribute' => 'SearchBy',
            'Value' => 'EmailAddress',
          ),
          // 8=> 
          // array (
          // 'Attribute' => 'OwnerId',
          //     'Value' => $owner_id,  
          // )
        ),
        // 'Activity' => 
        // array (
        //   'ActivityEvent' => 206,
        //   'ActivityNote' => 'Pushing from walk in website',
        //   'ActivityDateTime' => $dtime,
        //   'Fields' => 
        //   array (
        //     0 => 
        //     array (
        //       'SchemaName' => 'mx_Custom_1',
        //       'Value' => "walk at {$branch} handled by {$agname}",
        //     )
        //   ),
        // ),
        'Activity' => 
        array (
          'ActivityEvent' => 219,
          'ActivityNote' => "Student registered for scholarship examination",
          'ActivityDateTime' => $dtime,
        ),
      )
);

//echo $payload;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

// if you need to process the response from the API further
$response = json_encode($result, true);

print_r($response);

?> 
