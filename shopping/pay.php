<?php
error_reporting(E_ERROR|E_PARSE);
  $product_name=$_POST['product_name'];
  $price=$_POST['product_price'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];

  include 'instamojo/Instamojo.php';
  $authType = "app/user"; /**Depend on app or user based authentication**/

  
  $api = Instamojo\Instamojo::init($authType,[
    "client_id" =>  'XXXXXQAZ',
    "client_secret" => 'XXXXQWE',
    "username" => 'FOO', /** In case of user based authentication**/
    "password" => 'XXXXXXXX' /** In case of user based authentication**/

]);
try {
  $response = $api->createPaymentRequest(array(
      "purpose" => $product_name,
      "amount" => $price,
      "send_email" => true,
      "email" => $email,
      "buyer_name"=> $name,
      "send_sms"=>true,
      "allow_repeated_payments"=>false,
      "redirect_url" => "http://localhost/shopping/thankyou.php"
      ));
 //print_r($response);
 $pay_url=$response['longurl'];
 header("location:$pay_url");
}
catch (Exception $e) {
  print('Error: ' . $e->getMessage());
}
  ?>
