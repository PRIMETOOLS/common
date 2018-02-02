<?php

$argname = $argv[1];
#$mysqli = new mysqli("localhost","root","","test");

#open CSV
$fh = fopen("../dataXlsx/dataExport.csv", "r");
#open CSV

while ($line = fgetcsv($fh, 15795, ","))
{
    $code = $line[1];
    $product = $line[2];
    $articyl = $line[3];
    $nameTovars = $line[4];
    $opis = $line[5];
    $optF = $line[6];
    $optT = $line[7];
    $optTU = $line[8];
    $optO = $line[9];


    

    // Insert the data into the sales table
    #$result = $mysqli->query("SET NAMES 'utf8'");
    #$result = $mysqli->query("INSERT INTO goods SET code=".$code.", articul='".$articyl."', name='".$product."',availability=".$opis.", dealer5=".$optF.",dealer3=".$optT.", dealer2=".$optTU.", dealer1=".$optO);

    echo $nameTovars. PHP_EOL;
}

#Заносим данные о последнем изменении в лог
exec('cd ../sh/; sh newLog.sh '.$argname);
#Заносим данные о последнем изменении в лог


#Закрываем
fclose($fh);
$mysqli->close();

?>