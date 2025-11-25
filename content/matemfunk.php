<?php

echo "<h2>Matemallised tehted</h2> <br>";

$arv1 = 120;
$arv2 = 20;

echo "Esimene arv on ".$arv1.", teine arv on ".$arv2."<br>";
echo "+ Liitmine = ".($arv1 + $arv2)."<br>";
echo "- Lahutamine = ".($arv1 - $arv2)."<br>";
echo "* Korrutise tulemus = ".$arv1*$arv2."<br>";
echo "/ Jagatise tulemus = ".$arv1/$arv2."<br>";

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

echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2><br>";
