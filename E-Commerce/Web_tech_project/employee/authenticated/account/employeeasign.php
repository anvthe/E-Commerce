<style type="text/css">

* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #e5eace;
}

.header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: #5fa060;
  text-align: center;
  border: 1px solid #d5b0de;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #ccccff;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid blue;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: black;
  background:  #5fa060;
  border: none;
  border-radius: 5px;
  font-style: bold;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #f20b07; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
 
<html>
<head>
  <title>Employee Assign </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Employee Assign </h2>
  </div>
<form method="post" action="">

<div class="input-group">
    <?php
    $conn=new mysqli("localhost","root","","webtech");
    if($conn->connect_errno)
    {
      echo 'connection failed';
    }

    ?>
      <label>Employee Name :</label>
      
            <select name="Employee_Name" style="width: 200px " >
                <option>Select</option>
                <?php
                if($stmt=$conn->query("select * from employee"))
                {
                    while($r=$stmt->fetch_array(MYSQLI_ASSOC))
                    {
                 ?>      
                <option value="<?php echo $r['name'] ?>"><?php echo $r['name'] ?></option> 
                
                <?php  }  }   ?>
                
            </select>
      
    </div>


 <div class="input-group">
    <?php
    $conn=new mysqli("localhost","root","","webtech");
    if($conn->connect_errno)
    {
      echo 'connection failed';
    }

    ?>
      <label>Order Id :</label>
      
            <select name="Order_Id" style="width: 200px " >
                <option>Select</option>
                <?php
                if($stmt=$conn->query("select * from order_tbl"))
                {
                    while($r=$stmt->fetch_array(MYSQLI_ASSOC))
                    {
                 ?>      
                <option value="<?php echo $r['order_id'] ?>"><?php echo $r['order_id'] ?></option> 
                
                <?php  }  }   ?>
                
            </select>
      
    </div>


<br/>


<input type="submit" name="submit" value="Assign" formaction="asgn_emp.php" class="btn">




</form>
</body>
</html>