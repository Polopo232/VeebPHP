<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opilane PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dateStyle.css">
</head>
<body>
<!--head-->
<?php
    include('header.php')
?>
<?php
    include('nav.php')
?>
<div class="flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include('content/' . $_GET["link"]);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img id="apple_img" src="image/jabloko.jpg" alt="Õuna">
        <button onclick="näitaKuupaevJaAeg()">Näita kuupäeva ja aega</button>
        <button onclick="kuniMärtsini()">Aeg kuni 15. märtsini</button>
        <div id="output"></div>
    </div>
</div>
<?php
    include('footer.php')
?>

<script src="js/dateJS.js"></script>
<script src="js/videoScript.js"></script>
</body>
</html>