<?php 
    $temp = $_GET['temp'];
    $hum = $_GET['hum'];
    $waterlevel = $_GET['waterlevel'];
    $pump = $_GET['pump'];
    $soil1 = $_GET['soil1'];
    $soil2 = $_GET['soil2'];
    $soil3 = $_GET['soil3'];
    $valve1 = $_GET['valve1'];
    $valve2 = $_GET['valve2'];
    $valve3 = $_GET['valve3'];


    $json = ["Temperature" => "$temp",
            "Humidity" => "$hum",
            "WaterLevel" => "$waterlevel",
            "Pump" => "$pump",
            "Soil1" => "$soil1",
            "Soil2" => "$soil2",
            "Soil3" => "$soil3",
            "Valve1" => "$valve1",
            "Valve2" => "$valve2",
            "Valve3" => "$valve3"];

    $encoded = json_encode($json);
    file_put_contents('Output.json',$encoded)
?>