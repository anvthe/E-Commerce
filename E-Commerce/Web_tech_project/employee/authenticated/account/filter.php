<?php



?>
<form method="post" action="">
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #00167a;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #00167a;
   color: white;
    }
  tr:nth-child(even) {background-color: #858ac4}
 </style>

<fieldset>
    <legend>
        <b>EMPLOYEE | LIST</b>
    </legend>
    
 <select  name="fil">
  <option value="Current">Current</option>
  <option value="Fromer">Fromer</option>
</select>
<input type="submit" name="Filter" value="Filter" formaction="filter.php">

<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">Id</th>
        <th align="left">Name</th>
        <th align="left">Date Of birht</th>
        <th align="left">Operation</th>
    </tr>





<?php
if(isset($_POST['fil'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST['fil']=='Current'){
	$v='1';
$sql = "SELECT * FROM employee where status='$v'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  //$edit='Edit';
	$delete='delete';
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>".$row['employee_id']."</td><td>".$row['name']."</td><td>".$row['date_of_birth']."</td><td><a href='delete.php?name=".$row['name']."&phone=".$row['password']."&id=".$row['employee_id']."'>".$delete."</a></td></tr>";
        }
    }
 else {
  
}

}
}
if(isset($_POST['fil']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST['fil']=='Former'){
	$v='0';
$sql = "SELECT * FROM employee where status='$v'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  //$edit='Edit';
	$delete='delete';
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>".$row['employee_id']."</td><td>".$row['name']."</td><td>".$row['date_of_birth']."</td><td></td></tr>";
        }
    }
 else {
  
}

}

}





?>




</table>
</fieldset>
</form>