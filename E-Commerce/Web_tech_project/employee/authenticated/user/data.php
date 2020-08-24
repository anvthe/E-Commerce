

<?php
$con=mysqli_connect("localhost","root","","webtech");
$str="SELECT name from user WHERE name LIKE '".$_REQUEST["q"]."%';";


$res=mysqli_query($con,$str);
$list="";
for($i=0;$i<mysqli_num_rows($res);$i++)
	
	{
		$row[$i]=mysqli_fetch_array($res);

		
		$list.="<br/>".$row[$i]["name"];
		
	}

	echo $list===""?"No Suggestion":$list;

?>


