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
    //$query = "INSERT INTO goods SET id='".$code."',
    //    client_id='".$product."', order_time='".$articyl."',
	//    sub_total='".$nameTovars."', shipping_cost='".$nal."',
    //    total_cost='".$opt."'";

    #$result = $mysqli->query($query);
    echo $optT. PHP_EOL;
}

#Заносим данные о последнем изменении в лог
exec('cd ../sh/; sh newLog.sh '.$argname);
#Заносим данные о последнем изменении в лог


#Закрываем
fclose($fh);
//$mysqli->close();

?>