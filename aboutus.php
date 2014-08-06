<!doctype html>
<html>
<?php include'header.php'; ?>
<body>
<div class="main">
	<!--<div class="main span11 boxed">-->
	
	<!-- /HEADER  -->
	<div class="container clearfix" style="margin-top:-120px;">
		<!-- MENU -->
		
		<!-- Menu ends here -->
		<!--Breadcrumb-->
		<div class="breadcrumb clearfix">
			<a href="JavaScript:void(0)">USD</a><span>About Us</span>
		</div>
		<div class="container contact-us">
			<h3 class="block-title">About Us</h3>
            <ul>
            <li style="display:inline-block; border-right:1px dashed #999; padding-right:15px; padding-left:15px"><a href="payment.php" target="_new" >USD-Payment Term</a></li>
            <li style="display:inline-block; border-right:1px dashed #999; padding-right:15px; padding-left:15px"><a href="privacy.php"  target="_new">USD-Privacy Policy</a></li>
            <li style="display:inline-block; padding-right:15px; padding-left:15px"><a href="return.php"  target="_new">USD-Return Policy</a></li>
            </ul>
			<div class="ruler">
			</div>
			<!--<div class="google-map hidden-phone">
            <img src="img/USD.jpg" style="width:100%; height:100px">
			</div>-->
			<div class="row">
				
				<div class="span6" style="width:100%">
					<h4>Know Us</h4>
					<p>
						
                        Welcome to USD "Ultimate Shopping Destination", an online portal for giving you one point shop for sourcing all the kind of useable like clothing, electronics, home furnishing products and services etc.
                        <br>
                        <br>
@ USD, we aim to focus on serving our customer with highest quality standard. Our selection procedure for birthing the place at USD goes through various quality parameter & future forecast (specially on clothing section).
<br>
<br>
We are also promoting self-clothing brand named "USD", which will give upgraded fashion statement in consumer life. Our mobile application will help you to reach USD products quick & easily, which can be downloaded from the website directly.
<br>
<br>
To know more about USD……………. Let's not waist time, let's do shopping on USD & experience it.

                        
					</p>
					
					
					
				
				</div>
			</div>
		</div>
	</div>
	<?php include'footer.php'; ?>
</div>
<div id="toTop">
	<i class="icon-double-angle-up icon-4x"></i>
</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="js/jquery.smartwizard.js"></script>
<script type="text/javascript" src="js/jquery.formstyler.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.ui.map.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script>
//<![CDATA[
	$('#googlemaps').gmap({'center': '57.7973333,12.0502107', 'zoom': 10, 'disableDefaultUI':true, 'callback': function() {
		var self = this;
		self.addMarker({'position': this.get('map').getCenter() }).click(function() {
			self.openInfoWindow({ 'content': 'Right Choice' }, this);
		});
	}});
//]]>
</script>
</html>
