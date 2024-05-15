<?php
    session_start();
    if(!isset($_SESSION['uid']))
    {
        header("location:login.php");
    }
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
                    $link = mysqli_connect("localhost","root","","eshopdb");
                    $qry = "select * from orders where user_id=$_SESSION[uid]";
                    $result = mysqli_query($link, $qry);
                    if(mysqli_num_rows($result)>0)
                    {
                        echo "<table class='table table-hovered'>";
                        echo "<tr>";
                        echo "<th>Order Id</th>";
                        echo "<th>Product's</th>";
                        echo "<th>Order Date</th>";
                        echo "<th>Amount</th>";
                        echo "<th>Address</th>";
                        echo "<th>Payment Mode</th>";
                        echo "<th>Status</th>";
                        echo "</tr>";
                        while($r = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>$r[0]</td>";
                            echo "<td>$r[2]</td>";
                            echo "<td>$r[3]</td>";
                            echo "<td>$r[4]</td>";
                            echo "<td>$r[5]</td>";
                            echo "<td>$r[6]</td>";
                            echo "<td>$r[7]</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else
                        echo "<h3>No Order Placed Yet !!!!!</h3>";
                    mysqli_close($link);
               ?>
                            
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>
