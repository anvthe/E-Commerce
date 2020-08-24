
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Something.com">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap3.min.css">

<link rel="stylesheet" type="text/css" href="../bootstrap/css/glyphicon.css">


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
nav a:hover { background: #0c09e5; color: #FFF; }
nav li:last-child a { border-bottom: none; }

/*-----------------------------------------*/
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
    height: 82%;
    position: absolute;
    background: #555;
    left: -240px;
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
  padding-left:20px;
  padding-right:20px;
  color: #FFF;
  font-size: 1.2em !important;

  
}


#menuToggle { display: none; }
#menuToggle:checked ~ .menu { position: none; left: 0; }
</style>


<script  >
  
function getData(str)
{

    if(str.length==0){
        
        document.getElementById("sug").innerHTML="empty";
    }
    else{
        
        var xHttp=new XMLHttpRequest();
        xHttp.onreadystatechange=function()
        {
            if(this.readyState==4 && this.status==200)
            {
                //document.getElementById("sug").innerHTML=this.responseText;
                window.location.replace("search.php?data="+this.responseText);
                
            }
            
        };
        
        xHttp.open("GET","data.php?q="+str,true);
        xHttp.send();
    }
    
}

</script>

</head>
<form method="post" >
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark  ">
         <a class="navbar-left" href="#">
            <img src="bird.jpg" alt="logo" style="width: 110px; height:70px;left:80px; ;">
         </a>
  <ul class="navbar-nav">
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <li class="nav-item active">
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span> Home</a>
    </li>
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
   
    <li class="nav-item" >
        

          <input type="text" class="form-control" id="search"  style="width: 400px; height:40px; margin: 16px auto; left:50px;">
        

    </li>
    <li class="nav-item">
      <input type="submit" class="btn btn-primary" id="search_btn" style= "margin: 16px auto;height:40px;">
    </li>
 
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      <ul class="navbar-nav">

     <li class="nav-item active">
      <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
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
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span>Signin</a>
    </li>
     <li class="nav-item active" style= "margin: 3px auto;">
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>Signup</a>
    </li>
</ul>

</nav>
   
<input type="checkbox" id="menuToggle">
<label for="menuToggle" class="menu-icon">&#9776; </label>

<header>
        <div id="brand">Eagle Eyes &nbsp; &nbsp;&nbsp;&nbsp;</div>
        &nbsp;<input type="text" name="searchbox" id="stext" onkeyup="getData(this.value)" >&nbsp;
       
        <input type="submit" value="Log In" id ="Btext" class="button" formaction="../pages/login.html">
        <h1 id="text" class="button" >&nbsp;|| </h1>
        <input type="submit" value="Sign Up" id ="Btext" class="button" formaction="../pages/reg.php">
        <input type="submit" value="Cart" id ="stext" class="button" formaction="cart.html">
    
    
   
</header>

<nav class="menu">
    <ul>
        <li><a href="Computer.html">Mobile</a></li>
        <li><a href="Clothes.html">Clothes</a></li>
        <li><a href="Food.html">Food</a></li>
        <li><a href="KIdsiteam.html">Kid's Item</a></li>
        <li><a href="Electronics.html">Electronics</a></li>
        <li><a href="giftiteam.html">Gift Item</a></li>
    </ul>
</nav>
        <label id ="stext">Category</label>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 well">

                    <div id="get_product">
                </div>
                    
                </div>
            </div>
        </div>
            <div class="panel-footer">&copy; 2018</div>
        </div>
     </div>       

        
    

</body>
</form>
</html>