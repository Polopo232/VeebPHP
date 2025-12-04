<?php
$servername = "localhost";
$kasutajanimi = "nikiforovn";
$parool = "yolopo123";
$andmebaasinimi = "nikiforovn";

$connection = new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$connection->set_charset("utf8");