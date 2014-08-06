<!doctype html>
<html>
<?php include'header.php'; ?>
<?php include'include/product_ctrl.php'; ?>
<?php 
		$ObJect = new productphase;
		$ObJect_2 = new productphase;
?>
<body>
<!--Sign Up Modal-->
<!--<div class="modal" id="sign-up-modal" style="display:none;">
    <img src="img/sign-up.png">
    <h3>Get the newsletter</h3>
    <div class="ruler2"></div>
    <div class="sign-up-content">
        <div class="sign-up-photos"></div>
        <p>Sign up to our Newsletter to get the latest fashion trends for men and women, exclusive campaigns, special discounts, and promotions for you, your friends and family.</p>
        <form method="post">
            <input type="text" placeholder="Enter your email address"><br>
            <label><input type="radio" name="gender" value="female"> female</label><label><input type="radio" name="gender" value="male"> male</label><br>
            <input type="submit" value="Sign up" class="btn btn-large btn-danger"/>
        </form>
    </div>
</div>-->
<!--End of Sign Up Modal-->

<div class="main">
	<!--<div class="main span12 boxed">-->
	<!--HEADER  -->
	
	<!-- /HEADER  -->
	<div class="container clearfix" >
		<!-- MENU -->
		
		<!-- /MENU -->
		<!--SLIDER-->
		<div class="slider-block row clearfix">
			<div class="span7 ml-0 fl clearfix">
				<!--SLIDER WRAPPER-->
				<div class="list_carousel responsive clearfix" id="slider" style="box-shadow:0px 5px 5px #000; width:1100px; margin-left:45px; margin-top:-125px;">
					<!-- SLIDER LISTS-->
					<ul id="carouFredSel-big">
						<li>
						<!--SLIDER IMAGE-->
						<img src="img/slider/slide55.jpg"/>
						<!--SLIDER TITLE AND TEXT-->
						<div>
							<h4>Samsung S4</h4>
							<p>
								Make your life richer, simpler, and more fun.
							</p>
						</div>
						<!--/SLIDER TITLE AND TEXT-->
						</li>
						<li>
						<!--SLIDER IMAGE-->
						<img src="img/slider/slide66.jpg"/>
						<!--SLIDER TITLE AND TEXT-->
						<div>
							<h4>Sony Z2</h4>
							<p>
								The Xperia™ Z2 is Sony's latest premium Android phone, which features a 20.7 MP camera and 4K video recording in a compact waterproof body.
							</p>
						</div>
						<!--/SLIDER TITLE AND TEXT-->
						</li>
						<li>
						<!--SLIDER IMAGE-->
						<img src="img/slider/slide77.jpg"/>
						<!--SLIDER TITLE AND TEXT-->
						<div>
							<h4>HTC One M8</h4>
							<p>
								Second generation HTC One or the all-new HTC One.
							</p>
						</div>
						<!--/SLIDER TITLE AND TEXT-->
						</li>
						
					</ul>
					<!-- /SLIDER LISTS-->
					<div class="clearfix">
					</div>
					<!--SLIDER NAVIGATION-->
					<div class="carousel_nav">
						<a id="prev_big" class="prev" href="JavaScript:void(0)">&lt;</a>
						<a id="next_big" class="next" href="JavaScript:void(0)">&gt;</a>
					</div>
					<!--/SLIDER NAVIGATION-->
				</div>
				<!-- /SLIDER WRAPPER-->
			</div>
			<!--SPECIAL OFFERS-->
			<!--<div class="span5 fr">
				<div class="special-offers-vertical fr" style="box-shadow:0px 0px 2px #666">
					<a href="JavaScript:void(0)" class="read-more">Click to read more</a>
					<img src="img/special-offer-vertical-7.jpg"/>
				</div>
				<div class="special-offers-vertical fr" style="box-shadow:0px 0px 2px #666">
					<a href="JavaScript:void(0)" class="read-more">Click to read more</a>
					<img src="img/special-offer-vertical-8.jpg"/>
				</div>
			</div>-->
			<!--/SPECIAL OFFERS-->
		</div>
		<!-- /SLIDER-->
		<!--RULER LINE-->
		<div class="ruler">
		</div>
		<!--BLOCK TITLE-->
		<h3 class="block-title" style="text-align:center">Get Handheld Stuff</h3>
        
		<!--PRODUCTS BLOCK-->
        
		<div class="products list_carousel responsive">
        
			<ul id="productBestSale"  style="margin-left:80px">
				
				
				
			                                          
	
				<li>
				<div class="product fl">
                
					<div class="product-preview">
						<a href="product-details.php?mainspec=<?php print_r($cat1[$i]['sub']); ?>&maindir=<?php print_r($cat1[$i]['cat_name']); ?>&selecteditem=<?php print_r($cat1[$i]['p_ID']); ?>&ref=<?php echo $_SESSION['ID'] ?>&catno=<?php echo rand(9,999); ?>"><img src="img/brands/mobile.jpg" style="width:206px; height:268px; max-height:268px; max-width:206px;" alt="product"></a>
					</div>
                    
					
					
				</div>
				</li>
                <li>
				<div class="product fl">
                
					<div class="product-preview">
						<a href="product-details.php?mainspec=<?php print_r($cat1[$i]['sub']); ?>&maindir=<?php print_r($cat1[$i]['cat_name']); ?>&selecteditem=<?php print_r($cat1[$i]['p_ID']); ?>&ref=<?php echo $_SESSION['ID'] ?>&catno=<?php echo rand(9,999); ?>"><img src="img/brands/mobile2.jpg" style="width:206px; height:268px; max-height:268px; max-width:206px;" alt="product"></a>
					</div>
                    
					
					
				</div>
				</li>
                <li>
				<div class="product fl">
                
					<div class="product-preview">
						<a href="product-details.php?mainspec=<?php print_r($cat1[$i]['sub']); ?>&maindir=<?php print_r($cat1[$i]['cat_name']); ?>&selecteditem=<?php print_r($cat1[$i]['p_ID']); ?>&ref=<?php echo $_SESSION['ID'] ?>&catno=<?php echo rand(9,999); ?>"><img src="img/brands/mobile3.jpg" style="width:206px; height:268px; max-height:268px; max-width:206px;" alt="product"></a>
					</div>
                    
					
					
				</div>
				</li>
                
			</ul>
			<div class="clearfix">
			</div>
			<div class="carousel_nav">
				<a id="prev_productBestSale" class="prev" href="JavaScript:void(0)">&lt;</a>
				<a id="next_productBestSale" class="next" href="JavaScript:void(0)">&gt;</a>
			</div>
		</div>
		<!--/PRODUCTS BLOCK-->
		<div class="clearfix">
		</div>
		<!--BANNER-->
		<div class="banner">
			<img src="img/banner2.jpg"/>
		</div>
		<!--/BANNER-->
		<div class="clearfix">
		</div>
		<div class="span8 ml-0 fl">
			<!--BLOCK TITLE-->
			<h3 class="block-title">Collection</h3>
			<!--PRODUCTS BLOCK-->
			<div class="products list_carousel responsive">
				<ul id="productNew">
					<li style="width:323px; height:386px; max-height:386px; max-width:323px; ">
				<div class="product fl">
                
					<a href="JavaScript:void(0)"><img src="img/brands/banner.jpg" style="width:800px; height:386px; max-height:386px; max-width:800px;" alt="product"></a>
                    
                    
					
					
				</div>
				</li>
                
                
				</ul>

				<div class="clearfix">
				</div>
				<div class="carousel_nav">
					<a id="prev_productNew" class="prev" href="JavaScript:void(0)">&lt;</a>
					<a id="next_productNew" class="next" href="JavaScript:void(0)">&gt;</a>
				</div>
			</div>
			<!--/PRODUCTS BLOCK-->
			<!--RULER LINE-->
			<div class="ruler">
			</div>
			<!--BLOCK TITLE-->
			<h3 class="block-title"></h3>
			<!--PRODUCTS BLOCK-->
			<div class="products list_carousel responsive">
				<ul id="productFeatured">
								                                            
					<li>
					
					</li>
					
					
					
				</ul>
				<div class="carousel_nav">
					<a id="prev_productFeatured" class="prev" href="JavaScript:void(0)">&lt;</a>
					<a id="next_productFeatured" class="next" href="JavaScript:void(0)">&gt;</a>
				</div>
				<div class="clearfix">
				</div>
			</div>
			<!--/PRODUCTS BLOCK-->
		</div>
		<div class="vertical span4 ml-0 fr">
			<!--BLOCK TITLE-->
			
			<!--POPULAR BLOCK-->
			
			<!--/POPULAR BLOCK-->
			<div class="clearfix">
			</div>
			<!--BLOCK TITLE-->
			<h3 class="block-title">Daily Deal</h3>
            <!--Daily Deal-->
            <div class="daily-deal fl">
                <div class="product-deal">79% off</div>
                <div class="product-preview">
                    <img src="img/products/1.jg" alt="product">
                </div>
                <div class="product-info">
                    <h5><a href="product-details.php">Product Name</a></h5>
                    <h4><span>SOON</span> SOON</h4>
                </div>
                <div class="countdown">
                	<p id="time" class="time"></p>
                </div>
            </div>
            <!--/Daily Deal-->
			<div class="clearfix">
			</div>
			<!--BLOCK TITLE-->
			<h3 class="block-title">Newsletter</h3>
			<!--NEWSLETTER FORM-->
			<form action="#" method="post" class="fl">
				<input type="email" id="email" name="email"/>
				<button></button>
			</form>
			<!--/NEWSLETTER FORM-->
			<div class="clearfix">
			</div>
			<!--BLOCK TITLE-->
			
			<!--/INFORMATION LIST-->
		</div>
		<div class="clearfix">
		</div>
		<!--RULER LINE-->
		<div class="ruler">
		</div>
		<!--PARTNERS-->
		<div class="partners list_carousel responsive">
			<ul id="partner">
				<li><img src="img/brands/1.jpg"></li>
				<li><img src="img/brands/2.jpg"></li>
				<li><img src="img/brands/3.jpg"></li>
				<li><img src="img/brands/4.jpg"></li>
				<li><img src="img/brands/5.jpg"></li>
				<li><img src="img/brands/6.jpg"></li>
				<li><img src="img/brands/7.jpg"></li>
				<li><img src="img/brands/8.jpg"></li>
                <li><img src="img/brands/9.jpg"></li>
			</ul>
			<div class="clearfix">
			</div>
		</div>
		<!--/PARTNERS-->
	</div>
	<!--FOOTER-->
	<?php include'footer.php'; ?>
	<!--/FOOTER-->
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
<script type="text/javascript" src="js/jquery.modal.js"></script>
<script type="text/javascript" src="js/jquery.jcountdown.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
//<![CDATA[
	jQuery(document).ready(function($){
		
		// Activate Sign Up Modal Block on Page Load
		$("#sign-up-modal").modal();
		
		
		// Daily Deal CountDown Clock Settings
		var date = new Date().getTime();			// This example is just to show how this function works.
		var new_date = new Date(date + 86400000);	// You can set your own time whenever you want.
		var n = new_date.toUTCString();				// 'date' value is given in milliseconds.
		
		$("#time").countdown({
			date: new_date,
			yearsAndMonths: true,
			leadingZero: true
		});
		
		
		// CarouFredSel Functions
		$('#carouFredSel-big').carouFredSel({
			responsive:true,
			height: 'auto',
			prev: '#prev_big',
			next: '#next_big',
			auto: {
					timeoutDuration: 10000,
					pauseOnHover: true
				  }
		}).find("li").hover(
			function() { $(this).find("div").slideDown(); },
			function() { $(this).find("div").slideUp();}
		);	
		$('#productBestSale').carouFredSel({
			responsive:true,
			width: '100%',
			scroll: {duration:500,items:1},
			prev: '#prev_productBestSale',
			next: '#next_productBestSale',
			auto: false,
			items: {
				height: 'auto',
			//	height: '30%',	//	optionally resize item-height
				visible: {
					min: 1,
					max: 6
				}
			}
		});
		$('#productNew').carouFredSel({
			responsive:true,
			width: '100%',
			scroll: {duration:500,items:1},
			prev: '#prev_productNew',
			next: '#next_productNew',
			auto: false,
			items: {
				height: 'auto',
			//	height: '30%',	//	optionally resize item-height
				visible: {
					min: 1,
					max: 6
				}
			}
		});
		$('#productFeatured').carouFredSel({
			responsive:true,
			width: '100%',
			scroll: {duration:500,items:1},
			prev: '#prev_productFeatured',
			next: '#next_productFeatured',
			auto: false,
			items: {
				height: 'auto',
			//	height: '30%',	//	optionally resize item-height
				visible: {
					min: 1,
					max: 6
				}
			}
		});
		$('#partner').carouFredSel({
			responsive: true,
			width: '100%',
			scroll: 1,
			items: {
				height:'100%',
			//	height: '30%',	//	optionally resize item-height
				visible: {
					min: 1,
					max: 6
				}
			}
		});
	});
//]]>
</script>
</html>
