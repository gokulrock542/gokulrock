<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container" style="color:yellow">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
                       </button>
                      <link rel="shortcut icon" href="img/gk1.png" />
					  					 
					  <h1> <a href="index.php" class="navbar-brand"  style="color:yellow">STYLISH TO MAKE STYLISH </a></h1>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
						  
						  
						  <ul class="nav navbar-nav">
						  
				<li style="width:250px;left:20px;top:10px; margin-left:-80%;"><input type="text" class="form-control" id="search" name="" placeholder="Search">																			
				<li style="top:10px;right:10px;"><a href=""search-result.php"  class="navbar-brand" ><button class="btn btn-primary" id="search_btn" name="search"><span class='glyphicon glyphicon-search'></span></button></a></li>
			</ul>


						

						   <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						   <li><a href="products.php"><span class="glyphicon glyphicon-product"></span> Product</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php" onclick="alert('Do u want to Logout')"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>