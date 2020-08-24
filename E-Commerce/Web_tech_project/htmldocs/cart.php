<?php
    
    session_start();
 if(!isset($_SESSION['usrnm']))
 {
     header("location: Homepage.php");
 }   
    
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Something.com">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap3.min.css">

<link rel="stylesheet" type="text/css" href="../bootstrap/css/glyphicon.css">
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="main.js"></script>
<title>Something.com</title>
<style type="text/css">
* { padding: 0; margin: 0; }
body { font-family: sans-serif;   }
a { text-decoration: none; color: #00A5EC; }
li { list-style-type: none; }
header { 
    width: 100%; 
    height: 50px; 
    margin: auto;
    border-bottom: 1px solid #EEE;
    background-color: white;
}
#brand {
    float: left;
    line-height: 50px;
    color: #E5DAC0;
    font-size: 25px;
    font-weight: bolder;
    outline-width: medium;

}

#stext {
    float: left;
    line-height: 35px;
    outline-width:inherit;
    color: #008080;
    font-size: 20px;
    font-weight: bolder;
    border-bottom: 1px solid #00CED1;

    
}
#text {
    float: right;
    line-height: 35px;
    outline-width:medium;
    color: #008080;
    font-size: 30px;
    font-weight: bold;
    border-bottom: 2px solid #00CED1;

    
}
#Btext {
    float: right;
    line-height: 35px;
    outline-width:medium;
    color: #008080;
    font-size: 15px;
    font-weight: bold;
    border-bottom: 2px solid #00CED1;
    
}

#ctext {
    float: center;
    line-height: 35px;
    outline-width:medium;
    color: #008080;
    font-size: 30px;
    font-weight: bold;
    border-bottom: 2px solid #00CED1;
    
}
nav { width: 100%; text-align: center;  }
nav a { 
    display: block; 
    padding: 15px 0;
    
    color: #F0EADC;
}
nav a:hover { background: blue; color: blue; }
nav li:last-child a { border-bottom: none; }
.prt a:hover 
{
    background-color: black;
    color: yellow;
    height: 80px;
    width: 150px;

}


/*-----------------------------------------*/
.prt{
    height: 80px;
    width: 150px;

}

.button {
    background-color: #f4042c; /* Green */
    border: none;
    color: white;
    padding: 2px 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 8px;
}
.navbar-brand {
    float: left;
    font-size: 58px;
    height: 50px;
    line-height: 40px;
    padding: 5px;

  
}

.navbar{
    background-color: #000 ! important;
}

.navbar-nav > li {
  padding-left:30px;
  padding-right:30px;
  color: #FFF;
  font-size: 1.2em !important;

  
}

.proDuct img{
    height: 300px;
}



#menuToggle { display: none; }
#menuToggle:checked ~ .menu { position: none; left: 0; }
</style>


  

</head>
<form method="post" >
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <nav class="navbar navbar-expand-sm bg-dark navbar-dark  ">
         <a class="navbar-left" href="#"  >
            <img src="bird.jpg" alt="logo" style="width: 110px; height:70px;left:80px;">
         </a>
         <ul class="navbar-nav">
            &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

             <li class="nav-item active">
                  <a class="nav-link" href="profile.php"><span class="glyphicon glyphicon-home"></span> Home</a>
             </li>
         </ul>
    </div> 
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="cart_msg">
                
            </div>
            <div class="col-md-2"></div>

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cart Check Out</div>
                    <div class="panel-body">
                        <div class="row">
                              <div class="col-md-2"><b>Action</b></div>  
                              <div class="col-md-2"><b>Product Image</b></div>  
                              <div class="col-md-2"><b>Product Name</b></div>  
                              <div class="col-md-2"><b>Quantity</b></div>  
                              <div class="col-md-2"><b>Product Price</b></div>  
                              <div class="col-md-2"><b>Price in BDT</b></div>  
                        </div> 
                        <div id="cart_checkout"></div> 

                         <!--<div class="row">
                              <div class="col-md-2">
                                  <div class="btn-group">
                                    <a href="#" class="btn btn-danger btn-lg" ><span class="glyphicon glyphicon-trash"></span></a>
                                    <a href="#" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-ok"></span></a>

                                  </div>

                              </div>  
                              <div class="col-md-2"><img src='image/images.jpg'></div>  
                              <div class="col-md-2">Product Name</div>  
                              <div class="col-md-2"><input type='text' class='form-control' value='1' ></div>  
                              <div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>  
                              <div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>  
                        </div>-->

                        <!--div class="row">
                           <div class="col-md-8"></div>
                           <div class="col-md-4">
                                <b>Total BDT. 50000</b>  
                            </div>
                        </div>-->                               



                    </div>
                    <div class="panel-footer"></div>
                </div>   
                <input type="image" src="ckot.jpg" name="submit" value="check out" width="210px" height="100px" formaction="order.php">

            </div>
            <div class="col-md-2"></div>

        </div>
     </div>   






</body>
</html>