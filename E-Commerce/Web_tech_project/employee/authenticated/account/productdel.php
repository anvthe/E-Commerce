<?php
?>
<form method="post" action="">
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color:  #00167a;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color:  #00167a;
   color: white;
    }
  tr:nth-child(even) {background-color: #858ac4}
 </style>

<fieldset>
    <legend>
        <b>Product | List</b>
    </legend>
    
</select>
<input type="submit" name="Filter" value="Filter" formaction="filter.php">

<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
       
        <th align="left">Order Id</th>
        <th align="left">Price</th>
        <th align="left">Address</th>
        <th align="left">Phone</th>
        <th align="left">Operation</th>
    </tr>




<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$eid=$_SESSION['employee_id'];

$sql = "SELECT * FROM work_assign where employee_id='$eid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
         $rows=array();
      while ($row1=mysqli_fetch_array($result)) {
        $rows[]=$row1;
        foreach ($rows as $row1) {
          $order_id=$row1['order_id'];
          $sql2="SELECT * FROM order_tbl WHERE order_id='$order_id'";
          $result2=mysqli_query($conn,$sql2);
          $row2=mysqli_fetch_assoc($result2);
        
      

  	   $del='delivared';
        while($row = mysqli_fetch_assoc($result)) {

		  echo "<tr><td>".$row['order_id']."</td><td>".$row['price']."</td><td>".$row2['address']."</td><td>".$row2['phone']."</td><td><a href='delivaredtbl.php?name=".$row['order_id']."&phone=".$row['price']."&id=".$row['order_id']."'>".$del."</a></td></tr>";
        }
    }

}
}
 else {
  
}

?>

</fieldset>

</table>
</form>