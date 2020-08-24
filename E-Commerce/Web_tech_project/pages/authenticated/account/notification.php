
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
        <b>Notice | List</b>
        </legend>
    
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">Notice Name</th>
        <th align="left">Notice Type</th>
        <th align="left">Notice Body</th>
       
    </tr>

 <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
   

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT notice_name,notice_type,notice_body FROM notice";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
   

    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["notice_name"]. "</td><td>" . $row["notice_type"] . "</td><td>"
    . $row["notice_body"]. "</td>  </tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>

</table>

    
   

</fieldset>
</form>