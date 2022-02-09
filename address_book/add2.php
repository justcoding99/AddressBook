<?php
include('dbconnect2.php');

if(filter_input(INPUT_POST,"action"))
{
 $lname= filter_input(INPUT_POST,"lname");
   $fname= filter_input(INPUT_POST,"fname");
    $email= filter_input(INPUT_POST,"email");
    $homePhone= filter_input(INPUT_POST,"homePhone");
     $cellPhone= filter_input(INPUT_POST,"cellPhone");
      $officePhone= filter_input(INPUT_POST,"officePhone");
       $address= filter_input(INPUT_POST,"address");
        
  $query="INSERT INTO contacts (lname, fname, email, homePhone, cellPhone, officePhone, address) VALUES ('$lname', '$fname', '$email','$homePhone', '$cellPhone', '$officePhone', '$address')"or die;
  $rez=mysqli_query($conn,$query) or die();
  }
?> 
<style type="text/css">
<!--

form {  font-family: "Courier New", Courier, mono; background-color: #f4a4dd}
body {  font-family: "Times New Roman", Times, serif; background-color: #d34cd9}
-->
</style>



<form action="<?php echo filter_input(INPUT_POST,"php_self") ?>" method="post">
Lastname<br><input type="text" name="lname"><br />
Firstname<br><input type="text" name="fname"><br />
E-mail<br><input type="text" name="email"><br />
Homephone<br><input type="text" name="homePhone"><br />
Cellphone<br><input type="text" name="cellPhone"><br />
Officephone<br><input type="text" name="officePhone"><br />
Address<br><input type="text" name="address"><br />
<br><input type="submit" name="action" value="Send!">
</form>
<a href="list2.php">Address lists</a>
<a href="search2.php">Search</a>
