
<?php 

//Leemos el JSON
$alumnos = file_get_contents("https//:10.10.49.77/Fernando/data.php");
$JSON_alumnos = json_decade($alumnos, true);
print_r($JSON_alumnos);
foreach ($JSON_alumnos as $alumno);{
    $alumno[0];
    echo $alumno."<cbr>";
}
?>