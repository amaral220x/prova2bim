<?php
    $local = $_POST["local"];
    $f = fopen("violencia-domestica-df.csv",r);
    $d = fgetcsv($f);
    $soma = 0;
    $i = 0;
    $aux = 2010;
    echo "<table>";
    echo "<tr><th>$local</th>";
    for($i=0; $i<6; $i++){
        $aux++;
        echo "<th>$aux</th>";
    }
    echo "<th>Soma</th>";
    echo "</tr>";
    echo "<tr>";
    $d = fgetcsv($f);
    while($d){
        if($d[0]==$local){
            echo "<th></th>";
            for($i=1; $i<7; $i++){
                echo "<th>$d[$i]</th>";
                $soma += $d[$i];
            }
            echo "<th>$soma</th>";
            echo "</tr>";
            break;
        }
        $d = fgetcsv($f);
    }
?>