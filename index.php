<?php
$celular1 = [
    "marca" => "",
    "modelo" => ,
    "" => ),
    "peso" => ,
];

$celular2 = [
    "nombre" => "Persona 2",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$celularn3 = [
    "nombre" => "Persona 3",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$celular4 = [
    "nombre" => "Persona 4",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),

    ];
    
    $celular = [
        $celular1,
        $celular2,
        $celular3,
        $celular4,
];

$celular_by_modelo = [];

foreach ($celular as $celu) {

    $people_by_name[$celu["modelo"]] = $celu;
}


if (isset($_GET["modelo"])) {
  
    $model = $_GET["modelo"];
 
    echo json_encode($celular_by_modelo[$model]);
} else {

    echo json_encode($celular);
}
