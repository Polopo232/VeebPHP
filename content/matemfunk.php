<?php

echo "<div class=blocks-container>";
echo "<div class=blocks>";

echo "<h2>Matemallised tehted</h2> <br>";

$arv1 = 120;
$arv2 = 20;

echo "Esimene arv on ".$arv1.", teine arv on ".$arv2."<br>";
echo "+ Liitmine = ".($arv1 + $arv2)."<br>";
echo "- Lahutamine = ".($arv1 - $arv2)."<br>";
echo "* Korrutise tulemus = ".$arv1*$arv2."<br>";
echo "/ Jagatise tulemus = ".$arv1/$arv2."<br>";

echo "</div>";
echo "<div class=blocks>";

echo "<h3>Matemaatilised funktsioonid</h3><br>";
echo "Väiksem arv: ".min($arv1,$arv2)."<br>";
echo "Suurem arv: ".max($arv1,$arv2)."<br>";
echo "round(arv) - Ümerdamine täisarvani: ".round(1.5)."<br>";
echo "ceil(arv) - Ümerdab jargmise arvuuni: ".ceil(1.5)."<br>";
echo "floor(arv) - Ümerdab allapoole täisarvani: ".floor(1.5)."<br>";
echo "Ümerdab üks komma kohtani: ".round($arv1, 1)."<br>";
echo "Juhustlik arv: ".rand($arv1,$arv2)."<br>";
echo "Astendamine: ".pow($arv1,$arv2)."<br>";
echo "sqrt(arv) - Ruutjuur: ".sqrt($arv1)."<br>";
echo "Pi: ".pi()."<br>";

echo "</div>";
echo "<div class=blocks>";

echo "<h2>Omistamine operatorid</h2><br>";
$x = 10;
$y = 20;

echo "Suurendamine uhevõra: <br>";
$x++;
echo $x."<br>";
echo "Vähendamine uhevõra: <br>";
$x--;
echo $x."<br>";
// x = x * y
$x *= $y;
echo $x."<br>";
// x = x / y
$x /= $y;
echo $x."<br>";

$nimi = "Nikita";
$perenimi = "Nikiforov";
//$nimi .= $perenimi;
echo $nimi."<br>";
$format = "Tere %s %s, arv x: %d";
printf($format,$perenimi,$nimi,$x);

echo "</div>";
echo "<div class=blocks>";

//5-6
echo "<h2>Arv mõistatus. Arva ära arvu</h2><br>";

$arv_1 = 67;
$arv_2 = 5.2;

echo "arv 1 + arv 2 = ".($arv_1 + $arv_2)."<br>";
echo "arv 1 = round(sqrt(arv_1)) = ".round(sqrt($arv_1))."<br>";
echo "round(arv 2) = ".round($arv_2)."<br>";
echo "arv 1 * pi = ".($arv_1 * pi())."<br>";
echo "sqrt((arv 1 + 8) + (arv 2 + 0.8)) = ".sqrt(($arv_1 + 8) + ($arv_2 + 0.8));

echo "</div>";
echo "</div>";  

echo "<br> <br> <br>";
?>

    <form name="tekstkontroll" action="matemfunk.php" method="post">
        <label for="arv1">Sisesta arv 1</label>
        <input type="text" id="arv1" name="arv1">
        <input type="submit" value="Kontroll">
    </form>
    <br>
    <form name="tekstkontroll_2" action="matemfunk.php" method="post">
        <label for="arv2">Sisesta arv 2</label>
        <input type="text" id="arv2" name="arv2">
        <input type="submit" value="Kontroll">
    </form>

<?php
if(isset($_REQUEST["arv1"])){
    if($_REQUEST["arv1"] == $arv_1){
        echo $_REQUEST["arv1"]." on õige !";
    } else {
        echo $_REQUEST["arv1"]." on vale !";
    }
}
if(isset($_REQUEST["arv2"])){
    if($_REQUEST["arv2"] == $arv_2){
        echo $_REQUEST["arv2"]." on õige !";
    } else {
        echo $_REQUEST["arv2"]." on vale !";
    }
}