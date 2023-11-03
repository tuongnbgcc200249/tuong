<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIYOU - Gaming Gear</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    

    <link href="csseshop/bootstrap.min.css" rel="stylesheet">
    <link href="csseshop/font-awesome.min.css" rel="stylesheet">
    <link href="csseshop/prettyPhoto.css" rel="stylesheet">
    <link href="csseshop/price-range.css" rel="stylesheet">
    <link href="csseshop/animate.css" rel="stylesheet">
	<link href="csseshop/main.css" rel="stylesheet">
	<link href="csseshop/responsive.css" rel="stylesheet">
    
    <link href="css/salomon.css" rel="stylesheet">
    
<!--datatable-->
	<script src="js/jquery-3.2.0.min.js"/></script>
    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    
  </head>
  <body>
  
  <?php
    session_start();
    include_once("connection.php"); 
  ?>

   <header id="header"><!--header-->
		<div class="header_top" style="background-color:#FF0033">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo" >
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 0337 197 520</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> atnstore@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href=""><i class="fa fa-facebook"></i></a></li> -->
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>								
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="header-middle" style="background-color:black"><!--header-middle-->
			<div class="container" >
				<div>
					<div class="col-sm-6" >
						<div class="logo pull-left" >
                            <a href="index.php" style="background-color:black;color:white ">ATN Store
                            <img src="images/atnlogo.png" width="70" height="70"></a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" >
                                <!-- <li><a href="?page=cart" style="background-color:black;color:#FFF">
                                <li class="fa fa-shopping-cart"></li> Cart</a></li>  -->
                                <?php 
                                    if(isset($_SESSION['us']) && $_SESSION['us'] !=""){
                                        
                                    
                                ?>
                                <li><a href="?page=update_customer" style="background-color:black;color:#FFF">
                                <i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us'] ?></a></li>
                                <li><a href="?page=logout" style="background-color:black;color:#FFF">
                                <i class="fa fa-crosshairs"></i>Log Out</a></li>
                                <?php 
                                    }
                                    else{
                                ?>
                                <li><a href="?page=login" style="background-color:black;color:#FFF">
                                <i class="fa fa-lock"></i>Login</a></li>
                                <li><a href="?page=register" style="background-color:black;color:#FFF">
                                <i class="fa fa-star"></i>Register</a></li>
                                <?php 
                                    }
                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom" style="background-color:#FF0033"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#" style="color:black">Introduction<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="background-color:#FF0033">
                                        <li><a href="?page=intro" style="color:black">About Us</a></li>
                                    </ul>
                                    
                                </li> 
								<li class="dropdown"><a href="#" style="color:black">Management<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="background-color:#FF0033">
                                        <li><a href="?page=category_management" style="color:black">Category</a></li>
										<li><a href="?page=product_management" style="color:black">Product</a></li>
                                        <li><a href="?page=supplier_management" style="color:black">Supplier</a></li>
                                    </ul>
                                </li> 
							<!-- <li><a href="?page=cart" style="color:black">Cart</a></li> -->
                                <!-- <li><a href="#">Feedback</a></li>
								<li><a href="#">Contact</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
                        
						<div class="search_box pull-right">
                            <form class="d-flex" action="?page=search" method="POST">
                                <input  type="text" placeholder="Search"  name="Search_product" required>
                                <button class="btn btn-outline-secondary" name="Search_button" type="submit">Search</button>
                            </form>
						</div>                       
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
  
    <?php
	if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page=="register"){
            include_once("Register.php");
        }
        elseif($page=="login"){
            include_once("Login.php");
        }
        elseif($page=="category_management"){
            include_once("Category_Management.php");
        }
        elseif($page=="product_management"){
            include_once("Product_Management.php");
        }
        elseif($page=="add_category"){
            include_once("Add_Category.php");
        }
        elseif($page=="update_category"){
            include_once("Update_Category.php");
        }
        elseif($page=="add_product"){
            include_once("Add_Product.php");
        }
        elseif($page=="update_product"){
            include_once("Update_Product.php");
        }
        elseif($page=="logout"){
            include_once("Logout.php");
        }
        elseif($page=="update_customer"){
            include_once("Update_customer.php");
        }elseif($page=="search"){
            include_once("search.php");
        }elseif($page=="intro"){
            include_once("intro.php");
        }
        elseif($page=="supplier_management"){
            include_once("Supplier_Management.php");
        }
        elseif($page=="add_supplier"){
            include_once("Add_Supplier.php");
        }
        elseif($page=="update_supplier"){
            include_once("Update_Supplier.php");
        }
    }else{
        include_once("Content.php");
    }
	?>
      
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>A<span>TN</span></h2>
                        <p>ATN is one of those toy stores that grows fast and stable regardless of favorable or difficult economic situation. ATN store chain was established in 2023,
                             specializing in retailing toy products for children over 13 years old.</p>
                        <div class="footer-social">
                            <!-- <a href="" target="_blank"><i class="fa fa-facebook"></i></a> -->
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User</h2>
                        <ul>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Bill</a></li>
                            <li><a href="#">Other information</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Classify</h2>
                        <ul>
                            <li><a href="#">Figure</a></li>
                            <li><a href="#">Robot</a></li>
                            <li><a href="#">Puzzles</a></li> 
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2023 ATN - Toys Store</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    

    <script src="js/jquery.dataTables.min.js"/></script>
    <script src="js/dataTables.bootstrap.min.js"/></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></script>
    
    
  </body>
</html>