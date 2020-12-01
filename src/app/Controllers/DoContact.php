<?php
// error_reporting(0);
// ini_set('display_errors', 0);
;
include_once('HttpRequest.php');

if (!$_POST) {
  echo  json_encode(array ("Status"=>500));
  return false;
}
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

extract($_POST);

if ($empresa) {
  $empresa = ' da empresa '.$_POST['empresa'];
} else {
  $empresa = '';
}


$data = array();
$data['personalizations'][] = array(
  "to" => array(array(
    "email" => 'falecom@wallbank.com.br',
    "name" => $name
  )),
  "dynamic_template_data" => array (
    "Name" => $name,
    "Empresa" => $empresa,
    "Email" => $email,
    "Whatsapp" => $whatsapp,
    "Message" => $message
  ),
  "subject" => "Hello, World"
  );

  $data["from"] = array(
    "email" => "falecom@wallbank.com.br",
    "name" => "ICA Bank Contato"
  );
  $data["reply_to"] = array(
    "email" => $email,
    "name" => $name
  );

  $data["template_id"] = "d-b9f25255a7164944bf1ec978fa2de0cc";
$curl = curl_init();


curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($data));

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
CURLOPT_VERBOSE => true,
CURLOPT_STDERR => fopen('./curl.log', 'w+'),
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_HTTPHEADER => array(
"authorization: bearer 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",
"content-type: application/json"
),
));




$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo  json_encode(array ("Status"=>500));
} else {
  // echo $err;
  // echo $response;
  echo  json_encode(array ("Status"=>1));
}




