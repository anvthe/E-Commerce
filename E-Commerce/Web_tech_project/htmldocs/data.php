
<script src="main.js"></script>

<?php
$con=mysqli_connect("localhost","root","","webtech");
$str="SELECT product_name,product_image,sell_price,product_id from product WHERE product_name LIKE '".$_REQUEST["q"]."%';";

error_reporting(0);
$res=mysqli_query($con,$str);
$list="";
// for($i=0;$i<mysqli_num_rows($res);$i++)
	
// 	{
// 		//$row[$i]=mysqli_fetch_array($res);


		$rows = array();
        while($row = mysqli_fetch_array($res))
            $rows[] = $row;
        foreach($rows as $row)
        {



				$list.="<br/>".$row["product_name"]."<br/>".$row["product_image"]."<br/>".$row["sell_price"];
				$pro_name=$row["product_name"];
				$pro_image=$row["product_image"];
				$pro_sellprice=$row["sell_price"];
				$pro_id=$row["product_id"];



				
		//	}


				echo "

					 <div class='col-md-4'>
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


		if($list==="")
					{
						echo "UPPS! No Products ! Search again with other Keywords...";
					}

?>
