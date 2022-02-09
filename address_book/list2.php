<table border = 3><tr><th>lastName</th><th>Firstname</th><th>email</th><<th>Homephone</th><th>cellPhone</th><th>officePhone</th><th>address</th></tr>
<style type="text/css">
<!--
body {  font-family: "Times New Roman", Times, serif; background-color: #f4a4dd}
-->
</style>

<?php
include('dbconnect2.php');

$query="SELECT * FROM contacts" or die();
$rez=mysqli_query($conn,$query)or die();
while ($row = mysqli_fetch_array($rez)) 
{
print "<tr><td>{$row['lname']}</td><td>{$row['fname']}</td><td>{$row['email']}</td><td>{$row['homePhone']}</td><td>{$row['cellPhone']}</td><td>{$row['officePhone']}</td><td>{$row['address']}</td></tr> <td>";

}
//$this_Stud_ID = MYSQLİ_RESULT($rez,$row,"id");
if (!function_exists('mysqli_result')) {
  echo "null";
}


?>
</table>
<br> <br>
<a href="search2.php">Search</a>
<br>
<a href="add2.php">Add</a>
<br>
<a href="delete.php"> Delete </a> 
<br> <br>
<h3>
<a href="index2.php"> Main Menu </a> 
</h3>

