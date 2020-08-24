<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="main.js"></script>







<?php
    session_start();
   $con=mysqli_connect("localhost","root","","webtech");

$time=date("H:i:s:a");
$date=date("d:m:Y");
$uid=$_SESSION['customer_id'];
$status='undelivared';
$price=$_SESSION['totl'];
$payment_method='cash on delivary';
$address=$_POST['address'];
$phone=$_SESSION['phone'];

/*if(isset($_POST['submit']))
{
    // header("Location: confirm.php");
     
    echo '<script type="text/javascript">'; 
    echo 'alert("submitted successfully!");'; 
    echo 'window.location.href = "profile.php";';
    echo '</script>';
}*/



if(isset($_POST['submit'])){

    if($price>0)
{        

    $sql2 = "INSERT INTO order_tbl(order_id,user_id,date_o,status,time_o,address,phone,price)"."VALUES (NULL,'$uid','$date','$status','$time','$address','$phone','$price')";
    $sql3 = "INSERT INTO bill(bill_id,price,payment_method)"."VALUES(NULL,'$price','$payment_method')";           
       
     $sql ="SELECT product_id,quantity FROM cart where customer_id='$uid'";
        
  //  $sql10 = "INSERT INTO product_order_tbl(customer_id,product_id)"."VALUES(NULL,'$price','$payment_method')";           

        $result= mysqli_query($con,$sql);
        //$cart = mysqli_fetch_array($result);


        $rows = array();
        while($cart = mysqli_fetch_array($result))
            $rows[] = $cart;
        foreach($rows as $cart){
       
         $pid= $cart['product_id'];
         $quantity=$cart['quantity'];

         
        $sql5="SELECT status,product_name FROM product where product_id='$pid'";
        $result2= mysqli_query($con,$sql5);
        $sta = mysqli_fetch_array($result2);
        $pname=$sta['product_name'];
        $star=$sta['status'];
        $u_quantity=$star-$quantity;

        $sql6="UPDATE product set status='$u_quantity' where product_id='$pid'";
        mysqli_query($con,$sql6);
         $sql7="INSERT INTO product_order_tbl(customer_id,product_id)"."VALUES('$uid','$pid')";
        mysqli_query($con,$sql7); 

       //  $sql7="INSERT INTO product_order_tbl(customer_id,product_id)"."VALUES('$uid','$pid')";
            $qur="INSERT INTO pic_chart(product_name,quantity,id)"."VALUES('$pname','$quantity',NULL)";
            mysqli_query($con,$qur);



        }
        

        $sql4="DELETE FROM cart where customer_id='$uid'";
          mysqli_query($con,$sql4);



  


       if(mysqli_query($con, $sql2)==true && mysqli_query($con,$sql3)==true )
       {
       
            echo '<script type="text/javascript">'; 
            echo 'alert("Order Successfully Confirmed!");'; 
            echo 'window.location.href = "profile.php";';
            echo '</script>';
       
       }
                
       
}

}

?>