<?php
global $connection;
require('config.php');
require("nav.php");

if (isset($_REQUEST["uusleht"])) {
    $kask = $connection->prepare("INSERT INTO tooded (hind, kirjeldus, linn, photo, nimi) VALUES (?, ?, ?, ?, ?)");
    $kask->bind_param("dssss", $_REQUEST["hind"], $_REQUEST["kirjeldus"], $_REQUEST["linn"], $_REQUEST["photo"], $_REQUEST["nimi"]);
    $kask->execute();
    header("Location: " . $_SERVER["PHP_SELF"]);
    $connection->close();
    exit();
}

if (isset($_REQUEST["kustutusid"])) {
    $kask = $connection->prepare("DELETE FROM tooded WHERE tootedID=?");
    $kask->bind_param("i", $_REQUEST["kustutusid"]);
    $kask->execute();
}

if (isset($_REQUEST["muutmisid"])) {
    $kask = $connection->prepare("UPDATE tooded SET hind=?, kirjeldus=?, linn=?, photo=?, nimi=? WHERE tootedID=?");
    $kask->bind_param("dssssi", $_REQUEST["hind"], $_REQUEST["kirjeldus"], $_REQUEST["linn"], $_REQUEST["photo"], $_REQUEST["nimi"], $_REQUEST["muutmisid"]);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tooted lehel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tooted lisamine, kustutamine ja uuendamine</h1>

<div class="clearfix">
    <div id="menyykiht">
        <h2>Tooted</h2>
        <ul>
            <?php
            $kask = $connection->prepare("SELECT tootedID, kirjeldus FROM tooded");
            $kask->bind_result($tootedID, $kirjeldus);
            $kask->execute();
            while ($kask->fetch()) {
                echo "<li><a href='" . $_SERVER["PHP_SELF"] . "?id=$tootedID'>" . htmlspecialchars($kirjeldus) . "</a></li>";
            }
            ?>
        </ul>
        <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa uus toode</a>
    </div>
    
    <div id="sisukiht">
        <?php
        if (isset($_REQUEST["id"])) {
            $kask = $connection->prepare("SELECT tootedID, hind, kirjeldus, linn, photo, nimi FROM tooded WHERE tootedID=?");
            $kask->bind_param("i", $_REQUEST["id"]);
            $kask->bind_result($tootedID, $hind, $kirjeldus, $linn, $photo, $nimi);
            $kask->execute();

            if ($kask->fetch()) {
                if (isset($_REQUEST["muutmine"])) {
                    echo "
                    <form action='" . $_SERVER["PHP_SELF"] . "'>
                        <input type='hidden' name='muutmisid' value='$tootedID'/>
                        <h2>Toote muutmine</h2>
                        <dl>
                            <dt><label for='nimi'>Nimi:</label></dt>
                            <dd><input type='text' id='nimi' name='nimi' value='" . htmlspecialchars($nimi) . "'/></dd>
                            
                            <dt><label for='hind'>Hind:</label></dt>
                            <dd><input type='text' id='hind' name='hind' value='" . htmlspecialchars($hind) . "'/></dd>

                            <dt><label for='kirjeldus'>Kirjeldus:</label></dt>
                            <dd><input type='text' id='kirjeldus' name='kirjeldus' value='" . htmlspecialchars($kirjeldus) . "'/></dd>

                            <dt><label for='linn'>Linn:</label></dt>
                            <dd><input type='text' id='linn' name='linn' value='" . htmlspecialchars($linn) . "'/></dd>

                            <dt><label for='photo'>Foto (ссылка на изображение):</label></dt>
                            <dd><input type='text' id='photo' name='photo' value='" . htmlspecialchars($photo) . "'/></dd>
                        </dl>
                        <input type='submit' value='Muuda' />
                    </form>
                    ";
                } else {
                    echo "<h2>" . htmlspecialchars($nimi) . "</h2>";
                    echo "<p>Kirjeldus: " . htmlspecialchars($kirjeldus) . "</p>";
                    echo "<p>Hind: " . htmlspecialchars($hind) . "</p>";
                    echo "<p>Linn: " . htmlspecialchars($linn) . "</p>";
                    echo "<p><img src='" . htmlspecialchars($photo) . "' alt='Product Image'></p>";
                    echo "<br /><a href='" . $_SERVER["PHP_SELF"] . "?kustutusid=$tootedID'>Kustuta</a> ";
                    echo "<a href='" . $_SERVER["PHP_SELF"] . "?id=$tootedID&amp;muutmine=jah'>Muuda</a>";
                }
            } else {
                echo "<p>Vigased andmed.</p>";
            }
        }

        if (isset($_REQUEST["lisamine"])) {
            ?>
            <form action="<?=$_SERVER["PHP_SELF"]?>">
                <input type="hidden" name="uusleht" value="jah" />
                <h2>Uue toote lisamine</h2>
                <dl>
                    <dt><label for="nimi_uus">Nimi:</label></dt>
                    <dd><input type="text" id="nimi_uus" name="nimi"></dd>

                    <dt><label for="hind_uus">Hind:</label></dt>
                    <dd><input type="number" id="hind_uus" name="hind"></dd>

                    <dt><label for="kirjeldus_uus">Kirjeldus:</label></dt>
                    <dd><input type="text" id="kirjeldus_uus" name="kirjeldus"></dd>

                    <dt><label for="linn_uus">Linn:</label></dt>
                    <dd><input type="text" id="linn_uus" name="linn"></dd>

                    <dt><label for="photo_uus">Foto (link):</label></dt>
                    <dd><input type="text" id="photo_uus" name="photo"></dd>
                </dl>
                <input type="submit" value="Sisesta" />
            </form>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>
<?php
$connection->close();
require("footer.php");
?>