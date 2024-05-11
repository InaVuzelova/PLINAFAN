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
<h1 style="color:yellow; text-align:center;"<i><b>Перфектният избор за мечтаната ваканция
за едно незабравимо лято</b></i></h1>
<!-- <p style="color:#f0e0bf; width:500px; text-align:left;"><b>PLINAFAN е разположен на самия морски бряг. Уникалният декор, минималистичният дизайн, 
чистият въздух, безкрайната златна плажна ивица, вкусната храна – приготвена от екологично чисти продукти и приветливият персонал
 го превръщат в  перфектното място за вашата почивка.
Стаите са стилно обзаведени, а някои от тях са с директен достъп до собствен басейн, който сякаш прелива в морето. 
Коктейлите, сервирани на открито, романтичната вечеря със спираща дъха гледка, релаксиращият масаж в Wellness центъра или 
освежаващият шопинг по търговската алея на Албена, допълват възможностите да си подарите неповторимо преживяване!</b></p> -->
<div style="display:flex;background-color: rgba(240, 224, 191, 0.7);">
    <p style="color:black; width:500px; text-align:justify; margin-left: 10px;"><b>PLINAFAN е разположен на самия морски бряг. Уникалният декор, минималистичният дизайн, 
    чистият въздух, безкрайната златна плажна ивица, вкусната храна – приготвена от екологично чисти продукти и приветливият персонал
     го превръщат в  перфектното място за вашата почивка.
    Стаите са стилно обзаведени, а някои от тях са с директен достъп до собствен басейн, който сякаш прелива в морето. 
    Коктейлите, сервирани на открито, романтичната вечеря със спираща дъха гледка, релаксиращият масаж в Wellness центъра или 
    освежаващият шопинг по търговската алея на Албена, допълват възможностите да си подарите неповторимо преживяване!</b></p>

	
	<img src="logo.png" alt="logo" style="max-width: 250px; max-height:250px; margin-left: 100px; margin-right: -190px;">

    <p style="color:black; width:500px; text-align:justify; margin-left:320px;"><b>Хотелът разполага с напълно оборудвана мултифункционална зала с капацитет до 500 места, подходяща за бизнес събития, вечерни партита, коктейли и сватби.
Същински оазис и наслада за сетивата! За семейни почивки има детски клуб и анимационни програми, които ще забавляват най-малките гости, докато родителите се наслаждават на спокойствието и красотата на околната природа. С неповторимия си облик и безупречно обслужване, PLINAFAN е не просто хотел, а истинско убежище за тези, които търсят елегантност и удоволствие по време на своята почивка.
PLINAFAN е олицетворение на спокойствието, уюта и неустоимото желание да се върнете отново.</b></p>
</div>

</body>
</html>