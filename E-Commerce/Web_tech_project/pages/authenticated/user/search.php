
<form>
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
        <b>ADMIN | LIST</b>
    </legend>
    
   

</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">NAME</th>
        <th align="left">EMAIL</th>
        <th align="left">GENDER</th>
        <th align="left">ADDRESS</th>
         <th align="left">DATE OF BIRTH</th>

    </tr>

 <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT name, email, gender, address, date_of_birth FROM admin";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
    . $row["gender"]. "</td> <td>" . $row["address"]. "</td> <td>" .$row["date_of_birth"].  "</td>  </tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>
</table>
</form>