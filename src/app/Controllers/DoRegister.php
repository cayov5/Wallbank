<?php
error_reporting(0);
ini_set('display_errors', 0);

include_once ("../config/Database.php");
include_once('HttpRequest.php');

if (!$_POST) {
  echo  json_encode(array ("Status"=>500));
  return false;
}

$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


  $name = $conn->real_escape_string($_POST['name']);
  $cpf = $conn->real_escape_string($_POST['cpf']);
  $estado = $conn->real_escape_string($_POST['estado']);
  $cidade = $conn->real_escape_string($_POST['cidade']);
  $whatsapp = $conn->real_escape_string($_POST['whatsapp']);
  $email = $conn->real_escape_string($_POST['email']);


  $sql="INSERT INTO preregister (`name`, `cpf`, `estado`, `cidade`, `whatsapp`, `email`)
  VALUES ('$name', '$cpf', '$estado', '$cidade', '$whatsapp', '$email')";

  if(!$result = $conn->query($sql)){

    switch (strtok($conn->error, " ")) {
      case 'Duplicate':
      echo  json_encode(array ("Status"=>2));
      return false;
      break;

      default:
      echo  json_encode(array ("Status"=>500));
      return false;
    }
  }
  else
  {
    echo  json_encode(array ("Status"=>1));

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"personalizations\":[{\"to\":[{\"email\":\"".$email."\",\"name\":\"".$name."\"}],\"dynamic_template_data\":{\"Name\":\"".$name."\"},\"subject\":\"Hello, World!\"}],\"from\":{\"email\":\"falecom@wallbank.com.br\",\"name\":\"ICA Bank\"},\"template_id\":\"d-c1b9bc21c9c14ee78e661c7a8419dd0e\"}",
  CURLOPT_HTTPHEADER => array(
    "authorization: bearer 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",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
  }
  ?>
