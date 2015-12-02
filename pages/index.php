<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1025"> <!-- wrapper + 20 --> 
<!--	<meta name="viewport" content="device-width"> <!-- responsive -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="js/fotorama-4.6.4/fotorama.css">
	<link rel="stylesheet" href="css/style.css">

    <title>Home</title>
</head>
<body>
	<div class="wrapper">
		
		<div class="screen">
				<div class="titleScreen">
					<div class="authorScreen">
                        <span>Firstname</span><br/>
                        <span>Lastname</span>
					</div>
					<div class="linkScreen">
						<i></i>				
					</div>
				</div>

				<div class="fotorama" data-transition="slide"
     data-clicktransition="crossfade" data-nav="false" data-autoplay="7000" data-loop="true">

<?php

// получаем файлы из папки content/titles для заставки
    $files = glob("content/titles/*.jpg");
// выводим их
    foreach($files as $file){
	    echo "<img src='{$file}' alt='{$file}'>";
    }

?>

				</div>
		</div>

		<div class="container">
			
			<header>
				<div class="title">
					<div class="author">
                        <span>Firstname</span>
                        <span>Lastname</span>
					</div>
					<div class="link">
					<i></i>
					</div>
				</div>
				<div class="nav">
					<ul>
						<li><a href="index.php">home</a></li>
						<li><a href="info.php">info</a></li>
						<li><a href="contacts.php">contacts</a></li>
					</ul>
				</div>
			</header>	
				
			<div class="content">
				<div class="photo">
<?php

// получаем файлы из папки content/preview
    $files = glob("content/preview/*.jpg");
// выводим их
    foreach($files as $file) {
        $catalog = explode("/", $file);
        $catalog = $catalog[count($catalog) - 1];
        $catalog = explode(".", $catalog);
        $catalog = $catalog[0];

        echo "<a id='catalog' href='item.php?catalog=$catalog'><div class='item'><img src='{$file}' alt='{$file}'></div></a>";
    }

?>
				</div>
            </div>
        </div>

        <div class="empty"></div>
    </div>
    <footer>
        &copy; 2015 Teplinsky. All Rights Reserved.
    </footer>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/fotorama-4.6.4/fotorama.js"></script>
<script src="js/script.js"></script>
</body>
</html>