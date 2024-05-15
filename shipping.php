<?php
    session_start();
    if(!isset($_SESSION['uid']))
    {
        header("location:login.php");
    }
    $msg = "";
    if(isset($_POST['btnorder']))
    {
        $name=$_POST['txtname'];
        $add = $_POST['txtaddress'];
        $address = $name."<br>".$add;
        $payment=$_POST['payment'];
        $amount=$_SESSION['amount'];
        $pid=$_COOKIE['cart'];
        $date=date("Y-m-d");
        $status = "Undeliver";
        $uid = $_SESSION['uid'];
        $qry = "insert into orders(user_id,pid,order_date,amount,address,payment,status) values($uid,'$pid','$date',$amount,'$address','$payment','$status')";
        $link = mysqli_connect("localhost","root","","eshopdb");
        mysqli_query($link, $qry);
        if(mysqli_affected_rows($link)>0)
        {
            $msg = "<font color='green'>Order Placed !!!!!!</font>";
            setcookie("cart","");
        }
        else
            $msg = "<font color='red'>Error in placing the order. Try Again</font>";
        mysqli_close($link);
        
                
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
            <div class="col-sm-4">
                             
            </div>
            <div class="col-sm-4">
                <form method="post">
                    <fieldset >
                        <legend style="text-align: center;">
                            <font color="#ed922b" face="Arial" style="text-align: center"><b>Shipping Address</b></font>
                        </legend>
                        <div class=" form-group">
                            <label>Name</label>
                            <input type="text" name="txtname" value="" placeholder="Enter Name" class="form-control" />

                        </div>
                        <div class=" form-group">
                            <label>Address</label>
                            <textarea name="txtaddress" class="form-control" ></textarea>

                        </div>
                        <div class=" form-group">
                            <label>Payment Mode</label><br>
                            <input type="radio" name="payment" value="Cash On Deivery" />
                            <label>Cash On Deivery</label>
                            <input type="radio" name="payment" value="NetBanking"  />
                            <label>Netbanking</label>
                            <input type="radio" name="payment" value="Credit Card"  />
                            <label>Credit Card</label>
                            <input type="radio" name="payment" value="Dedit Card" />
                            <label>Debit Card</label>
                        </div>
                        <input type="submit" name="btnorder" value="Order Now" class="btn btn-danger btn-block"/>
                        <br><br>
                        <?php echo $msg; ?>
                        </fieldset>
                </form>              
            </div>
            <div class="col-sm-4">
                             
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>