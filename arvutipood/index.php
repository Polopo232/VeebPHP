<?php
require('config.php');
require("nav.php");

global $connection;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Arvutipood</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Tere tulemast!</h2>
    <p>
        Tere! Me müüme arvuteid, komponente ja tarvikuid.
        Meie poest leiate laia valiku sülearvuteid, lauaarvuteid, monitore, komponente ja tarkvara.
        Pakume kvaliteetseid tooteid taskukohaste hindadega ja oleme alati valmis aitama.
    </p>
</div>

<div class="card">
    <p>Ja me müüme selliseid tooteid nagu:</p>
</div>

<div class="tooted_block">
    <div class="tooted_container">
        <ul>
            <?php
            $kask = $connection->prepare("SELECT tootedID, nimi, photo FROM tooded");
            $kask->execute();
            $kask->bind_result($id, $nimi, $photo);

            while($kask->fetch()){
                echo "<li>
                    <div class='product-card'>
                        <img src='".htmlspecialchars($photo)."' alt='toode' class='product-img'>
                        <p>".htmlspecialchars($nimi)."</p>
                    </div>
                </li>";
            }
            ?>
        </ul>
    </div>
</div>

</body>
</html>
<?php
$connection->close();
require("footer.php");
?>