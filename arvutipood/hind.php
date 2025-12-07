<?php
global $connection;
require('config.php');
require("nav.php");

$kask = $connection->prepare("SELECT tootedID, nimi, hind, kirjeldus, linn, photo FROM tooded");
$kask->bind_result($tootedID, $nimi, $hind, $kirjeldus, $linn, $photo);
$kask->execute();
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tooted nimekiri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tooted</h1>

<div id="sisukiht">
    <table>
        <thead>
        <tr>
            <th>Foto</th>
            <th>Nimi</th>
            <th>Kirjeldus</th>
            <th>Hind</th>
            <th>Linn</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($kask->fetch()) {
            echo "<tr>";
            echo "<td><img src='" . htmlspecialchars($photo) . "' alt='Product Image' style='max-width: 150px;'></td>";
            echo "<td>" . htmlspecialchars($nimi) . "</td>";
            echo "<td>" . htmlspecialchars($kirjeldus) . "</td>";
            echo "<td>" . htmlspecialchars($hind) . " €</td>";
            echo "<td>" . htmlspecialchars($linn) . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$connection->close();
require("footer.php");
?>