
    <?php
    session_start();


    ?>

    <?php

    error_reporting(0);
    $con=mysqli_connect("localhost","root","","webtech");

    if(!$con){
    die("Connection Error: ".mysqli_connect_error());

    }
    else{

        $str="SELECT * FROM login WHERE username='".$_POST['uname']."' and password='".$_POST['pass']."';";
        $result=mysqli_query($con,$str);
        
     
        if(mysqli_num_rows($result)>0)
        {

            $row=mysqli_fetch_array($result);
            $_SESSION['usrnm']=$row['username'];
            if($row['user_type']=='employee')
            {


               $strg="SELECT employee_id FROM employee WHERE user_name='".$_SESSION['usrnm']."';";
               $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)

                        {
                         $row2=mysqli_fetch_array($results);
                         $_SESSION['employee_id']=$row2['employee_id'];

                         header("Location:employee\authenticated\index.php");
                        }
               
            }

             if($row['user_type']=='admin')
            {
               $strg="SELECT admin_id FROM admin WHERE user_name='".$_SESSION['usrnm']."';";
               $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)

                        {
                         $row2=mysqli_fetch_array($results);
                         $_SESSION['admin_id']=$row2['admin_id'];
                         header("Location:pages\authenticated\index.php");
                        }
            }
                     
            if($row['user_type']=='user')
            {

               $strg="SELECT customer_id FROM user WHERE user_name='".$_SESSION['usrnm']."';";
               $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)

                        {
                         $row2=mysqli_fetch_array($results);
                         $_SESSION['customer_id']=$row2['customer_id'];
                         header("Location:htmldocs\profile.php");
                        }
            }

         }
    }


    ?>



