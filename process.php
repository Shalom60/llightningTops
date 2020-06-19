<?php


// validate input
$error1 = 0;
	  
$amount = $_POST["Amount"] != ""? $_POST["Amount"] : $error1++ ;
$phoneNumber = $_POST["Phone_number"] != ""? $_POST["Phone_number"] : $error1++ ;
$code = $_POST["Network_Provider"] != ""? $_POST["Network_Provider"] : $error1++ ;


if($error1 > 0){
	$_SESSION['error']= "please fill all fields";
	header("Location: index.php");
} 

$secretkey="l0hc6jc71yyy ";
$publickey = "dotg8wddhzz6";

// integrate airtime api from wallets.africa

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app.wallet.africa/bills/airtime/purchase",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n  \"Code\": $code,\r\n  \"Amount\": $amount,\r\n  \"PhoneNumber\": $phoneNumber,\r\n  \"SecretKey\": $secretkey \r\n}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer <$publickey>",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $curl;


?>