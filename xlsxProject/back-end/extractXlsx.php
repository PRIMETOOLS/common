<?php

#$mysqli = new mysqli("localhost","root","","test");

#open CSV
$fh = fopen("../dataXlsx/export_.csv", "r");

while ($line = fgetcsv($fh, 15795, ","))
{
    $code = $line[0];
    $product = $line[1];
    $articyl = $line[2];
    $nameTovars = $line[3];
    $opis = $line[4];
    $opt = $line[5];

    // Insert the data into the sales table
    //$query = "INSERT INTO tovars SET id='".$code."',
    //    client_id='".$product."', order_time='".$articyl."',
	//    sub_total='".$nameTovars."', shipping_cost='".$nal."',
    //    total_cost='".$opt."'";

    #$result = $mysqli->query($query);
    echo $product. PHP_EOL;
}


#Закрываем
fclose($fh);
//$mysqli->close();

?>