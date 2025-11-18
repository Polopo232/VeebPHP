<?php
echo "<h2>Aja funktsiooni</h2>";
//timezone, juhul kui timezone ei ole määratud, sis php näitab localhost'i aeg
date_default_timezone_set("Europe/Vilnius");
echo "<div class='blocks-container'>";
echo "<div class='blocks'>";
echo "<h3>Uued funktsioonid</h3>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone List</a>
<br>";
echo "time() - aeg sekundides - ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s"), time();
echo "<br>";
echo "date('d.m.Y G:i:s'), time()";
echo "<br>";
echo "</div>";
echo "<div class='blocks'>";
echo "<h3>Süntax</h3>";
echo "<pre>   
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohale arv
H - tund
G - 24h format
i - minutid 0..59
s - sekundid 0...59
</pre>
<br>
";
echo "</div>";
echo "<div class='blocks'>";
echo "
<strong>
    Tehted kuupäeva
</strong>
<br>";
echo "+1 min=".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund= time()+60*60 = ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 paev = ".date("d.m.Y G:i:s", time()+60*60*24);
echo "</div>";
echo "<div class='blocks'>";
echo "<br> <strong>Kuupäeva geniriremine</strong> <br>";
echo "mkime(tunndid, minutid, sekundid, kuu, paev, aastat)";
echo "<br> Minu sunnipäev: ".date("d-m-Y-G-i-s",mktime(8,15,34,3,15,2008));
echo "<br> Massiivi abil näidata kuu nimega <br>";
$kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'december');
$aasta = date('Y');
$paev = date('d');
$kuu = $kuud[date('n')];
echo "Täna on: ".$paev.' '.$kuu.' '.$aasta;
echo "</div>";
echo "</div>";


