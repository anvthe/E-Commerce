
<form>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>

<fieldset>
    <legend>
        <b>SUPPLIER | LIST</b>
 
   </legend>
    
   

<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">ID</th>
        <th align="left">NAME</th>
        <th align="left">ADDRESS</th>
        <th align="left">PHONE NUMBER</th>
        <th ></th>
        <th ></th>
        <th ></th>
    </tr>

 <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT supplier_id, supplier_name, supplier_address, supplier_phone FROM supplier";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["supplier_id"]. "</td><td>" . $row["supplier_name"] . "</td><td>"
  . $row["supplier_address"]. "</td> <td>" .$row["supplier_phone"].  "</td>  </tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>
</fieldset>
</table>
</form>