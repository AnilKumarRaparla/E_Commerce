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
            <div class="col-sm-4" style="height:500px"></div>
            <div class="col-sm-4" style="height:530px">
                <div style="box-shadow: 0px 0px 10px grey; padding: 25px 25px 25px 25px; margin-top: 55px">
                    <form method="post">
                        <h3 class="text-danger" style="margin-top:1px">Change Password</h3>
                        <hr width="50%" align="left">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="txtnpwd" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="txtcpwd" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <input type="submit" name="btnchange" value="Change Password" class="btn btn-danger btn-block"/>
                    </form>
                </div>
            </div>
            <div class="col-sm-4" style="height:500px"></div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>