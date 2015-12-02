<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1025"> <!-- wrapper + 20 -->
<!--    <meta name="viewport" content="device-width"> <!-- responsive -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/fotorama-4.6.4/fotorama.css">
    <link rel="stylesheet" href="css/style.css">

    <title>
        <?php
        $catalog = $_GET['catalog'];

        echo $catalog;
        ?>
    </title>

</head>
<body>
    <div class="wrapper">

        <div class="container">
            <header>
                <div class="titleItem">
                    <a href="index.php">back</a>
                </div>
            </header>

            <div class="content">
                <div class="photo">
                    <div class="fotorama" data-nav="thumbs" data-loop="true">
<?php
// получаем все файлы из папки проекта
    $files = glob("content/projects/$catalog/*.jpg");
// выводим фотографии из папки проекта
    foreach($files as $file) {
        echo "<img src='$file' alt='$file'>";
    }
?>
                    </div>
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

