<?php
include('Config.php');

try {
  $conn = new mysqli($config['host'], $config['username'], $config['password'] , $config['db']);

} catch (Exception $e) {
  echo  json_encode(array ("Status"=>500));
  return false;
}

// if ($conn->connect_error) {
//   echo  json_encode(array ("Status"=>500));
// }
