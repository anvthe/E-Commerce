<?php

session_start();

?>



<fieldset>
    <legend><b>PROFILE</b></legend>
    <form action="profileup.php" method="post">
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>

                <td> <?php  echo  $_SESSION['name']; ?> </td>
                <td rowspan="7" align="center">
                    <img width="128" src="<?php echo $_SESSION['image'];?>"/>
                    <br/>
                    <a href="picture.php">Change</a>
                </td>
            </tr>       
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>  <?php echo $_SESSION['email']; ?>  </td>
            </tr>       
            <tr><td colspan="3"><hr/></td></tr>         
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td> <?php echo $_SESSION['gender'];?> </td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td> <?php echo $_SESSION['date_of_birth']; ?> </td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>Admin</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Active</td>
            </tr>
            
        </table>    
        <hr/>
        <input type="submit" name="submit" value="Edit">
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>








<?php
 $mysqli = new mysqli("localhost", "root", "", "webtech");

 $sql= "SELECT name ,email, gender,date_of_birth,image FROM employee WHERE employee_id='".$_SESSION['employee_id']."';";
 
$result=$mysqli->query($sql) ;
 if($result->num_rows > 0){
   

    while($row = $result->fetch_assoc()){
        $_SESSION['name']=$row["name"];
        $_SESSION['email']=$row["email"];
        $_SESSION['gender']=$row["gender"];
        $_SESSION['date_of_birth']=$row["date_of_birth"];
        $_SESSION['image']=$row["image"];

        
      

    }
 }


?>

