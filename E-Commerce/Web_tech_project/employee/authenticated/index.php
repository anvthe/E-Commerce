<?php

     session_start();
     if(!isset($_SESSION['usrnm'])){
        header("Location:../index.html");
     }
?>
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<from methood="post" action="logout.php">

<table width="100%" cellspacing="40" cellpadding="10" border="0">
    <tr>
        <td colspan="4" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="account/dashboard.php" target="contentFrame">
                            <img align="right" height="60" src="../../resources/images/logo.png">
                        </a>
                    </td>
                    <td align="right">
                       <label style="color:blue">Logged in as :</label> <a href="account/pro.php" target="contentFrame" style="color:black">
                                <?php
                                echo $_SESSION['usrnm'];
                                ?></a>&nbsp;<b style="color:black">| |</b>
                         <b><a href="account/notification.php" target="contentFrame"  style="color:green"><i class="icon-notification"></i>See Notice</a></b>
                         &nbsp;<b style="color:black">| |</b>
                                    
                            <label ><a href="logout.php" style="color:red">Logout <i class="fa fa-sign-out"></i></a></label>            

                     
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="right">
            <nav class="social">

            <ul>
                <li><a href="account/dashboard.php" target="contentFrame">Dashboard<i class="fa fa-dashcube"></i></a></li>
                <li><a href="account/pro.php" target="contentFrame">View Profile<i class="fa fa-user"></i></a></li>
                <li><a href="account/profileup.php" target="contentFrame">Edit Profile<i class="fa fa-user"style="color:red"></i></a></li>
                <li><a href="account/picture.php" target="contentFrame">Change Profile Picture<i class="fa fa-image" style="color: red"></i></a></li>
                <li><a href="account/change_password.html" target="contentFrame">Change Password<i class="fa fa-key" style="color: red"></i>
                </a></li>
                <li><a href="account/productdel.php" target="contentFrame">Product Have To delivar<i class="fa fa-key" style="color: red"></i>
                </a></li>
                <li><a href="../index.html">Logout</a><i class="fa fa-sign-out" style="color: red"></i></li>
            </ul>
            </nav>
        </td>
        <td></td><td></td>
        <td align="right">
        <iframe name="contentFrame" frameborder="0" width="900" height="700" src="account/dashboard.php"></iframe>
        </td>
    </tr>
</table>
</from>
