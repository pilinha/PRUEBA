<?php
$alumno = array (
			'name' => 'Pilar',
			'lastname' => 'Iglesias',
			'email' => 'pili@hotmail.com',
			'bDate' => 12/12/2012,
			FALSE,
			123,
			0 => "MAS DATOS",
			"8" => "y este",
			5.6 => "jajajaj",
			5 => "OTRO DATO",
			"ultimo dato",
			array("rojo", "verde", "naranja")
);

echo "<pre>";
print_r ($alumno);
echo "</pre>";

echo "<hr/>";

include 'functions.php';

muestraArray($alumno);
ksort($alumno);
echo "<pre>";
print_r ($alumno);
echo "</pre>";

