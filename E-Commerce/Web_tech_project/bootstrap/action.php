<?php
include "db.php";




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
			echo "

			 <div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_name</div>
                         <div class='panel-body'>
                            <img src='image/$pro_image' style='width: 200px;'/>
                         </div>
                         <div class=,panel-heading'>$ .$pro_sellprice.00
                             <button class='$pro_id' style='float:right;' class ='btn btn-danger btn-xs'>AddToCart</button>
                         </div>
                         
                </div>        
               

			";
			
		}





	}







}


?>