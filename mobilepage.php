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
            <div class="col-sm-12">
                  <?php 
                    $link = mysqli_connect("localhost","root","","eshopdb");
                    $qry = "select * from productmaster where ptype='mobile'";
                    $result = mysqli_query($link, $qry);
                    if(mysqli_num_rows($result)>0)
                    {
                        $i=0;
                        while($r= mysqli_fetch_array($result))
                        {
                            if($i==0)
                                echo "<div class='row'>";
                            echo "<div class='col-sm-3'>";
                            echo "<div class='row'>";
                            echo "<div class='col-sm-4'>";
                echo "<img src='$r[4]' style='border-radius:20px' width='150px' height='230px' class='img-responsive'/>";
                            echo "</div>";
                            echo "<div class='col-sm-8'>";
                            echo "<div class='row'><div class='col-sm-12'><br><br><br></div></div>";
                            echo "<div class='row'><div class='col-sm-12'>";
                            echo "Name : $r[1]<br>";
                            echo "Price : $r[2]<br>";
                            echo "<a href='mobile_desc.php?pid=$r[0]'>More Details</a>";
                            echo "</div></div>";
                            echo "<div class='row'><div class='col-sm-12'></div></div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            $i++;
                            if($i==4)
                                echo "</div>";
                        }
                    }
                    else
                        echo "No Product Avaiable !!!!";
                    mysqli_close($link);
                  ?>
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>