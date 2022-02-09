<style type="text/css">
<!--
form {  font-family: "Courier New", Courier, mono; background-color: #f4a4dd}
body {  font-family: "Times New Roman", Times, serif; background-color: #d34cd9}
-->
</style>
<?php

include('dbconnect2.php');
if(filter_input(INPUT_POST,"action"))
{ 
  $key =filter_input(INPUT_POST,"key");

$query = "SELECT * FROM contacts WHERE fname LIKE '%$key%'  " or die();   


$result = mysqli_query($conn,$query); 

print "<table border = 4><tr><th>Firstname</th><th>LastName</th><th>Email</th><th>homePhone</th><th>CellPhone</th><th>OfficePhone</th><th>Address</th></tr>";
while ($row = mysqli_fetch_array($result))
   {
  
  print "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['email']}</td><td>{$row['homePhone']}</td><td>{$row['cellPhone']}</td><td>{$row['officePhone']}</td><td>{$row['address']}</td></tr>";  
	}
}
print "</table>";
?>

<form action="<?php echo filter_input(INPUT_POST,"php_self") ?>" method="post">
Name :<br><input type="text" name="key"><br />
<br><input type="submit" name="action" value="Search!">



</form>
<br> <br>
<h3>
<a href="index2.php"> Main Menu </a> 
<br>
</h3>

