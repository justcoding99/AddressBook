<?php

$dbname="adress_book";

$conn= mysqli_connect("localhost","root","","adress_book");

if ($conn -> connect_errno) {

   echo 'Failed to connect to mySQL'. $conn -> connect_error ;

   exit();

}

else {

  echo 'Connected!!!';

}

?>

