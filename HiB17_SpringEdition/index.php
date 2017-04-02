<?php
session_start();
        require('./config/inc.php');
        @$sess_cookie = filter($_COOKIE["PHPSESSID"]);
        $id_db_pass = "SELECT user, sessionid FROM acct WHERE sessionid = '".$sess_cookie."'";
        $id_pass = mysql_query($id_db_pass);
        $id_pass_Data = mysql_fetch_array($id_pass, MYSQL_ASSOC);
        $sess_hash = $id_pass_Data['sessionid'];
        $user_hash = $id_pass_Data['user'];
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE>
<html>
<head>
<title>Markito | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$(,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body> 
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>
					
				</ul>			
			</div>	
			
			<ul class="header-in">
				<li ><a href="products.php" >  brands</a></li>
				<li><a href="404.php">about us</a> </li>
				<li><a href="contact.php">   contact us</a></li>
<?php
        if (($sess_hash == $sess_cookie) && !(empty($sess_cookie))) {
                echo "<li ><a href=\"logout.php\" >logout</a></li>";
                echo "<li ><a href=\"user.php\" >   Ciao " . $user_hash . "</a></li>";
        } else {
                echo "<li ><a href=\"signin.php\" >   sign in</a></li>";
        }
?>
			</ul>
			<div class="search-top">
				<div class="search">
					<form action="search.php" method="GET">
						<input type="text" name="search" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
				<div class="world">
					<ul >
						<li><a href="#"><span> </span></a> </li>
						<li><select class="in-drop">
							  <option>EN</option>
							  <option>DE</option>
							  <option>ES</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" ></a>
			</div>
		<div class="top-nav">		
			  <ul class="megamenu skyblue">
				      <li class="active grid"><a  href="#">fashion</a>
					    <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Accessories</a></li>
										<li><a href="products.php">Bags</a></li>
										<li><a href="products.php">Caps & Hats</a></li>
										<li><a href="products.php">Hoodies & Sweatshirts</a></li>
										<li><a href="products.php">Jackets & Coats</a></li>
										<li><a href="products.php">Jeans</a></li>
										<li><a href="products.php">Jewellery</a></li>
										<li><a href="products.php">Jumpers & Cardigans</a></li>
										<li><a href="products.php">Leather Jackets</a></li>
										<li><a href="products.php">Long Sleeve T-Shirts</a></li>
										<li><a href="products.php">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Shirts</a></li>
										<li><a href="products.php">Shoes, Boots & Trainers</a></li>
										<li><a href="products.php">Shorts</a></li>
										<li><a href="products.php">Suits & Blazers</a></li>
										<li><a href="products.php">Sunglasses</a></li>
										<li><a href="products.php">Sweatpants</a></li>
										<li><a href="products.php">Swimwear</a></li>
										<li><a href="products.php">Trousers & Chinos</a></li>
										<li><a href="products.php">T-Shirts</a></li>
										<li><a href="products.php">Underwear & Socks</a></li>
										<li><a href="products.php">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.php">Levis</a></li>
										<li><a href="products.php">Persol</a></li>
										<li><a href="products.php">Nike</a></li>
										<li><a href="products.php">Edwin</a></li>
										<li><a href="products.php">New Balance</a></li>
										<li><a href="products.php">Jack & Jones</a></li>
										<li><a href="products.php">Paul Smith</a></li>
										<li><a href="products.php">Ray-Ban</a></li>
										<li><a href="products.php">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
					<li><a   href="decor.php">furniture & decor</a>
					 <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="decor.php">Bed</a></li>
										<li><a href="decor.php">Chest</a></li>
										<li><a href="decor.php">Stool & Reider</a></li>
										<li><a href="decor.php">Chair & Carpet</a></li>
										<li><a href="decor.php">Curtain & Brix</a></li>
										<li><a href="decor.php">Shelf</a></li>
										<li><a href="decor.php">Desk</a></li>
										<li><a href="decor.php">Sofa & Anson</a></li>
										<li><a href="decor.php">Bench</a></li>
										<li><a href="decor.php">Sink</a></li>
										<li><a href="decor.php">Lamp</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="decor.php">Armchair</a></li>
										<li><a href="decor.php">Reider Bench</a></li>
										<li><a href="decor.php">Carpet & Desk</a></li>
										<li><a href="decor.php">Wardrobe & Lamp</a></li>
										<li><a href="decor.php">Car seat</a></li>
										<li><a href="decor.php">Lounger</a></li>
										<li><a href="decor.php">Anson</a></li>
										<li><a href="decor.php">Karlstad</a></li>
										<li><a href="decor.php">Camilla & Wardrobe</a></li>
										<li><a href="decor.php">Colton</a></li>
										<li><a href="decor.php">Brix</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
							<iframe src="https://player.vimeo.com/video/16878818"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
							</div>
						  </div>
						</div></li>
				    <li class="grid"><a  href="mobile.php">mobiles & tablets</a>
					   <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="mobile.php">Lenovo Tablets</a></li>
										<li><a href="mobile.php">Motorola</a></li>
										<li><a href="mobile.php">Samsung </a></li>
										<li><a href="mobile.php">Htc Tab</a></li>
										<li><a href="mobile.php">Dell & Compaq</a></li>
										<li><a href="mobile.php">Asus Tablets</a></li>
										<li><a href="mobile.php">Microsoft</a></li>
										<li><a href="mobile.php">Moto E & Moto G</a></li>
										<li><a href="mobile.php">Intex</a></li>
										<li><a href="mobile.php">Hauwei Lumia</a></li>
										<li><a href="mobile.php">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="mobile.php">Asus Zenfone 2</a></li>
										<li><a href="mobile.php">Nikon & Sony</a></li>
										<li><a href="mobile.php">Shorts</a></li>
										<li><a href="mobile.php">Olymplus</a></li>
										<li><a href="mobile.php">Sunglasses</a></li>
										<li><a href="mobile.php">Samsung Nx</a></li>
										<li><a href="mobile.php">Printers & Monitors</a></li>
										<li><a href="mobile.php">Routers</a></li>
										<li><a href="mobile.php">Data Cards</a></li>
										<li><a href="mobile.php">Mouse & Keyboard</a></li>
										<li><a href="mobile.php">Ink Cartridges</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="col1">
								<iframe src="https://player.vimeo.com/video/8118831"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
							</div>										
							</div>
						  </div>
						</div>
			    </li>
						 <li class="grid"><a  href="health.php">health & beauty</a>
					  
			    </li>		
				<li><a  href="#">tvs, gaming & cameras</a>
				  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="mobile.php">Lenovo Tablets</a></li>
										<li><a href="mobile.php">Motorola</a></li>
										<li><a href="mobile.php">Samsung </a></li>
										<li><a href="mobile.php">Htc Tab</a></li>
										<li><a href="mobile.php">Dell & Compaq</a></li>
										<li><a href="mobile.php">Asus Tablets</a></li>
										<li><a href="mobile.php">Microsoft</a></li>
										<li><a href="mobile.php">Moto E & Moto G</a></li>
										<li><a href="mobile.php">Intex</a></li>
										<li><a href="mobile.php">Hauwei Lumia</a></li>
										<li><a href="mobile.php">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="mobile.php">Asus Zenfone 2</a></li>
										<li><a href="mobile.php">Nikon & Sony</a></li>
										<li><a href="mobile.php">Shorts</a></li>
										<li><a href="mobile.php">Olymplus</a></li>
										<li><a href="mobile.php">Sunglasses</a></li>
										<li><a href="mobile.php">Samsung Nx</a></li>
										<li><a href="mobile.php">Printers & Monitors</a></li>
										<li><a href="mobile.php">Routers</a></li>
										<li><a href="mobile.php">Data Cards</a></li>
										<li><a href="mobile.php">Mouse & Keyboard</a></li>
										<li><a href="mobile.php">Ink Cartridges</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="col1">
								<iframe src="https://player.vimeo.com/video/8118831"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
							</div>										
							</div>
						  </div>
						</div></li>
			
				
			  </ul> 
				</div>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty"><img src="images/cart-c.png"  alt=""></a></p>
						<div class="clearfix"> </div>
					</div>
		
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->
	<div class="banner">
<div class="container">	
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
					
						<div class="banner-top">
						<a href="single.php">
						<div class="banner-top-in">
							<img src="images/ba.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						 
						  <div class="banner-top banner-bottom">
						 <a href="single.php">
						<div class="banner-top-in at">
							<img src="images/ba2.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
				   		 <div class="clearfix"> </div>
						 
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
						<a href="single.php">
						<div class="banner-top-in">
							<img src="images/ba11.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						
						  <div class="banner-top banner-bottom">
						  <a href="single.php">
						<div class="banner-top-in at">
							<img src="images/ba21.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
						<a href="single.php">
						<div class="banner-top-in">
							<img src="images/ba12.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
						
						 
						   <div class="banner-top banner-bottom">
						  <a href="single.php">
						<div class="banner-top-in at">
							<img src="images/ba22.png" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						
						</div>
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	</div>
<div class="content">
	<div class="container">
		<div class="content-top">
		<h2 class="new">NEW ARRIVALS</h2>
		<div class="pink">
			<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
			
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi11.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
				  <!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
					<!---
				<a class="cup" href="single">123 $<i> </i> </a>
				-->
				</div>
			</div>
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi12.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
				   <!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi13.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
				
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi11.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi13.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi12.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">		
							 <a href="single.php" > <img src="images/pi11.jpg" class="img-responsive" alt="">
							 	<div class="zoom-icon">
							 		
									<ul class="in-by">
										<li><h5>sizes:</h5></li>                     
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>
					
					
						<ul class="in-by-color">
							<li><h5>colors:</h5></li>                   
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>
							
						</ul>
					
						</div> </a> 	
		           </div>
		
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>					
						</div>
			
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
		
		 </div>
	
	<div class="content-middle">
		<h2 class="middle">BEST SALES</h2>
		<div class="col-best">
			<div class="col-md-4">
				<a href="single.php"><div class="col-in">
					<div class="col-in-left">
						<img src="images/ni.jpg" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><a href="#"><i> </i> </a> </li>
							<li><a href="#"><i> </i> </a> </li>
							<li><a href="#"><i> </i> </a> </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
				
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
				
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="single.php"><div class="col-in">
					<div class="col-in-left">
						<img src="images/ni1.jpg" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
				
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
				
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="single.php"><div class="col-in">
					<div class="col-in-left">
						<img src="images/ni.jpg" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
				
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
				
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
		
			<div class="content-bottom">
				<div class="col-md-8 latter">
					<h6>NEWSLETTER</h6>
					<p>sign up now to our newsletter discount! to get the Welcome discount</p>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 latter-right">
					
						<form>
						<div class="join">
							<input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
							<i> </i>
						</div>
							<input type="submit" value="join us">
						</form>
						
				</div>
				<div class="clearfix"> </div>
			</div>
	<!---->
</div>
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
				<p class="footer-class">Â© 2015 Markito All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.php">about us</a> </li>
					<li><a href="contact.php">   contact us</a></li>
					<li ><a href="products.php" >  our stores</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>
					<li><a href="#">  markito in the press</a></li>
<li ><a href="404.php?pg=stories.php" >  testimonials</a></li>
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>
					<li><a href="#">  markito videos</a></li>
					
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>WE SUPPORT</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- SXQncyBub3QgdGhhdCBoYXJkIGZsYWc6IDRiMTQwZjdlN2QzYzA0YmI3YjU0ZjY5NmFiNThhNDQx -->
</body>
</html>

