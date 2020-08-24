<?php

error_reporting(0);  
   $name_error = $email_error = $password_error =  $gender_error = $date= "";
    $name = $email = $username = $password = $avatar_path= $confirmpassword = $address = $success = $gender = "";

 session_start();
 $_SESSION['message']='';
 $mysqli = new mysqli("localhost", "root", "", "webtech");
if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
             if (empty($_POST["name"]))
             {
                 $name_error = "Name is required";

                 
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
                 $password_error=" Password must be same";
              }
            else{
                
            }

            if (empty($_POST["email"])) 
            {
                $email_error = "Email is required";
            } 
            else 
            {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                  $email_error = "Invalid email format"; 
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

            if ($name_error == '' and $email_error == '' and $password_error==''and $gender_error=='' and $date=='')
            {

                  

              $name = $_POST['name'];
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $avatar_path = 'images/'.$_FILES['avatar']['name'];
              $gender=$_POST['gender'];
              $date=$_POST['date'];
              $address=$_POST['address'];
              $usert="employee";
              if (preg_match("!image!",$_FILES['avatar']['type'])) 
              {
                  if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) 
                  {
                     $_SESSION[ 'message' ]="no error! "; 

                    $_SESSION[ 'message' ]="avatar ";
                      $_SESSION['username'] = $username;
                      $_SESSION['avatar'] = $avatar_path;
                      $status='1';

                      $sql = "INSERT INTO employee (employee_id,name,user_name,email, password,gender,date_of_birth,image,address,user_type,status)"
                               . "VALUES (Null,'$name', '$username', '$email','$password','$gender','$date','$avatar_path','$address','$usert','$status')";

                    $sql2 = "INSERT INTO login(username,password,user_type)"."VALUES ('$username','$password','$usert')";
                 

                  }

                   if ($mysqli->query($sql) == true )
                  { 
                    //$_SESSION[ 'message' ]="1st query done";
                    if( $mysqli->query($sql2) == true)
                    {  

                      //$_SESSION[ 'message' ]="2nd query done";
                      $_SESSION[ 'message' ] = "Registration succesful! Added to the database!";
                    } 
                     
                  }
                  else{

                    $_SESSION[ 'message' ] = "Registration unsuccesful! ";
                      
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
    <h1>NEW EMPLOYEE REGISTRATION PAGE</h1>
    <form class="form" action="regemployee.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-success"> <?php echo $_SESSION['message']?> </div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input name="gender" type="radio" value="male">Male
      <input name="gender" type="radio" value="female">Female
      <input name="gender" type="radio" value="other">Other</br></br>
      Date Of Birth :     <input name="date" type="date"> </br></br>
      <input type="text" placeholder="Address" name="address" required />


      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>