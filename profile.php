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
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div style="box-shadow: 0px 0px 10px grey; padding: 25px 25px 25px 25px; margin-top: 5px">
                    <form method="post">
                        <h3 class="text-danger" style="margin-top:1px">Update Profile</h3>
                        <hr width="50%" align="left">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="txtname" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Email Id</label>
                            <input type="email" name="txtemail" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label style="margin-right: 30px">Gender</label> 
                            <label style="margin-right: 30px"><input type="radio" name="gender" value="Male"/> Male</label>
                            <label><input type="radio" name="gender" value="Female"/> Female</label>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="txtmobile" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="txtdob" value="" placeholder="Enter username" class="form-control"/>
                        </div>
                        <input type="submit" name="btnupdate" value="Update Profile" class="btn btn-danger btn-block"/>
                    </form>
                </div>
            </div>
            <div class="col-sm-4"></div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>