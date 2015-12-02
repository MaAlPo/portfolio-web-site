<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1025"> <!-- wrapper + 20 -->
<!--    <meta name="viewport" content="device-width"> <!-- responsive -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/fotorama-4.6.4/fotorama.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Contacts</title>
</head>
<body>
    <div class="wrapper">

        <div class="container">
            <header>
                <div class="title">
                    <div class="author">
                        <span>Firstname</span>
                        <span>Lastname</span>
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
                <div class="left_col">
                    <div class="contacts">
                        <h2>Contacts</h2>
                        <span>Phone</span>
                        <span>+7 123 456789</span>
                        <span>Email</span>
                        <span>qwerty@qwerty.com</span>
                        <span>Pinterest</span>
                        <a href="http://pinterest.com/"><span>qwerty qwerty</span></a>
                        <span>Vkontakte</span>
                        <a href="http://vk.com/"><span>qwerty qwerty</span></a>
                        <span>Facebook</span>
                        <a href="http://facebook.com/"><span>qwerty qwerty</span></a>
                        <span>Instagram</span>
                        <a href="http://instagram.com/"><span>qwerty qwerty</span></a>
                    </div>
                </div>
                <div class="right_col">
                    <div class="message">
                        <h2>Send a message</h2>
                        <form action="mail.php" method="POST">
                            <span>Your name: </span>
                            <input id="name" name="name" placeholder="Enter Your Name Here" type="text"/>
                            <span>Your email: </span>
                            <input id="email" name="email" placeholder="Enter Your Email Here" type="email"/>
                            <span>Your message: </span>
                            <textarea name="message" id="message" placeholder="Enter Your Message Here"></textarea>
                            <button type="submit">Send</button>
                        </form>
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