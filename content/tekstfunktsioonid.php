<?php
// Funktsioon, mis puhastab URL ja jätab alles ainult ühe muutuja
function clearVarsExpect($url,$varname) {
    $url = basename($url);
    if (str_starts_with($url,"?")) {
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url,"?")."?$varname=".$_REQUEST[$varname];
}

echo "<div class=blocks-container>";
echo "<div class=blocks>";

echo "<h2>Tekst Funktsioonid</h2>";

$tekst = 'PHP on skriptikeel serveripoolne';
echo $tekst."<br><br>";

echo "Teksi pikkus - strlen() ".strlen($tekst). " tähemärgi<br><br>";
echo "Esimesed 6 tähte - substr() ".substr($tekst, 0,6)."<br><br>";
echo "Alates 6 tähest = ".substr($tekst, 6)."<br><br>";
echo "Sõnade arv lauses - str_word_count() | ".str_word_count($tekst). " sõna lauses<br><br>";
echo "Muudab kõik tähed suurteks - strtoupper() | ".strtoupper($tekst)."<br><br>";
echo "Muudab kõik tähed väikesteks - strtolower() | ".strtolower($tekst)."<br><br>";
echo "Iga sõna algab suure tähega - ucwords() | ".ucwords($tekst)."<br><br>";
echo ucwords(strtolower($tekst))."<br><br>";

$tekst2 = '        PHP on skriptikeel serveripoolne          ';
echo "|".$tekst2."|<br><br>";

// trim, ltrim, rtrim - eemaldavad tühikuid
echo "trim() - eemaldab tekstist tühikuid paremalt ja vasakult - ".trim($tekst2)."<br><br>";
echo "ltrim() - eemaldab tekstist tühikuid vasakult - ".ltrim($tekst2)."<br><br>";
echo "rtrim() - eemaldab tekstist tühikuid paremalt - ".rtrim($tekst2)."<br><br>";

echo "</div>";
echo "<div class=blocks>";

echo "<h3>Tekst kui massiiv</h3>";
echo "1.täht massiivist - ".$tekst[0]."<br><br>";
echo "5. täht massiivist - ".$tekst[4]."<br><br>";

// Märab iga sõna eraldi massiivi elemendina
print_r(str_word_count($tekst, 1)); // Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
echo "<br><br>";

$syna = str_word_count($tekst, 1);
echo "Massiivist 2 sõna - ".$syna[2]."<br><br>";

// Määrab, mis sümbol on iga sõna alguses
print_r(str_word_count($tekst, 2)); // Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )
echo "<br><br>";

echo "</div>";
echo "<div class=blocks>";

echo "<h2> Tekst asendamine - replace()</h2><br>";

$asendus = 'Javascript';
echo substr_replace($tekst, $asendus, 0, 3)."<br><br>";

// Isa vaheta serveripoolne - kliendipoolne
$otsi = array("PHP", "Javascript");
$asendav = array('Javascript', 'kliendipoolne');
echo str_replace($otsi, $asendav, $tekst);

echo "</div>";
echo "<br><br>";

echo "<div class=blocks>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2><br>";

// tee 5-6 tekstfunktsiooni mis aitavad aru saada, milline linnanimi oli
$linn = "Rakvere";

echo "<li>Esimene kaks täht ".substr($linn, 0, 2);
echo "<li>".strlen($linn)." täht";
echo "<li>Viimane taht ".substr($linn, 6);
echo "<li>".substr_replace($linn, "****", 1, 4);
echo "</li></ol>";
?>

    <form name="tekstkontroll" action="<?=clearVarsExpect($_SERVER['REQUEST_URI'], "link")?>" method="post">
        <label for="linn">Sisesta linnanimi</label>
        <input type="text" id="linn" name="linn">
        <input type="submit" value="Kontroll">
    </form>

<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == $linn){
        echo $_REQUEST["linn"]." on õige !";
    } else {
        echo $_REQUEST["linn"]." on vale !";
    }
}

echo "</div>";
echo "</div>";