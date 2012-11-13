<?php
/**
* This file provides a very straight forward and simple use case for the Dubmo data class 
*/
 
// Require the class
require_once('../dumbo.data.class.php');

// Set content type to 'arts'
$dumboData = new Dumbodata('arts');

// Setting a new min and max character limit. 
$dumboData->setTextLimit(50, 0);

// Display a block of unformatted HTML
echo $dumboData->doText();
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
   <img src="images/banner1.png"  alt="baner">
   </div>
   <!--end intro-->

   <header class="group_bannner_left">
   <hgroup>
   <h1>We serve fresh ideas</h1>
   <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   </h2>
   </hgroup>
   <div class="button black"><a href="#">Read more about our fresh ideas</a></div>
   </header>

   <!--start holder-->

   <div class="holder_content">

   <section class="group1">
   <h3>Services</h3>
   	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>

   <article class="holder_gallery">
   <a class="photo_hover2" href="#"><img src="images/picture2.jpg" width="150" height="99" alt="picture1"/></a>
   <h2>Lorem ipsum</h2>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst.
   </p> <span class="readmore"><a href="#">Read more..</a></span>
   </article>
    
   <article class="holder_gallery">
   <a class="photo_hover2" href="#"><img src="images/picture4.jpg" width="150" height="99" alt="picture1"/></a>
   <h2>Lorem ipsum</h2>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst.
   </p> <span class="readmore"><a href="#">Read more..</a></span>
   </article>

   <article class="holder_gallery">
   <a class="photo_hover2" href="#"><img src="images/picture5.jpg" width="150" height="99" alt="picture1"/></a>
   <h2>Lorem ipsum</h2>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst.
   </p> <span class="readmore"><a href="#">Read more..</a></span>
   </article>

   </section>

   <aside class="group2">
   <h3>Latest news</h3>

   <article class="holder_news">
   <h4>Lorem ipsum
   <span>10.09.2011</span></h4>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu.<span class="readmore">
   <a href="#">Read more..</a></span></p>
   </article>

   <article class="holder_news">
   <h4>Lorem ipsum
   <span>20.09.2011</span></h4>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu.	
   <span class="readmore"><a href="#">Read more..</a></span></p>
   </article>

   <article class="holder_news">
   <h4>Lorem ipsum
   <span>27.09.2011</span></h4>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. 	
   <span class="readmore"><a href="#">Read more..</a></span></p>
   </article>
   <a class="photo_hover2" href="#"><img src="images/picture3.jpg" width="257" height="295" alt="picture"/></a>   </aside>

   <section class="group3">
   <h3>About us</h3>
   <a class="photo_hover2" href="#"><img src="images/picture1.jpg" width="200" height="97" alt="picture1"/></a>

   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.   </p>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie.<span class="readmore"> <a href="#">Read more..</a></span>
   </p>

    <h3>Testimonials</h3>
    <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst." - Lorem ipsum  </p>

   <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
   Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst." - Lorem ipsum  </p>

   </section>

   </div>
   <!--end holder-->

   </div>
   <!--end container-->

   <!--start footer-->
   <footer>
   <div class="container">  
   <div id="FooterTwo"> © 2011 Fresh ideas </div>
   <div id="FooterTree"> Valid html5, css3, design and code by <a href="http://www.marijazaric.com">marija zaric - creative simplicity</a>   </div> 
   </div>
   </footer>
   <!--end footer-->
   <!-- Free template distributed by http://freehtml5templates.com -->   
   </body>
</html>
