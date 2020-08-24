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
                        
                            <label ><a href="account/postnotice.php" target="contentFrame" style="color:brown">Post Notice<i class="fa fa-bell"></i></a></label>   

                            <label ><a href="account/deletenotice.php" style="color:red" target="contentFrame">Delete Notice <i class="fa fa-scissors"></i></a></label>            
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
                <li><a href="account/change_password.html" target="contentFrame">Change Password<i class="fa fa-key" style="color: red"></i></a></li>
                <li><a href="account/reg.php" target="contentFrame">Add new ADMIN<i class="fa fa-user-plus" style="color: green"></i></a></li>
                <li><a href="account/regemployee.php" target="contentFrame">Add new EMPLOYEE<i class="fa fa-user-plus" style="color: blue"></i></a></li>
                <li><a href="account/deleteemp.php" target="contentFrame">Delete Existing EMPLOYEE<i class="fa fa-minus-square" style="color:brown"></i></a></li>
                <li><a href="../index.html">Logout</a><i class="fa fa-sign-out" style="color: red"></i></li>
                <li><a href="../../htmldocs/productupdate.php" target="contentFrame">Product Add<i class="fa fa-product-hunt" style="color: lightblue"></i></a></li> 
                <li><a href="user/search.php" target="contentFrame">Our Admins <i class="fa fa-steam"></i></a></li>
                <li><a href="account/productup.php" target="contentFrame">Product Selling Update<i class="fa fa-bar-chart"></i></a></li>
                <li><a href="user/supplier.php" target="contentFrame">Our suppliers<i class="fa fa-truck"></i></a></li>
                <li><a href="account/employeeasign.php" target="contentFrame">Assign Employee delivary<i class="fa fa-truck"></i></a></li>

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
