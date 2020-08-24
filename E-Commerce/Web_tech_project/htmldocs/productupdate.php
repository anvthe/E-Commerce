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

<?php include('server.php') ?>

<!DOCTYPE html>

<html>
<head>
  <title>Product Add </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Product Add </h2>
  </div>
  
  <form method="post" action="productupdate.php" enctype="multipart/form-data">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Product Name</label>
      <input type="text" name="Product_name" value="<?php echo $Product_name; ?>" required/>
    </div>
    <div class="input-group">
      <label>Net Weight</label>
      <input type="text" name="Net_Weight" value="<?php echo $Product_Id; ?>" required/>
    </div>
    <div class="input-group">
      <label>Product Buying Price</label>
      <input type="text" name="Product_Buying_Price" required/>
    </div>
    <div class="input-group">
      <label>Product Selling Price</label>
      <input type="text" name="Product_Selling_Price" required/>
    </div>
    <div class="input-group">
      <label>Brand Name</label>
      <input type="text" name="Brand_Name" required/>
    </div>

    <div class="input-group">
      <label>Quantity</label>
      <input type="text" name="Quantity" required/>
    </div>
    <div class="input-group">
      <label>Buying Date</label>
      <input type="text" name="Buying_Date" required/>
    </div>
    <div class="input-group">
    <?php
    $conn=new mysqli("localhost","root","","webtech");
    if($conn->connect_errno)
    {
      echo 'connection failed';
    }

    ?>
      <label>Category Name</label>
      
            <select name="category" style="width: 200px " >
                <option>Select</option>
                <?php
                if($stmt=$conn->query("select * from category"))
                {
                    while($r=$stmt->fetch_array(MYSQLI_ASSOC))
                    {
                 ?>      
                <option value="<?php echo $r['category_name'] ?>"><?php echo $r['category_name'] ?></option> 
                
                <?php  }  }   ?>
                
            </select>
      
    </div>

    <div class="input-group">
      <label>Supplier Name</label>
      <input type="text" name="Supplier_Name" required/>
    </div>
    <div class="input-group">
      <label>Supplier Address</label>
      <input type="text" name="Supplier_Address" required/>
    </div>
    <div class="input-group">
      <label>Supplier Phone Number</label>
      <input type="text" name="Supplier_Phone_Number" required/>
    </div>
      <div class="avatar">
         Select image to upload:
    <input type="file" name="avatar"  class="btn" required/>
      </div>    
    <div class="input-group">
      <input type="submit" class="btn" name="addp"/>Add Product
    </div>
  
  </form>

</body>
</html>






