<?php
if(isset($_REQUEST['submit'])){
$mysqli = new mysqli("localhost", "root", "", "webtech");
$name=$_POST['n_name'];
$type=$_POST['n_type'];
$notice=$_POST['notice'];
echo "$name";
$sql = "INSERT INTO notice (notice_id,notice_name,notice_type,notice_body)"
                    . "VALUES (Null,'$name','$type','$notice' )";


if ($mysqli->query($sql) == true )
{

echo "notice posted";


}
}

?>





<!DOCTYPE html>
<html>
<head>
	<style> 
#n1{
    width: 100px;
    height: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td>
					<label> Notice name:</label>
				</td>
				<td>
					<textarea rows="2" cols="60" name="n_name">
					</textarea>
				</td>
			</tr>

			<tr>
				<td>
					<label> Notice type:</label>
				</td>
				<td>
					<textarea rows="2" cols="60" name="n_type">
					</textarea>
				</td>
			</tr>

			<tr>
				<td>
					<label> Notice Body:</label>
				</td>
				<td>
					<textarea rows="20" cols="60" name="notice">
					</textarea>

				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit" />
				</td>
			</tr>
		</table>
	</form>

</body>
</html>