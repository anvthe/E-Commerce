<?php
session_start();

if(isset($_SESSION['usrnm']))
{
    header("location:profile.php");
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    height: 100px; 
    margin: auto;
    border-bottom: 1px solid #EEE;
    background-color: black;
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

fieldset
{
    border: 1px solid #ddd;
    padding: 0 1.4em 1.4em 1.4em;
    margin: 0 0 1.5em 0;
    border-radius: 8px;
    margin: 0 5px;
    height: 100%;
}




nav a:hover { background: blue; color: blue;  }
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



.menu {
    width: 200px;
    position: absolute;
    background: #000;
    height: 500%;
    left: -240px;
    margin-top: 40px;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    background-color: black;
    
    
}
.navbar{
    background-color: #000 ! important;

}
.menu-icon {
    padding: 10px 20px;
    background: yellow;
    color: blue;
    cursor: pointer;
    float: left;
    margin-top: -20px;
    border-radius: 5px;
}
.navbar-nav > li {
  padding-left:30px;
  padding-right:30px;
  color: #000;
  font-size: 1.2em !important;

  
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 60px;
    height: 90px;
    background-color: black;

} 

.proDuct img{
	height: 300px;
}
.active a{
    
}


#menuToggle { display: none; }
#menuToggle:checked ~ .menu { position: none; left: 0; }
</style>


<script  >
  
function getData(str)
{

    if(str.length==0){
        
        document.getElementById("sug").innerHTML="";
    }
    else{
        
        var xHttp=new XMLHttpRequest();
        xHttp.onreadystatechange=function()
        {
            if(this.readyState==4 && this.status==200)
            {
                document.getElementById("sug").innerHTML=this.responseText;
                //window.location.replace("search.php?data="+this.responseText);
                
            }
            
        };
        
        xHttp.open("GET","data.php?q="+str,true);
        xHttp.send();
    }
    
}

</script>


<script  >
  
function getData1(str)
{

    if(str.length==0){
        
        document.getElementById("notice").innerHTML="";
    }
    else{
        
        var xHttp=new XMLHttpRequest();
        xHttp.onreadystatechange=function()
        {
            if(this.readyState==4 && this.status==200)
            {
                document.getElementById("notice").innerHTML=this.responseText;
                //window.location.replace("search.php?data="+this.responseText);
                
            }
            
        };
        
        xHttp.open("GET","notification.php?q="+str,true);
        xHttp.send();
    }
    
}

</script>


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
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span> Home</a>
    </li>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
   
    <li class="nav-item" >
        

          <input type="text" name="searchbox" class="form-control" id="search" onkeyup="getData(this.value)" style="width: 600px; height:40px; margin: 16px auto; left:50px;" placeholder="SEARCH">
        

    </li>
    
 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      <ul class="navbar-nav">

     <li class="nav-item active">
      <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a>
         <div class="dropdown-menu  dropdown-menu-right" style="width: 500px;height: 200px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">SL.no</div>
                        <div class="col-md-3">Image</div>
                        <div class="col-md-3">Name</div>
                        <div class="col-md-3">Price</div>
                    </div>
                </div>
                <div class="panel-body"></div>
                <div class="panel-fotter"></div>

            </div>
         </div>

    </li>
     <li class="nav-item active" style= "margin: 3px auto;">
      <a class="nav-link" href="../pages/login.html"><span class="glyphicon glyphicon-log-in"></span>Sign In</a>
    </li>
     <li class="nav-item active" style= "margin: 3px auto;">
      <a class="nav-link" href="../pages/reg.php"><span class="glyphicon glyphicon-user"></span>Signup</a>
    </li>
</ul>

</nav>
   
<input type="checkbox" id="menuToggle">
<label for="menuToggle" class="menu-icon">&#9776; </label>
<!-- 
<header>
        <div id="brand">Eagle Eyes &nbsp; &nbsp;&nbsp;&nbsp;</div>
        &nbsp;<input type="text" name="searchbox" id="stext" onkeyup="getData(this.value)" >&nbsp;
       
        <input type="submit" value="Log In" id ="Btext" class="button" formaction="../pages/login.html">
        <h1 id="text" class="button" >&nbsp;|| </h1>
        <input type="submit" value="Sign Up" id ="Btext" class="button" formaction="../pages/reg.php">
        <input type="submit" value="Cart" id ="stext" class="button" formaction="cart.html">
    
    
   
</header>
 -->
<nav class="menu">
    <ul>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-1"></div>
    			<div class="col-md-2">
    				<div id="get_category">
    				</div>
    				<!--div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Categories</h4></a></li>
				        <li><a href="#">Categories</a></li>
				        <li><a href="#">Categories</a></li>
				        <li><a href="#">Categories</a></li>
				        <li><a href="#">Categories</a></li>
				        <li><a href="#">Categories</a></li>
				        <li><a href="#">Categories</a></li>
    				</div>-->
				
    </ul>
</nav>
        <label id ="stext">Category</label>
			</div>
		</div>
	</div>

   



      <div class="col-md-10 col-md-offset-2  well">
        <!--h6>Search Option:</h6>-->
          <div id="sug" >
                </div>
      </div>
     <div class="col-md-10 col-md-offset-2 " >
        <div class="panel panel-info">
            <div class="panel-heading">Products</div>
             
            <div class="panel-body">

            	<div class="col-md-10">
            		
            	</div>
                <div id="get_product" >
                </div>
                

                <!--div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">Samsung</div>
                         <div class="panel-body">
                            <img src="bird.jpg" style="width: 200px;"/>
                         </div>
                         <div class="panel-heading">$ .500.00
                             <button style="float:right;" class ="btn btn-danger btn-xs">AddToCart</button>
                         </div>
                         
                </div>        
                </div>-->
            </div>

            <div class="panel-footer">&copy; 2018</div>
        </div>
     </div>   

<div class="col-md-10 col-md-offset-2 " >
        <div class="panel panel-info">
            <div class="panel-heading"></div>
             <header>
            <div class="panel-body" style="max-height: 10;">
                
                <div class="col-md-12">
                    <a href="#"><span class="glyphicon glyphicon-pencil"></span> &nbsp Suggest products</a>
                    <br/>
                    <a href="https://www.facebook.com/"><i class="  fa fa-facebook-official"></i> &nbsp Find us on Facebook</a>
                    <br/>
                    <a href="https://www.instagram.com/"><i class="  fa fa-instagram"></i> &nbsp Find us on Instagram</a>
                    <br/>
                    <a href="#">Suggest products</a>

                    
                </div>
                
        </div>
        </header>

           
     </div>   
    

</body>
</form>
</html>