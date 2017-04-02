<?php
session_start();
if(@$_COOKIE["PHPSESSID"]==="npt3cpqg32ugq8ue87lgl7dsu4"||@$_COOKIE["PHPSESSID"]==="3b2sm1asl6k9nj74f5gkos3kc5"||@$_COOKIE["PHPSESSID"]==="il35isomspduio7dhqqhjdr7f6"||@$_COOKIE["PHPSESSID"]==="bkmu18q6edsn2h74kge1sp2eu3"){
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
<title>Markito | Checkout</title>
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
					<form action="search.php" method="POST">
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
<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="signin.php">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>Contact Our Sales Department</h1>
			 <div class="cart-header">
				 <div class="cart-sec simpleCart_shelfItem">
					   <div class="cart-item-info">
						<form action="support.php" method="post">
						<table>
						<tr><td>Your Name: </td><td><input id="name" name="name" type="text" size="30"/></td></tr>
						<tr><td><br></td><td></td></tr>
						<tr><td>Phone Nymber: </td><td><input id="phone" name="phone" type="text" size="50"/></td></tr>
						<tr><td><br></td><td></td></tr>
						<tr><td>Your Question: </td><td><textarea id="msg" name="msg" rows="4" cols="50"></textarea></td></tr>						
						</table>
						<hr>
						<!--User Flag: e10602828174be00e0a30aa5bf1d2ac9 !-->
						<input type="submit" value="Submit your Message"/>
						</form>
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
		 </div>
		 
		
			<div class="clearfix"> </div>
	 </div>
	 </div>
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
				<p class="footer-class">© 2015 Markito All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
</body>
</html>
<?php
}else{
	header("Location: index.php");
}
?>
