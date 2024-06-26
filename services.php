<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Services</title>
</head>
<style>
	h1 {
  text-shadow: 5px 2px 20px #050300;
}
p {
  text-shadow: 5px 5px 15px #050300;
}

.image-container {
            display: flex;
            justify-content: center;
            margin-top: 10px; /* Space between text and images */
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
<h1 style="color:#f0e0bf; text-align:center; margin-left: 100px; white-space: nowrap;"><i><b>🐎Конна езда🐎</b></i></h1>
<h1 style="color:#f0e0bf; text-align:center; margin-left: 200px;"><i><b>🤸‍♂️Гимнастика за духа и тялото🤸‍♂️</b></i></h1>
</div>

<div style="display:flex">
<p style="color:white; font-size:160%; width:500px; text-align:justify; margin-left: 10px;"><b>🔸В близост до PLINAFAN се намира конна база предлагаща туристическа езда в гората, а за опитни ездачи има и препятствия за прескачане и упражнения по обездка. 

<br><br>🔸Професионални треньори ще се погрижат да ви въведат в магията на този невероятен спорт, съчетаващ, най-различни възможности, както и такива за лечение, чрез хипотерапия.

</b></p>
<p style="color:white; font-size:160%; width:500px; text-align:justify; margin-left:320px;"><b>🔸Аеробика, йога, стречинг, аква гимнастика и много други.<br>

В PLINAFAN гостите ни могат да се присъединят към разнообразни активности като професионални тренировки от стречинг до Kangoo Jumps.<br><br>

🔸Също така всеки ден предлагаме аква гимнастика или аква забавление в басейните на много хотели.<br>

За програмата просто попитайте някой от нашите спортни аниматори.</b></p>
</div>
<div class="image-container">
<img src="horseriding.jpg" alt="Horseriding" class="left-image">
<img src="aquasplash.jpg" alt="Aquasplash" class="centered-image">
<img src="aerobics.jpg" alt="Aerobics" class="right-image">
</div>
<br>




<!-- <img class="horseriding" src="horseriding.jpg"> -->

</body>
</html>