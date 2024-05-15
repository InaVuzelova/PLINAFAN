<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entertainment</title>
</head>
<style>
	h1 {
  text-shadow: 2px 2px 8px #050300;
}
p {
  text-shadow: 5px 5px 15px #050300;
}

.image-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Space between text and images */
            gap: 20px; /* Space between images */
        }

        .image-container img {
            width: 450px;
            height: 300px;
            transition: transform 0.3s ease; /* Smooth zoom transition */
        }

        .image-container img:hover {
            transform: scale(1.1); /* Zoom in on hover */
        }
</style>
<body>
<?php 
include 'create.php';
include 'menu.php';
?>
<a href="startPage.php">
        <img src="arrow2.png" width="50" height="35" align="left"></a><br>
<div style="display:flex; font-size:150%;">
<h1 style="color:#f0e0bf; text-align:center; margin-left: 100px;"><i><b>🌊Аквапарк Aquamania🌊</b></i></h1>
</div>

<p style="color:white; font-size:160%; width:1000px; text-align:justify; margin-left: 10px;"><b>
🔸Аквапарк Aquamania<br><br>

🔸Доза адреналин
за цялото семейство<br><br>

🔸Отдайте се на водни развлечения и силни емоции в Аквапарк „Aquamania“!<br>
🔸Водното чудо, разположено върху зона, равняваща се на 5 футболни игрища , разполага с уникални атракции за всички възрасти.<br><br>

🔸Посетете ни и се потопете в света на забавленията, емоциите и адреналина!


</b></p>

<div class="image-container">
<img src="aquapark1.jpg" alt="Aquapark1" class="left-image">
<img src="aquapark2.jpg" alt="Aquapark2" class="centered-image">
<img src="aquapark3.jpg" alt="Aquapark3" class="right-image">
</div>

</body>
</html>