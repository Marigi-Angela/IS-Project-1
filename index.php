<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>marketing web app</title>
    <link rel="stylesheet" href="styles/bootstap-377.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>   
    <div id="top"><!-- Top Begin -->
        <div class="container"><!-- container Begin -->
            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">Items In Your Cart | Total Price: Ksh </a>
            </div><!-- col-md-6 offer Finish -->
           
            <div class="col-md-6"><!-- col-md-6 Begin -->
                <ul class="menu"><!-- cmenu Begin -->
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Go To Cart</a></li>
                    <li><a href="checkout.php">Login</a></li>
                </ul><!-- menu Finish -->
            </div><!-- col-md-6 Finish -->
        </div><!-- container Finish -->
    </div><!-- Top Finish -->
   
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
        <div class="container"><!-- container Begin -->
            <div class="navbar-header"><!-- navbar-header Begin -->
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                    <img src="images/logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                    <img src="images/.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li> <!--remove-->
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           </span><!-- input-group-btn Finish -->     
                       </div><!-- input-group Finish -->
                   </form><!-- navbar-form Finish -->
               </div><!-- collapse clearfix Finish -->
           </div><!-- navbar-collapse collapse Finish -->
       </div><!-- container Finish -->
   </div><!-- navbar navbar-default Finish -->
   
   <div class="container" id="slider"><!-- container Begin -->
       <div class="col-md-12"><!-- col-md-12 Begin -->
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
               

               <!-- 
                   <?php 
               $get_slides = "select * from slider LIMIT 0,1";
               $run_slides = mysqli_query($con,$get_slides);
               while($row_slides =mysqli_fetch_array($run_slides)){
                   $slide_name = $row_slides['slide_name'];
                   $slide_image = $row_slides['slide_image'];
    
                   ?> -->
               
                   <div class="item active">
                       <!--change images from admin to consumer-->
                       <img src="farmer/images/productimage1.jpg" alt="slide_image">
                   </div>
                   
                   <div class="item">
                       <img src="farmer/images/product image2.jpg" alt="slide_image">
                   </div>
                   
                   <div class="item">
                       <img src="farmer/images/productimage1.jpg" alt="Slider Image 3">
                   </div>
                   
                   <div class="item">
                       <img src="farmer/images/product image2.jpg" alt="Slider Image 4">
                   </div>
               
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
       </div><!-- col-md-12 Finish -->
    </div><!-- container Finish -->

    <div id="hot"> <!-- hot begin-->
        <div class="box"><!--box starts-->
            <div class="container"><!--container starts-->
                <div class="col-md-12"><!--col-md-12 starts-->
                    <h2>Latest Products</h2>
                </div>
            </div>
        </div>
    </div><!--hot finish-->

    <div id="content" class="container"><!--container begin-->
        <div class="row">

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="productdetails.php">
                        <img class="img-responsive" src="farmer/images/productimage1.jpg" alt="Product 1"><!--changed from admin to consumer-->
                    </a>  
                <div class="text"><!--text begin-->
                    <h3><a href="productdetails.php">tomatoes </a></h3>
                    <p class="price">Ksh100</p>
                    <p class="button"><!--changed details.php to prouct-details-->
                        <a href="productdetails.php" class="btn btn-default">View Details</a> 
                        <a href="productdetails.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add to cart</i>
                            </a>              
                    </p>
                </div>
                <div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="productdetails.php">
                        <img class="img-responsive" src="farmer/images/productimage1.jpg" alt="Product 1"><!--changed from admin to consumer-->
                    </a>  
                <div class="text"><!--text begin-->
                    <h3><a href="productdetails.php">potatoes </a></h3>
                    <p class="price">Ksh100</p>
                    <p class="button"><!--changed details.php to prouct-details-->
                        <a href="productdetails.php" class="btn btn-default">View Details</a> 
                        <a href="productdetails.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add to cart</i>
                            </a>              
                    </p>
                </div>
                <div>
            </div>    
            
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="productdetails.php">
                        <img class="img-responsive" src="farmer/images/productimage1.jpg" alt="Product 1"><!--changed from admin to consumer-->
                    </a>  
                <div class="text"><!--text begin-->
                    <h3><a href="productdetails.php">oranges </a></h3>
                    <p class="price">Ksh100</p>
                    <p class="button"><!--changed details.php to prouct-details-->
                        <a href="productdetails.php" class="btn btn-default">View Details</a> 
                        <a href="productdetails.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add to cart</i>
                            </a>              
                    </p>
                </div>
                <div>
            </div>

        </div>
    </div>        


    <?php
     include("includes/footer.php");
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
