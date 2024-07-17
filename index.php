<?php
// la diferencia de REQUIRE / INCLUDE. INCLUDE trae los errores incluidos y los muestra

// lo enlazamos a functions.php

require "functions.php";
head_practice("TRANSPORTES", "Just a practice page with functions", "Zayleth Vegas", "styles_1.css");

header_practice("https://d1ih8jugeo2m5m.cloudfront.net/2022/07/logistica-y-transporte-1200x685.jpg");

body_cal();
echo "Result = ".sum(@$_POST['n1'], @$_POST['n2'], @$_POST ['captcha'], @$_POST['codigo']);

// en PHP se concatena con el .

footer();
?>