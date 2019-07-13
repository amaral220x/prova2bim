<?php
    $ano = $_GET["ano"];
    $indice = 2016 - $ano;
    $f = fopen("violencia-domestica-df.csv",r);
    $d = fgetcsv($f);
    while($d){
        echo "$d[0]  $d[indice]"
    }
?>