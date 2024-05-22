<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Offers</title>
</head>
<style>
	h1 {
  text-shadow: 2px 2px 8px #050300;
}
p {
  text-shadow: 5px 5px 15px #050300;
}

.content-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        margin: 20px 0;
    }

.image-container {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
    }

.image-container img {
        margin-bottom: 20px;
        width: 400px; /* Adjust width as needed */
        height: auto; /* Maintain aspect ratio */
        transition: transform 0.3s ease; /* Smooth zoom transition */
    }

.image-container img:hover {
        transform: scale(1.1); /* Zoom in on hover */
    }

.text-container {
        max-width: 800px;
        color: white;
        font-size: 160%;
        text-align: justify;
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
<h1 style="color:#f0e0bf; text-align:center; margin-left: 600px;"><i><b>🌼 Wellness May 🌼</b></i></h1>
</div>
<div class="content-container">
        <div class="image-container">
            <img src="offer1.jpg" alt="Spa Image 1">
            <img src="offer2.jpg" alt="Spa Image 2">
        </div>
<div class="text-container">
<p><b>
Превърнете месец май във време за отпуск и възстановяване с най-доброто от нашия спа център! <br><br>

🌸 СПА Пакет "Пролетно Озарение" 🌸 <br>
🔸 Настаняване във висок клас стая с изглед към морето <br>
🔸 Полудневен достъп до нашия спа център, включително сауна, парна баня и джакузи <br>
🔸 60-минутен масаж по избор (релаксиращ, ароматерапия или горещ камък) <br>
🔸 Подарък - козметичен продукт за домашно ползване<br>

Тази оферта е валидна за престой през месец май само, при предварително направени резервации. Не пропускайте възможността да се потопите в света на спокойствието и блаженството в нашия уютен спа център.<br><br>

За повече информация и резервации, свържете се с нас на plinafan@gmail.com. 	
</b></p>
</div>
</div>

</body>
</html>