<?php
include 'functions.php';
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
    $result = reverse_string($name);
  }
}
?>