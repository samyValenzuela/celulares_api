<?php
$person1 = [
    "nombre" => "Persona 1",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$person2 = [
    "nombre" => "Persona 2",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$person3 = [
    "nombre" => "Persona 3",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$person4 = [
    "nombre" => "Persona 4",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),

];

$people = [
    $person1,
    $person2,
    $person3,
    $person4
];

$people_by_name = [];

foreach ($people as $person) {

    $people_by_name[$person["nombre"]] = $person;
}


if (isset($_GET["nombre"])) {
  
    $name = $_GET["nombre"];
 
    echo json_encode($people_by_name[$name]);
} else {

    echo json_encode($people);
}
