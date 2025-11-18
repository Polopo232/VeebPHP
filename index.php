<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opilane PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dateStyle.css">
    <script src="js/dateJS.js"></script>
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
        <img src="image/jabloko.jpg" alt="Õuna">
    </div>
</div>
<?php
    include('footer.php')
?>

</body>
</html>