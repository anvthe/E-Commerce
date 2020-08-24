<?php
if (isset($_POST['ADD'])) {
$err="";
   $con=mysqli_connect("localhost","root","","webtech");
   $cat=$_POST['categoryname'];
   $sql="INSERT INTO category(category_name,category_id)"."VALUES('$cat',NULL)";
   if(empty($cat)){
   	$err="NO";
   }
if($err==""){
   mysqli_query($con,$sql);
   echo "CATEGORY ADDED";
	}
}



?>
<style>
fieldset {
  font-size:30px solid;
  padding:10px;
  width:500px;
  height: 300px;
  line-height:2.5;
  background-color: #DAF7A6;
  
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<fieldset height="100px">
		<label>Category name :</label>
<input type="text" name="categoryname" required/>
<br>
<input type="submit" name="ADD" formaction="addcat.php"/>
	</fieldset>
	</form>
</body>
</html>