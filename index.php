<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/gk.png" />
        <title>STYLISH BOUTIQUE STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body >  
	 
        <div>
           <?php
            require 'header.php';
           ?>
		   <h1><marquee style="color:blue"><i>Welcome To StYlish To Make Stylish Online Shoping....To Make your Life Style</marquee></h2>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell Only Indian Products.</h1>
                       <p>Flat 50% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/traditional.jpg" alt="traditional">
                           </a>
                           <center>
                                <div class="caption" href="header.php">
                                      <b>  <p id="autoResize" style="color:blue">Traditional Wears</p></b>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/chudi.jpg" alt="chudi">
                           </a>
						   <br>
                           <center>
                                <div class="caption">
                                    <b><p id="autoResize" style="color:purple">Chuditar</p><b>
                                    <p>Quality chuditar from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/saree.jpg" alt="saree">
                           </a>
                           <center>
                               <div class="caption">
                                   <b><p id="autoResize" style="color:red">Saree</p></b>
                                   <p>Our exquisite collection of saree.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
          
           </footer>
        </div>
    </body>
</html>