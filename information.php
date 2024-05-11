<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="photosCarousel.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Information</title>
</head>
<body>
<?php 
include 'create.php';
include 'menu.php';
?>
<a href="startPage.php">
        <img src="arrow.png" width="50" height="35" align="left">
<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
	<li id="carousel__slide1" tabindex="0" class="carousel__slide">
  		<div class="carousel__snapper">
   	 		<img src="hotel_outside.jpg" alt="New Image 1">
    			<a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
    			<a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
  		</div>
	</li>

    	<li id="carousel__slide2" tabindex="0" class="carousel__slide">
      		<div class="carousel__snapper">
      			<img src="hotel_outside2.jpg" alt="New Image 2">
      			<a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
      			<a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
      		</div>
    	</li>

    	<li id="carousel__slide3" tabindex="0" class="carousel__slide">
      		<div class="carousel__snapper">
      			<img src="hotel_outside3.jpg" alt="New Image 3">
      			<a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
      			<a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
      		</div>
    	</li>

    	<li id="carousel__slide4" tabindex="0" class="carousel__slide">
      		<div class="carousel__snapper">
      			<img src="hotel_outside4.jpg" alt="New Image 4">
      			<a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
      			<a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
      		</div>
    	</li>
  </ol>
  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <li class="carousel__navigation-item">
        <a href="#carousel__slide1"
           class="carousel__navigation-button"></a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide2"
           class="carousel__navigation-button"></a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide3"
           class="carousel__navigation-button"></a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button"></a>
      </li>
    </ol>
  </aside>
</section>

<br>
</body>
</html>