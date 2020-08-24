<style type="text/css">
	
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}


</style>



<?php
    
    session_start();


?>



<?php
include "db.php";

if(isset ($_POST ["category"])){

$category_query="SELECT * FROM category";
 $run_query=mysqli_query($con,$category_query);
 echo"
 			<div class='nav nav-pills nav-stacked '>
						<li class='active'><a href='#'><h4>Categories</h4></a></li>

       ";



 if(mysqli_num_rows($run_query) > 0)
	{
			while($row=mysqli_fetch_array ($run_query)){

				$cid=$row["category_id"];
				$cat_name=$row["category_name"];
				echo "
				<div class='prt'>
				<li height='100px'><a href='#'class='category' cid='$cid'>$cat_name</a></li>
				</div>

				";


			}

			echo"</div>";

	}


}



if(isset ($_POST ["getProduct"])){
 
   $product_query = "SELECT * FROM product ORDER BY RAND() LIMIT 0,9";
   $run_query=mysqli_query($con,$product_query);
   if(mysqli_num_rows($run_query) > 0)
	{
	
			while($row=mysqli_fetch_array ($run_query)){

			$pro_id=$row["product_id"];
			$pro_name=$row["product_name"];
			$pro_image=$row["product_image"];
			$pro_buyprice=$row["buy_price"];
			$pro_sellprice=$row["sell_price"];
			$pro_cat=$row["category_id"];
			$pro_brand=$row["brand_id"];

			if($pro_brand=$row["status"]!=0){
					echo "

			 <div class='col-md-3'>
                    <div class='panel panel-info proDuct'>
                        <div class='panel-heading'>$pro_name</div>
                         <div class='panel-body'>
                            <img src='image/$pro_image' style='width: 170px; height: 260px;' class='img img-responsive'/>
                         </div>
                         <div class='panel-heading'>$ .$pro_sellprice.00
                             <button pid='$pro_id' style='float:right;' id='product' class ='btn btn-primary btn-xs '>AddToCart</button>
                         </div>
                         </div>
                         
                </div>        
               

			";

			}


			
			
		}

	}

}
if(isset($_POST["get_selected_Category"])){



	$cid=$_POST["cat_id"];
	$sql="SELECT * FROM product WHERE category_id = '$cid' ";
    $run_query=mysqli_query($con,$sql);


    while($row=mysqli_fetch_array ($run_query)){

			$pro_id=$row["product_id"];
			$pro_name=$row["product_name"];
			$pro_image=$row["product_image"];
			$pro_buyprice=$row["buy_price"];
			$pro_sellprice=$row["sell_price"];
			$pro_cat=$row["category_id"];
			$pro_brand=$row["brand_id"];

			if($pro_brand=$row["status"]!=0){
					echo "

			 <div class='col-md-4'>
                    <div class='panel panel-info proDuct'>
                        <div class='panel-heading'>$pro_name</div>
                         <div class='panel-body'>
                            <img src='image/$pro_image' style='width: 170px; height: 260px;' class='img img-responsive'/>
                         </div>
                         <div class='panel-heading'>$ .$pro_sellprice.00
                             <button pid='$pro_id' style='float:right;' id='product' class ='btn btn-success btn-xs '>AddToCart</button>
                         </div>
                         </div>
                         
                </div>        
               

			";

			}
		}



}

