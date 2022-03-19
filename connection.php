<?php
  $conn = mysqli_connect('localhost', 'egoronuy_mydatabase', '09355957218@efren', 'egoronuy_crud');

  if(!$conn){
      echo 'Connection error:' .mysqli_connect_error();
  }
?>