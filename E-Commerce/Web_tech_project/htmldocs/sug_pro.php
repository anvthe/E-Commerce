<?php
if(isset($_POST['submit']))
{	
include "db.php";
$n=$_POST['name'];
$t=$_POST['type'];
$sql="INSERT INTO suggest_pro (pro_name,pro_type)".
      "VALUES ('$n','$t')";
mysqli_query($con,$sql);


}

?>



<style>

.t{
	width: 300px;
    height: 110px;
    padding: 12px 20px;
    margin: 70px 500px;

    box-sizing: border-box;
}
.b{
margin: 70px 600px;
}



body {
  
   background-color: #07b774;
  
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<div class="t">
	<textarea rows="5" cols="30" placeholder="Product Name" align="right" name="name" ></textarea>
	<br/>
	<br/>
	<br/>
	<textarea rows="5" cols="30" placeholder="Product Type" name="type" ></textarea>
	</div>
	<input type="submit" name="submit" value="Suggest" class="b">

	</form>

</body>
</html>