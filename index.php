<?php
$celular1 = [
    "marca" => "iPhone",
    "modelo" =>"iPhone 11" ,
    "color" => "negro",
    "precio=>10499,
    "sistema operativo"=>"iOS",
    "capacidad de gb"=>64,
    "pantalla touch en pulgadas"=>6.1,
    "peso en gramos" =>194 ,
    "altura cm"=>15.09,
    "ancho cm"=7.57",
    "grosor cm"=>.83,
    "camara"=>"12 mpx",
    "face id"=>(true),
    "gps"=>(true),
    "asistende de voz"=>"Siri",
    "resistente al agua"=>(true),
    "duracion de bateria"=>"15 horas",
    "reproduccion de video"=>"17 horas",
    "reproduccion de audio"=>"65 horas",
    "iOS"=>"15", 
    "carga rapida"=>"hasta 50% en 30 minutos",
];

$celular2 = [
    "nombre" => "Persona 2",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];


    
    $celular = [
        $celular1,
        $celular2,
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