if (isset($_POST["addToProduct"]))
{

	$p_id=$_POST["proId"];
	$user_id=$_SESSION["customer_id"];
	$sql="SELECT * FROM cart WHERE product_id='$p_id' AND customer_id='$user_id' ";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);

	if($count>0)
	{
		
		  echo"
		  	<div class='alert alert-warning '>
		  <b>Product is already added to the cart !</b>
		</div>  
		  ";

	}
	else
	{
	  $sql="SELECT * FROM product WHERE product_id='$p_id' ";
	  $run_query=mysqli_query($con,$sql);
	  $row=mysqli_fetch_array($run_query);

	  $id=$row["product_id"];
	  $pro_name=$row["product_name"];
	  $pro_image=$row["product_image"];
	  $pro_sellprice=$row["sell_price"];

	  $sql="INSERT INTO cart (cart_id, quantity, price, total_amount, product_id, product_name, customer_id, product_image)"."VALUES (NULL, '1', ' $pro_sellprice', ' $pro_sellprice', '$p_id', ' $pro_name', '$user_id', '$pro_image')";
	  if(mysqli_query($con,$sql)){
	  	echo "
	  			<div class='alert alert-primary '>
	  				<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
	  				<b>Product is Added!</b>
	  			</div>	
               
               ";
	  }

	}


}

   
 if (isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"]) ) 
 {
 	$uid=$_SESSION["customer_id"];

 	$sql= "SELECT * FROM cart WHERE customer_id='$uid'";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	if($count>0)
	{
		$no=1;
		$total_amt=0;
		$_SESSION["totl"]=$total_amt;
		 while($row=mysqli_fetch_array ($run_query))
		 {


			  $id=$row["cart_id"];
			  $pro_id=$row["product_id"];
			  $pro_name=$row["product_name"];
			  $pro_image=$row["product_image"];
			  $qty=$row["quantity"];
			  $pro_price=$row["price"];
			  $total=$row["total_amount"];
			  $price_array=array($total);
			  $total_sum = array_sum($price_array);
			  $_SESSION["totl"]=$_SESSION["totl"] +$total_sum ;

			  if(isset($_POST["get_cart_product"]))
			  {
			  	echo"


			  		<div class='row'>  
                        <div class='col-md-3'>$id</div>
                        <div class='col-md-3'><img src='image/$pro_image' width='60px' height='50px'></div>
                        <div class='col-md-3'>$pro_name</div>
                        <div class='col-md-3'>BDT.$pro_price</div>
                    </div>


					";
					$no=$no + 1;




			  }

			  else 
			  {
			  	echo"
			  			<div class='row'>
                              <div class='col-md-2'>
                                  <div class='btn-group'>
                                    <a href='#' remove_id='$pro_id'  class='btn btn-danger btn-lg remove' ><span class='glyphicon glyphicon-trash'></span></a>
                                    <a href='#' update_id='$pro_id' class='btn btn-primary btn-lg update'><span class='glyphicon glyphicon-ok'></span></a>

                                  </div>

                              </div>  
                              <div class='col-md-2'><img src='image/$pro_image' width='50 px' height ='50px'></div>  
                              <div class='col-md-2'>$pro_name</div>  
                              <div class='col-md-2'><input type='number' min='0' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>  
                              <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled></div>  
                              <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>  
                        </div>

			  	   ";


			  }

			  

		 }


 		if(isset($_POST["cart_checkout"]))
 		{
 			$a=$_SESSION['totl'];
 			$sql= "SELECT status FROM special_tbl WHERE user_id='$uid'";
 			$res=mysqli_query($con,$sql);
 			$row=mysqli_fetch_array($res);
 			if(($row['status'])=="premium")
 			
             {   
	             	if($a>'1000' and $a<'10000')
	             {		
	             	$p=$a-'100';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Premium User You Saved 100 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>   
	                    </div>
	                </div>
	                ";
	             }  


	             	if($a>'10000')
	             {		
	             	$p=$a-'400';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Premium User You Saved 400 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>  
	                    </div>
	                </div>
	                ";
	             } 

	             	if($a<'1000' )
	             {		
	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $a BDT  </b>  
	                    </div>
	                </div>
	                ";
	             }   



            }



            elseif(($row['status'])=="star")



             {   
	             	if($a>'1000' and $a<'10000')
	             {		
	             	$p=$a-'70';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Star User You Saved 70 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>   
	                    </div>
	                </div>
	                ";
	             }  


	             	if($a>'10000')
	             {		
	             	$p=$a-'300';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Star User You Saved 300 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>  
	                    </div>
	                </div>
	                ";
	             } 

	             	if($a<'1000' )
	             {		
	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $a BDT  </b>  
	                    </div>
	                </div>
	                ";
	             }   



            }


            elseif(($row['status'])=="regular")



             {   
	             	if($a>'1000' and $a<'10000')
	             {		
	             	$p=$a-'50';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Regular User You Saved 50 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>   
	                    </div>
	                </div>
	                ";
	             }  


	             	if($a>'10000')
	             {		
	             	$p=$a-'200';
	             	$_SESSION['totl']=$p;

	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $p BDT <br/>[Dear Regular User You Saved 200 taka!!!] 
	                        <br/>
	                        Happy Shopping!
	                        </b>  
	                    </div>
	                </div>
	                ";
	             } 

	             	if($a<'1000' )
	             {		
	             	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $a BDT  </b>  
	                    </div>
	                </div>
	                ";
	             }   



            }       
            else{
        	echo"
	                <div class='row'>
	                   <div class='col-md-8'></div>
	                   <div class='col-md-4'>
	                        <b>TOTAL=  $a BDT  </b>  
	                    </div>
	                </div>
	                ";

        }  


        

        }  



	}






 }

 
if(isset($_POST["removeFromCart"]))
{

	$pid=$_POST["removeId"];
	$uid=$_SESSION["customer_id"];
	$sql="DELETE FROM cart WHERE customer_id='$uid' AND product_id='$pid'";
	$run_query=mysqli_query($con,$sql);

	if($run_query)
	{

		echo "

			<div class='alert alert-primary '>
	  				<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
	  				<b>Product is Removed from cart! please continue shopping...........!</b>
	  			</div>

		";

	}






}

if(isset($_POST["updateProduct"]))

{
        $uid = $_SESSION["customer_id"];
        $pid=$_POST["updateId"];
        $qty=$_POST["qty"];
        $price=$_POST["price"];
        $total=$_POST["total"];
        $sql2="SELECT * FROM product WHERE product_id='$pid'";
        $result=mysqli_query($con,$sql2);
        $row=mysqli_fetch_array($result);
        if($qty<='0'){
        	echo "

			<div class='alert alert-success '>
	  				<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
	  				<b> Can not !Sorry Please enter a valid length......</b>
	  			</div>




        	";

        }

        elseif($row['status']<$qty){
        	echo "

			<div class='alert alert-success '>
	  				<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
	  				<b> Can not !Sorry Product Not Enough.....</b>
	  			</div>




        	";


        }
        else{
        $sql="UPDATE cart SET quantity='$qty',price='$price',total_amount='$total'
              WHERE customer_id='$uid' AND product_id='$pid'";
        $run_query=mysqli_query($con,$sql);
        
        if($run_query)
        {
        	echo "

			<div class='alert alert-success '>
	  				<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
	  				<b>Quantity is Updated ! please continue shopping...........!</b>
	  			</div>




        	";


        }      

			}


}



?>
