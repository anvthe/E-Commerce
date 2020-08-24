<?php

session_start();

?>


    




<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method="post" action="">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value=<?php  echo  $_SESSION['name']; ?>></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value=<?php  echo  $_SESSION['email']; ?>>
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>				
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                     <?php
                        if($_SESSION['gender']=='male'){
                           
                        }

                        if($_SESSION['gender']=='female'){
                            
                        }


                     ?>
                   
                    <input name="gender" type="radio" value="male">Male
                    <input name="gender" type="radio" value="female">Female
                    <input name="gender" type="radio" value="other">Other

                    
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="date" value=<?php echo $_SESSION['date_of_birth']; ?> >
                  
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" name="submit" value="Save" formaction="updateprofile.php">	
        <a href="dashboard.html">Dashboard</a>
    </form>
</fieldset>