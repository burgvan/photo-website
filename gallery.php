<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Raya Photography</title>
		<meta name="handheldfriendly" content="true">
		<meta name="mobileoptimized" content="240">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="css/reset.css" rel="stylesheet">
		<link href="css/general.css" rel="stylesheet">
        <link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
        <noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
		<script src="js/nav.js"></script>	        
        <!--large preview area for gallery-->
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>

    </head>

	<body> 
<?php include("includes/header.php")
?>
		<div class="main">
            	<h2>Photo Gallery</h2>
                <div id="rg-gallery" class="rg-gallery">
    <div class="rg-thumbs">
        <!-- Elastislide Carousel Thumbnail Viewer -->
        <div class="es-carousel-wrapper">
            <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div>
            <div class="es-carousel">
                <ul>
                    <li>
                        <a href="#">
                            <img src="thumbs/misc.jpg" data-large="images/misc.jpg" alt="castle" data-description="18th CE Castle in Portugal">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/misc02.jpg" data-large="images/misc02.jpg" alt="flower" data-description="Dying flower">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/misc03.jpg" data-large="images/misc03.jpg" alt="fireworks" data-description="Fireworks in the dark">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/misc04.jpg" data-large="images/misc04.jpg" alt="castle" data-description="18th CE Castle in Portugal">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/misc05.jpg" data-large="images/misc05.jpg" alt="Leaf" data-description="Leaf silhouette">
                        </a>
                    </li>                    
                    <li>
                        <a href="#">
                            <img src="thumbs/pet.jpg" data-large="images/pet.jpg" alt="dogs" data-description="Speeding canines">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/pet02.jpg" data-large="images/pet02.jpg" alt="classic dog" data-description="Classic dog">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/pet03.jpg" data-large="images/pet03.jpg" alt="pup" data-description="Napping pup">
                        </a>
                    </li>                    
                    <li>
                        <a href="#">
                            <img src="thumbs/pet04.jpg" data-large="images/pet04.jpg" alt="cottage dog" data-description="Lounging cottage dog">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/pet05.jpg" data-large="images/pet05.jpg" alt="cat" data-description="Picturesque feline">
                        </a>
                    </li>                       
                    <li>
                        <a href="#">
                            <img src="thumbs/portrait.jpg" data-large="images/portrait.jpg" alt="portrait" data-description="Bluesman Photoshoot">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="thumbs/portrait02.jpg" data-large="images/portrait02.jpg" alt="portrait two" data-description="Bluesman Photoshoot #2">
                        </a>
                    </li>                      
                    <li>
                        <a href="#">
                            <img src="thumbs/portrait03.jpg" data-large="images/portrait03.jpg" alt="portrait three" data-description="Bluesman Photoshoot #3">
                        </a>
                    </li> 
                    <li>
                        <a href="#">
                            <img src="thumbs/portrait04.jpg" data-large="images/portrait04.jpg" alt="portrait four" data-description="Springtime happiness">
                        </a>
                    </li>                      
                    <li>
                        <a href="#">
                            <img src="thumbs/portrait05.jpg" data-large="images/portrait05.jpg" alt="portrait five" data-description="Contrast lines">
                        </a>
                    </li>                                                                                  
                </ul>
            </div>
        </div>
        <!-- End Elastislide Carousel Thumbnail Viewer -->
    </div><!-- rg-thumbs -->
</div><!-- rg-gallery -->
		</div><!--main ends here-->
        
<?php include("includes/bottomFooter.php")
?>           
        </body>
</html>
