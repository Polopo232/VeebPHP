<?php
echo "
<h2>Tekst Funktsioonid</h2>";
$tekst = 'PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "Teksi pikkus - strlen() ".strlen($tekst). " tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte - substr() ".substr($tekst, 0,6);
echo "<br>";
echo "Alates 6 tähest = ".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses - str_word_count() | ".str_word_count($tekst). " sõna lauses";
echo "<br>";
echo "Muudab kõik tähed suurteks - strtoupper() | ".strtoupper($tekst);
echo "<br>";
echo "Muudab kõik tähed väikesteks - strtolower() | ".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega - ucwords() | ".ucwords($tekst);
echo "<br>";
echo "".ucwords(strtolower($tekst));
echo "<br>";
$tekst2 = '        PHP on skriptikeel serveripoolne          ';
echo "|".$tekst2."|";
echo "<br>";
//trim, ltrim, rtrim
echo "trim() - eemaldab tekstist tühikuid paremalt ja vasakult - ".trim($tekst2);
echo "<br>";
echo "ltrim() - eemaldab tekstist tühikuid vasakult - ".ltrim($tekst2);
echo "<br>";
echo "rtrim() - eemaldab tekstist tühikuid paremalt - ".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "1.täht massiivist - ".$tekst[0];
echo "<br>";
echo "5. täht massiivist - ".$tekst[4];
echo "<br>";
//Märab ida sõna nagu eraldi element
print_r(str_word_count($tekst, 1)); //Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
echo "<br>";
$syna = str_word_count($tekst, 1);
echo "Massiivist 2 sõna - ".$syna[2];
echo "<br>";
// Määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst, 2)); //Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )
echo "<br>";
echo "<h2> Tekst asendamine - replace()</h2> <br>";
$asendus = 'посхалка';
echo substr_replace($tekst, $asendus, 0, 3);
echo "<br>";
// Isa vaheta serveripoolne - kliendipoolne
$otsi = array("PHP", "посхалка");
$asendav = array('Javascript', 'kliendipoolne');

echo str_replace($otsi, $asendav, $tekst);

echo "<br>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2> <br>";
// tee 5-6 tekstfunktsiooni mis aitavad aru saada miline linnanimi oli.

$linn = "Rakvare";

echo "<li>Esimene kaks täht ".substr($linn, 0, 2);
echo "<li>".strlen($linn)." täht";
echo "<li>Viimane taht ".substr($linn, 6);
echo "<li>".substr_replace($linn, "****", 1, 4);

echo "</li></ol>";
?>

<form name="tekstkontroll" action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn", name="linn">
    <input type="submit" value="kontroll">
</form>

<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == $linn){
        echo $_REQUEST["linn"]." on õige !";
    } else {
        echo $_REQUEST["linn"]." on vale !";
    }
}




