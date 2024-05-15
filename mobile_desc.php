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
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
<?php
    $link = mysqli_connect("localhost","root","","eshopdb");
    $id = $_GET['pid'];
    $qry = "select * from productmaster where pid=$id";
    $result = mysqli_query($link, $qry);
    $r = mysqli_fetch_array($result);
    echo "<div class='row'>";
    echo "<div class='col-sm-4'><img src='$r[4]' class='img-responsive'></div>";
    echo "<div class='col-sm-8' style='margin-top: 80px'>";
    echo "<div class='row'>";
    echo "<div class='col-sm-12'>Product Name : $r[1]</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-sm-12'>Product Id : $r[0]</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-sm-12'>Product Price : $r[2]</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-sm-12'><br><br><br><a href='addtocart.php?pid=$r[0] & page=mobile' class='btn btn-danger'>Add To cart</a></div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    $qry1 = "select * from mobilespecification where pid = $id";
    $res = mysqli_query($link, $qry1);
    if(mysqli_num_rows($res)> 0)
    {
    $row = mysqli_fetch_array($res);
    $h="No";
    if($row[5]==1)
        $h="Yes";
    echo "<div class='row><div class='col-sm-12'>";
    echo "<table class='table table-hovered'>";
    echo "<caption><h3>Specification</h3></caption>";
    echo "<tr><th>Model No</th><td>$row[0]</td></tr>";
    echo "<tr><th>Operating System</th><td>$row[1]</td></tr>";
    echo "<tr><th>Processor</th><td>$row[2]</td></tr>";
    echo "<tr><th>Color</th><td>$row[3]</td></tr>";
    echo "<tr><th>SIM Type</th><td>$row[4]</td></tr>";
    echo "<tr><th>Hybrid</th><td>$h</td></tr>";
    echo "<tr><th>Display Size</th><td>$row[6]</td></tr>";
    echo "<tr><th>Resolution</th><td>$row[7]</td></tr>";
    echo "<tr><th>Internal Storage</th><td>$row[8]</td></tr>";
    echo "<tr><th>RAM</th><td>$row[9]</td></tr>";
    echo "<tr><th>Primary Camera</th><td>$row[10]</td></tr>";
    echo "<tr><th>Secondary Camera</th><td>$row[11]</td></tr>";
    echo "<tr><th>Network Type</th><td>$row[12]</td></tr>";
    echo "<tr><th>Battery Capacity</th><td>$row[13]</td></tr>";
    echo "<tr><th>Width</th><td>$row[14]</td></tr>";
    echo "<tr><th>Height</th><td>$row[15]</td></tr>";
    echo "<tr><th>Warranty Summery</th><td>$row[16]</td></tr>";
    echo "</table>";
    echo "</div></div>";
    }
?>
            </div>
            <div class="col-sm-4">
                
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>