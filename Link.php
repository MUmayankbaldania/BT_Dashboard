<?php 
    $temp = $_GET['temp'];
    $hum = $_GET['hum'];
    $waterlevel = $_GET['waterlevel'];



    $json = ["Temperature" => "$temp",
            "Humidity" => "$hum",
            "WaterLevel" => "$waterlevel"];

    $encoded = json_encode($json);
    file_put_contents('Output.json',$encoded)
?>
