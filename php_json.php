<?php
$array = Array (
    "0" => Array (
        "id" => "01",
        "nombre" => "Imano1",
        "apellido" => "Arredondo",
        "edad" => "21",
        "grado" => "7"
    ),
    "1" => Array (
        "id" => "02",
        "nombre" => "Juan",
        "apellido" => "Flores",
        "edad" => "31",
        "grado" => "2"
    ),
    "2" => Array (
        "id" => "03",
        "nombre" => "Rene",
        "apellido" => "Lopez",
        "edad" => "23",
        "grado" => "5"
    ),
);

$json = json_encode($array);
$bytes = file_put_contents("data.json", $json);
echo "The number of bytes written are 221.";
?>