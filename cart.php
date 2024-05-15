<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>project</title>
        <meta name="viewport"  content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
        #add{
                padding:17px;padding-left:55px;width:300px;border:1px solid #f5f5f5;
                font-size:13px;color:gray;
                background-repeat:no-repeat;
                background-position:left center;outline:0;
        }
        </style>
		
    </head>
    <body style="background-color:#38b6ff">
	<div class="container-fluid">
	<?php include './header.php';?>	
	<div class="row">
            <div class="col-sm-12" style="height:500px">
                 <?php
                 if(isset($_COOKIE['cart'])){
                    $link = mysqli_connect("localhost","root","","eshopdb");
                    $qry = "select * from productmaster where pid in ($_COOKIE[cart])";
                    $result = mysqli_query($link,$qry);
                    echo "<table class='table table-hovered'>";
                    $total = 0;
                    while($r = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>$r[0]</td><td>$r[1]</td><td>$r[2]</td>";
                        $total += $r[2];
                        echo "<td><img src='$r[4]' width='50px' height='50px'></td>";
                        echo "<td><a class='btn btn-danger' href=''>Delete</a></td>";
                        echo "</tr>";
                    }
                    $_SESSION['amount']=$total;
                    echo "<tr><td></td><td></td><td><b>Total Amount = $total</b></td><td></td><td></td></tr>";
                    echo "</table>";
                    echo "<br><br>";
                    echo "<div style='text-align:right; padding-right: 150px'>";
                    echo "<a class='btn btn-warning' href='shipping.php'>Place Order</a>";
                    echo "</div>";
                    mysqli_close($link);
                 }
                 else
                 {
                     echo "<h2>No Product Added Yet ....</h2>";
                 }
                 ?>
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>