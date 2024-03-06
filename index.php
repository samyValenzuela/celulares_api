<?php
$celular1 = [
    "marca" => "iPhone",
    "modelo" =>"iPhone 11" ,
    "color" => "negro",
    "precio"=>10499,
    "sistema operativo"=>"iOS",
    "capacidad de gb"=>64,
    "pantalla touch en pulgadas"=>6.1,
    "peso en gramos" =>194 ,
    "altura cm"=>15.09,
    "ancho cm"=7.57,
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
    "marca" => "Samsung",
    "modelo" =>"s23 ultra" ,
    "color" => "Lavanda",
    "precio"=>30999,
    "sistema operativo"=>"Android",
    "capacidad de gb"=>512,
    "pantalla touch en pulgadas"=>6.8,
    "peso en gramos" =>160,
    "altura mm"=>163.4,
    "ancho mm"=78.1,
    "grosor mm"=>8.9,
    "camara"=>"200 MP",
    "face id"=>(true),
    "gps"=>(true),
    "asistende de voz"=>"Bixby",
    "resistente al agua"=>(true),
    "duracion de bateria"=>"10 horas",
    "reproduccion de video"=>"27 horas",
    "reproduccion de audio"=>"71 horas",
    "Android"=>"13 One Ul 5.1", 
    "carga rapida"=>"1 hora y 10 minutos para el 99%",
];


    
    $celular = [
        $celular1,
        $celular2,
];

$celular_by_modelo = [];

foreach ($celular as $celu) {

    $celulat_by_modelo[$celu["modelo"]] = $celu;
}


if (isset($_GET["modelo"])) {
  
    $model = $_GET["modelo"];
 
    echo json_encode($celular_by_modelo[$model]);
} else {

    echo json_encode($celular);
}
