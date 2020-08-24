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
        <b>USER | SEARCH</b>
    </legend>
    Filter By
    <select>
        <option>Any</option>
        <option>Name</option>
        <option>Email</option>
        <option>Status</option>
    </select>
    <input />

</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">NAME</th>
        <th align="left">EMAIL</th>
        <th align="left">Date Of Birth</th>
        <th ></th>
        <th ></th>
        <th ></th>
    </tr>

 <?php
    $Detail="Detail";
    $Edit="Edit";
    $Delete="Delete";
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT name, email, date_of_birth FROM user";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
    . $row["date_of_birth"]. "</td> <td> <a href='detail.html'>".$Detail."</a></td><td> <a href='edit.html'>".$Edit."</a></td><td> <a href='delete.html'>".$Delete."</a></td> </tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>
</table>
</form>