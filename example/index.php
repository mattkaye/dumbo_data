<?php
/**
* This file provides a very straight forward and simple use case for the Dubmo data class 
*/

// Require the class
require_once('../dumbo.data.class.php');
	// Instantiate a new object
	$dumboData = new Dumbodata();
?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Fresh Ideas - Home</title>
	<link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
<!--start container-->
<div id="container">
	<!--start header-->
	<header>
	<!--start logo-->
	<a href="#" id="logo"><img src="images/logo.png" width="221" height="84" alt="logo"/></a>
	<!--end logo-->
	<!--start menu-->
	<nav>
	<ul>
		<li><a href="#" class="current">Home</a></li>
		<li><a href="#">About us</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Portfolio</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
	</nav>
	<!--end menu-->
	<!--end header-->
	</header>
	<!--start intro-->
	<div id="intro">
		<img src="images/banner1.png" alt="baner">
	</div>
	<!--end intro-->
	<header class="group_bannner_left">
	<hgroup>
	<h1>We serve fresh ideas</h1>
	<h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. </h2>
	</hgroup>
	<div class="button black">
		<a href="#">Read more about our fresh ideas</a>
	</div>
	</header>
	<!--start holder-->
	<div class="holder_content">
		<section class="group1">
		<h3>Services</h3>
		
		<?php 
			// Setting a new min and max character limit. 
			$dumboData->setTextLimit(500, 1000); 
			
			// Display a block of text echo 
			$dumboData->doText(); 
		?> 
		
		<article class="holder_gallery">
		<a class="photo_hover2" href="#">
			<?php 
				// Setting an image with width between 150 and 300px, height between 100 and 200px
				echo $dumboData->doImage(150,300,100,200);
			?>
		</a>
		<h2>Lorem ipsum</h2>
		
		<?php
			// Setting a new min and max character limit. 
			$dumboData->setTextLimit(60, 250); 
			
			// Display a block of text 
			echo $dumboData->doText(); 
		?> 
		
		<span class="readmore"><a href="#">Read more..</a></span>
		</article>
		<article class="holder_gallery">
		<a class="photo_hover2" href="#">
			<?php 
				echo $dumboData->doImage(150,300,100,200);
			?>
		</a>
		<h2>Lorem ipsum</h2>
		
		<?php
			// Display a block of text
			echo $dumboData->doText(); 
		?> 
		
		<span class="readmore"><a href="#">Read more..</a></span>
		</article>
		<article class="holder_gallery">
		<a class="photo_hover2" href="#">
			<?php 
				// Leave all parameters out to show an image at it's native size
				echo $dumboData->doImage();
			?>
		</a>
		<h2>Lorem ipsum</h2>
		
		<?php
			// Display a block of text
			echo $dumboData->doText(); 
		?>
		
		<span class="readmore"><a href="#">Read more..</a></span>
		</article>
		</section>
		<aside class="group2">
		<h3>Latest news</h3>
		<article class="holder_news">
		<h4>Lorem ipsum <span>10.09.2011</span></h4>
		
		<?php
			// Display an unordered list
			echo $dumboData->doList('ul'); 
		?> 
		
		<span class="readmore">
		<a href="#">Read more..</a></span>
		</article>
		<article class="holder_news">
		<h4>Lorem ipsum <span>20.09.2011</span></h4>
		
		<?php
			// Display an ordered list. Minimum 3 items, Maximum 7
			echo $dumboData->doList('ol', 3, 7); 
		?> 
		
		<span class="readmore"><a href="#">Read more..</a></span>
	</p>
	</article>
	<a class="photo_hover2" href="#">
		<img src="images/picture3.jpg" width="257" height="295" alt="picture"/>
	</a></aside>
	<section class="group3">
	<h3>About us</h3>
	<a class="photo_hover2" href="#">
		<?php 
			echo $dumboData->doImage(150,300,100,200);
		?>
	</a>
	
	<?php
		// Setting a new min and max character limit. 
		$dumboData->setTextLimit(500, 500); 
		echo $dumboData->doText(); 
	?>
	
	<h3>Products and Services</h3>
	
	<?php 
		// Adding a table with 5 to 10 rows, 4 to 8 columns, and width between 25 and 100% in relation to the parent element
		echo $dumboData->doTable(5, 10, 4, 8, 25, 100); 
	?> 
	
</section>
</div>
<!--end holder-->
</div>
<!--end container-->
<!--start footer-->
<footer>
<div class="container">
<div id="FooterTwo">
	 &copy; 2011 Fresh ideas
</div>
<div id="FooterTree">
	 Valid html5, css3, design and code by <a href="http://www.marijazaric.com">marija zaric - creative simplicity</a>
</div>
</div>
</footer>
<!--end footer-->
<!-- Free template distributed by http://freehtml5templates.com -->
</body>
</html>
