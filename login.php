<?php
session_start();
    $msg = "";
    if(isset($_POST['btnlogin']))
    {
        $username = $_POST['txtusername'];
        $password = $_POST['txtpassword'];
        $link = mysqli_connect("localhost","root","","eshopdb");
        $qry = "select * from usermaster where user_email='$username' and user_pwd='$password'";
        $resultset = mysqli_query($link, $qry);
        if(mysqli_num_rows($resultset)>0)
        {
            $r = mysqli_fetch_array($resultset);
            $_SESSION['uid']=$r[0];
           // echo $_SESSION['uid'];
            header("location:home.php");
        }
        else
            $msg = "<font color='red'>Invalid Username and Password !!!!</font>";
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
            <div class="col-sm-4" style="height:500px"></div>
            <div class="col-sm-4" style="height:530px">
                <div style="box-shadow: 0px 0px 10px grey; padding: 25px 25px 25px 25px; margin-top: 55px">
                    <form method="post">
                        <h3 class="text-danger" style="margin-top:1px">User Login</h3>
                        <hr width="50%" align="left">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="txtusername" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txtpassword" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <input type="submit" name="btnlogin" value="Login" class="btn btn-danger btn-block"/>
                    </form>
                    <?php echo $msg; ?>
                </div>
            </div>
            <div class="col-sm-4" style="height:500px"></div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>