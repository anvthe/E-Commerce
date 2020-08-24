
<script type="text/javascript">
        
      function validate()
      {
      
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.username.value == "" )
         {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }
         
         if( document.myForm.address.value == "" )
         {
            alert( "Please provide your address!" );
            document.myForm.address.focus();
            return false;
         }
         
         
         
         return( true );
      }
      </script>


<?php

 session_start();
error_reporting(0);  
   $name_error = $email_error = $email_error1 =$email_error2 =$password_error=$password_error1 =  $gender_error = $date= "";
    $phone_error= $name = $email = $username = $password = $avatar_path= $confirmpassword = $address = $success = $gender = $phone="";
    

 $_SESSION['message']='';
 $mysqli = new mysqli("localhost", "root", "", "webtech");
if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
             if (empty($_POST["name"]))
             {
                $name_error="required";
                 $name_error= "Name is required";

                 
             } 
            else 
            {
            $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {
                 
                  echo "Only letters and white space allowed"; 
                }
            }

          
              if($_POST["password"] != $_POST["confirmpassword"] )
              {
                //$password_error="must";
                $password_error="Password must be same";
              }
            else{
                
            }
             $password = test_input($_POST["password"]);
            if( !preg_match( '/[^A-Za-z0-9]+/', $password) || strlen( $password) < 8)
                {
                   $password_error1= "Invalid password!";
                }

            if (empty($_POST["email"])) 
            {
              //$email_error="aal";
               $email_error = "Email is required";
            } 
            else 
            {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                  $email_error1 = "Invalid email format"; 
                }


             
               $con=mysqli_connect("localhost","root","","webtech");
               $strg="SELECT * FROM user ;";
                $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)
                       {
                         $row2=mysqli_fetch_array($results);

                         if ($row2['email']==$email) {
                  //         $email_error = "email repeat"; 
                          $email_error2="email repeat";
                         } 
                        }
            }
            if (isset($_POST['email'])) {
                $newtitle =  $_POST['email'];
                $sqldbtitle = "SELECT * from user WHERE email = '$newtitle' ";
                 $checktitle = mysqli_query($con, $sqldbtitle);
                 $resultcheck = mysqli_fetch_array($checktitle);
                 if ($resultcheck['email'] == $newtitle) {
                  $email_error2= "NEW email IS SAME WITH EXISTING DATA";
                 } else {
                 }
            }

            if(isset($_POST["gender"]))
               {
                  
               }
            else{
                $gender_error="select one gender";
            }
            if(empty($_POST['date']))
            {

             $date =  "Select a date first ";
            
            }
            else
            {
                 
            }

            $phone=$_POST['phone'];
            if(!preg_match("/^[0-9]{11}$/", $phone) || (strlen($phone)!=11)) 
            {
               
              $phone_error="Phone Number Must be 11 charecter";   
            }
            else{
              
            }

            if ($name_error == '' and $email_error == '' and $email_error1 == ''and $email_error2 == ''and $password_error==''and 
             $phone_error=='' and $gender_error=='' and $date=='' and $password_error1=='')
            {
              $name = $_POST['name'];
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $avatar_path = 'images/'.$_FILES['avatar']['name'];
              $gender=$_POST['gender'];
              $date=$_POST['date'];
              $address=$_POST['address'];
              $usert="user";
              $phone_num=$_POST['phone'];
              if (preg_match("!image!",$_FILES['avatar']['type'])) 
              {     
                  if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) 
                  {
                      $_SESSION['username'] = $username;
                      $_SESSION['avatar'] = $avatar_path;

                      $sql = "INSERT INTO user (customer_id,name,email,user_name, password,gender,date_of_birth,image,address,user_type,phone)"
                               . "VALUES (Null,'$name', '$email','$username', '$password','$gender','$date','$avatar_path','$address','$usert','$phone_num')";

                    $sql2 = "INSERT INTO login(username,password,user_type)"."VALUES ('$username','$password','$usert')";
                 

                  }

                   if ($mysqli->query($sql) == true && $mysqli->query($sql2) == true)
                  { 
                      
                      $s_message  = "Registration succesful! Added to the database!";
                      
                     
                  }
                  else{

                      $n_message= "Registration unsuccesful! ";
                      
                  }

              }
              

            }

          }

          function test_input($data) 
          {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
          }      


?>




<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="regi.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>REGISTRATION PAGE</h1>
    <form class="form" action="reg.php" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return(validate());">
      <div class="alert alert-success"> <?php echo $s_message;?> </div>

 <div class="alert alert-error"> <?php 
      echo $n_message;
      echo $email_error;
      echo $email_error2;
      echo $email_error1;
      echo $gender_error;
      echo $data;
      echo $name_error; 
      echo $password_error1;
      echo $password_error;
      echo $phone_error;?> 
</div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="text" name="phone" placeholder="phone number" required/>
      <input name="gender" type="radio" value="male">Male
      <input name="gender" type="radio" value="female">Female
      <input name="gender" type="radio" value="other">Other</br></br>
      Date Of Birth :     <input name="date" type="date"> </br></br>
      <input type="text" placeholder="Address" name="address" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <input type="submit" value="Back" name="back" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>