<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a></h1>
		<!-- <h2>Your tag line here</h2> -->
		<img src="<?php echo Yii::app()->request->baseUrl ?>/images/headerimgx.png" width="940" height="100" alt=""><!-- header image -->
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
		<div class="menu">
                                <?php 
                                
                                $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); 
                                 
                                ?>
		</div>
	</nav><!-- end of top nav -->


	<section id="main"><!-- #main content and sidebar area -->
		<section id="container"><!-- #container -->
			<section id="content"><!-- #content -->
				<article>
					<?php echo $content ?>
				</article>
	<?php	
		/*
        		<article>
							<h2><a href="#">Laugh and Play With Us</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>
						</article>
						
        		<article>
							<h2><a href="#">Fun In The Sun</a></h2>
							<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/ontheplayground.png" alt="" class="aligncenter" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.</p>
						</article>
						*/
	?>				
			</section><!-- end of #content -->
		</section><!-- end of #container -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Links</h3>
					<ul>
						<li><a href="#">Link #1</a></li>
						<li><a href="#">Link #2</a></li>
						<li><a href="#">Link #3</a></li>
						<li><a href="#">Link #4</a></li>
						<li><a href="#">Link #5</a></li>
					</ul>
                                <!--
				<h3>Check The Weather</h3>
					<a href="#"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/weathericons.png" alt="" /></a>
				-->	
                                		
                                <!--
				<h3>Sponsors</h3>
					<img src="<?php echo Yii::app()->request->baseUrl ?>/images/ad180.png" alt="" /><br /><br />		
                                -->

		</aside><!-- end of sidebar -->
                
                <aside id="sidebar"><!-- sidebar -->
				<h3>Links</h3>
					<ul>
						<li><a href="#">Link #1</a></li>
						<li><a href="#">Link #2</a></li>
						<li><a href="#">Link #3</a></li>
						<li><a href="#">Link #4</a></li>
						<li><a href="#">Link #5</a></li>
					</ul>
                                <!--
				<h3>Check The Weather</h3>
					<a href="#"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/weathericons.png" alt="" /></a>
				-->	
                                	
                                <!--
				<h3>Sponsors</h3>
					<img src="<?php echo Yii::app()->request->baseUrl ?>/images/ad180.png" alt="" /><br /><br />		
                                -->

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->

	<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
					<aside id="first" class="footer-segment">
							<h3>Products</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #first footer segment -->

					<aside id="second" class="footer-segment">
							<h3>Our Team</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #second footer segment -->

					<aside id="third" class="footer-segment">
							<h3>Blogs</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #third footer segment -->
					
					<aside id="fourth" class="footer-segment">
							<h3>Did You Know?</h3>
								<p>That this is a cool site?</p>
					</aside><!-- end of #fourth footer segment -->

			</section><!-- end of #footer-outer-block -->

		</section><!-- end of #footer-area -->
	</footer>

</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
