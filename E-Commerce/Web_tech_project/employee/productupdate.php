
<style type="text/css">

* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
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
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
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
	
  <form method="post" action="productupdate.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product Name</label>
  	  <input type="text" name="Product_name" value="<?php echo $Product_name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Product Id</label>
  	  <input type="text" name="Product_Id" value="<?php echo $Product_Id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Product Price</label>
  	  <input type="text" name="Product_Price">
  	</div>
  	<div class="input-group">
  	  <label>Brand</label>
  	  <input type="text" name="Brand">
  	</div>
      <div>
         Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
      </div>  	
    <div class="input-group">
  	  <button type="submit" class="btn" name="addp">Add Product</button>
  	</div>
  
  </form>
</body>
</html>