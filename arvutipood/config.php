<?php
//kasutame kohalik arvuti
$servernimi = 'localhost';
$kasutajanimi = 'arvutipood';
$parool='12345';
$andmebaasinimi = 'arvutipood';
$connection = new mysqli($servernimi, $kasutajanimi, $parool, $andmebaasinimi);
$connection->set_charset("utf8");

