<?php
include '../classes/Utils.php';
$error = false;

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  //Error handling
  if ($name == "") {
    $error = true;
  }

  if(!$error)
  {
    //Reverse name
    $utils = new Utils();
    $result = $utils->reverse_string($name);
  }
}
?>