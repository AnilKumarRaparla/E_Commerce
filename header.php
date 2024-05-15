<div class="row" style="background-color:#38b6ff">
    <div class="col-sm-1"><img align="center" src="image/logo-1.jpeg" width="150px" height="100px"/></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-8">
        <form method="post" class="form-horizontal" style="margin-top: 35px">
            <div class="form-group">
                <div class="col-sm-9">
                    <input type="text" class="form-control" style="width:100%"  name="search" placeholder="Search for products">
                </div>
                <div class="col-sm-3">
                    <button type="submit"  placeholder="search" class="btn btn-primary" >search</button>
                </div>
		
                
            </div>
        </form>
    </div>
    <div class="col-sm-2"></div>
    
    
</div>
<div class="row">
            <nav class="navbar navbar-inverse" style="font-weight:bolder; background-color: #a11863">
                <ul class="nav navbar-nav" style="text-color:black">
                    <li style="margin-left:30px"><a style="color:white" href="home.php">Home</a></li>
                    <li class="dropdown"><a  style="color:white" href="" class="dropdown-toggle" data-toggle="dropdown">Electronics<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a  style="color:black" href="mobilepage.php">Phone</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a  style="color:white" href="" class="dropdown-toggle" data-toggle="dropdown">Appliances<span class="caret"></span></a>
			<ul class="dropdown-menu">
                            <li><a  style="color:black" href="tv.php">Television</a></li>
                        </ul>
                    </li>
                    <li><a  style="color:white" href="contact_us.php">Contact us</a></li>
                    <li><a  style="color:white" href="faq.php">FAQ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-right:20px">
                    <li align="right"><a  style="color:white" href="cart.php">My cart</a></li>
                    <li class="dropdown">
                        <a  style="color:white" href="" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                                if(isset($_SESSION['uid']))
                                    echo "My Account";
                                else
                                    echo "Sign In";
                            ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                                if(isset($_SESSION['uid']))
                                {
                                    echo "<li><a href='profile.php'>Profile</a></li>";
                                    echo "<li><a href='changepwd.php'>Change my password</a></li>";
                                    echo "<li><a href='myorder.php'>My orders</a></li>";
                                    echo "<li><a href='logout.php'>logout</a></li>";
                                }
                                else
                                {
                                    echo "<li><a href='login.php'>login</a></li>";
                                    echo "<li><a href='register.php'>Register</a></li>";
                                }
                            ?>
                            
                            
                            
                        </ul>
                    </li>
                </ul>  
           
                </nav>
</div>