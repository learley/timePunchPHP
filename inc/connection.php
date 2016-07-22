<?php

include("connect.php");

$dsn = "mysql:"
  . "host=" . $db_host
  . ";dbname=" . $db_name
  . ";port=" . $db_port;

try {
  $db = new PDO($dsn,$db_user,$db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect";
  echo $e->getMessage();
  exit;
}