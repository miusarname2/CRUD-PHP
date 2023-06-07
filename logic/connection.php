<?php

// $credenciales["http"]["method"] = "POST";
// $credenciales["http"]["header"] = "Content-type: application/json";
// $data = [
//     "cc"=>"123",
//     "nombre"=> "Miguel",
//     "apelldio"=> "Castro",
//     "edad"=> 23
// ];
// $data = json_encode($data);
// $credenciales["http"]["content"] = $data;
// $config = stream_context_create($credenciales);

// $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
// print_r($_DATA);

class DbInteraction{
    public function obtenData(){
    $credenciales["http"] = [];
    $credenciales["http"]["method"] = "GET";

    $config = stream_context_create($credenciales);


    $_DATA = file_get_contents("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta", false, $config);
    return($_DATA);
}




}