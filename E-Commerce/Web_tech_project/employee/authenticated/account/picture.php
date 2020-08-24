<?php
session_start();
$user=$_SESSION['usrnm']; //you can fetch username here
$db=new mysqli('localhost','root','','webtech');
if($db->connect_errno){
echo $db->connect_error;
}
$pull="select image from employee  where user_name='".$_SESSION['usrnm']."';";
$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload'])){
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo '<div class="plus">';
		echo "Uploaded Successully";
		echo '</div>';echo"<br/><b><u>Image Details</u></b><br/>";

		echo "Name: " . $_FILES["file"]["name"] . "<br/>";
		echo "Type: " . $_FILES["file"]["type"] . "<br/>";
		echo "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB";

		if (file_exists("images/" . $_FILES["file"]["name"]))
		{
		unlink("images/" . $_FILES["file"]["name"]);
		}
		else{
			$pic=$_FILES["file"]["name"];
			$conv=explode(".",$pic);
			$ext=$conv['1'];
			move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $user.".".$ext);
			echo "Stored in as: " . "images/".$user.".".$ext;
			$url="images/".$user.".".$ext;

			$query="update admin set image='$url' where user_name='$user'";
			if($upl=$db->query($query)){
			echo "<br/>Saved to Database successfully";
			}
		 }
	}
}else{
 echo "File Size Limit Crossed 200 KB Use Picture Size less than 200 KB";
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
<?php
$pull="select image from admin where user_name='".$_SESSION['usrnm']."';";
$res=$db->query($pull);
echo "<table>";
while ($row=mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
echo "</tr>";
}

echo "</table>";
?>
<input type="file" name="file" />
<input type="submit" name="pupload" class="button" value="Upload"/>
</form>


















