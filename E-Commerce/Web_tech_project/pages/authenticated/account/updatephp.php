<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
    
$db = mysqli_connect('localhost', 'root', '', 'webtech');

if (isset($_POST['submit'])) {
$id = $_POST['did'];
$name = $_POST['dname'];
$username = $_POST['dusername'];
$email = $_POST['demail'];
$dob = $_POST['dob'];
$password = $_POST['dpassword'];
    
$query ="update admin set name='$name', username='$username', password='$password',
date_of_birth='$dob',email='$email' where admin_id='$id'";
   $result= mysqli_query($db, $query);
}

while ($row = mysqli_fetch_array($result)) {
echo "<b><a href='updatephp.php?update={$row['admin_id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_POST['update'])) {
$update = $_POST['update'];
$query1 = "select * from employee where employee_id=$update";
$result2=mysqli_query($db, $query1);    
while ($row1 = mysqli_fetch_array($result2)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['admmin_id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dname' value='{$row1['name']}' />";
echo "<br />";

echo "<label>" . "Username:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dusername' value='{$row1['username']}' />";
echo "<br />";
echo "<br />";
echo "<label>" . "Password:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dpassword'>{$row1['password']}";
echo "</textarea>";
echo "<label>" . "Date Of Birth:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dob' value='{$row1['date_of_birth']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='demail' value='{$row1['email']}' />";

echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
</body>
</html>