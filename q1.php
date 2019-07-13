<?php
    $ano = $_GET["ano"];
    $indice = $ano-2010;
    $a = 0;
    if($ano>2016 or $ano<2011){
        echo "Não temos dados desse ano. Por favor, digite um ano de 2011 a 2016";
        $a++;
    }
    if($a==0){
        $f = fopen("violencia-domestica-df.csv",r);
        $d = fgetcsv($f);
        echo "<table>";
        echo "<tr><th>$d[0]</th>";
        echo "<th>Quantidade</th>";
        echo "</tr>";
        $d = fgetcsv($f);
        while($d){
            echo "<tr>";
            echo "<th>$d[0]</th>";
            echo "<th>$d[$indice]</th>";
            echo "</tr>";
            $d = fgetcsv($f);
        }
        echo "</table>";
    }
?>