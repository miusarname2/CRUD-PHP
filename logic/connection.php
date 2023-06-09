<?php

class DbInteraction{

    protected $url;

    public function __construct($url) {
        $this->url = $url;
    }
    
    public function getData(){
    $credenciales["http"] = [];
    $credenciales["http"]["method"] = "GET";

    $config = stream_context_create($credenciales);


    $_DATA = file_get_contents($this->url, false, $config);
    return(json_decode($_DATA, true));
    }

    public function postData(mixed $datas){
        header('Content-Type: application/json');

    $credenciales["http"]["method"] = "POST";
    $credenciales["http"]["headers"]["Content-Type"] = "application/json";
    $data = $datas;
    // $data = http_build_query($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents($this->url, false, $config);
    print_r(json_decode($_DATA , true));
    }

    public function deleteData(mixed $cedula){
        $dataToSearch=$this->getData();

        $cedulaToFind = $cedula;
        $matchingElement = null;

        foreach ($dataToSearch as $element) {
            if ($element['Cedula'] == $cedulaToFind) {
                $matchingElement = $element;
                break;
            }
        }

        header('Content-Type: application/json');

        $credenciales["http"]["method"] = "DELETE";
        $config = stream_context_create($credenciales);

        $_DATA = file_get_contents($this->url."/".$matchingElement["id"], false, $config);
        return json_decode($_DATA , true);
    }


    //Pendiente...
    public function putData(mixed $datas, mixed $id){
        header('Content-Type: application/json');

    $credenciales["http"]["method"] = "PUT";
    $credenciales["http"]["headers"]["Content-Type"] = "application/json";
    $data = $datas;
    // $data = http_build_query($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents($this->url."/".$id, false, $config);
    print_r(json_decode($_DATA , true));
    }

    public function getUserData(mixed $cedula){
        $dataToSearch=$this->getData();

        $cedulaToFind = $cedula;
        $matchingElement = null;

        foreach ($dataToSearch as $element) {
            if ($element['Cedula'] == $cedulaToFind) {
                $matchingElement = $element;
                break;
            }
        }

    $credenciales["http"] = [];
    $credenciales["http"]["method"] = "GET";

    $config = stream_context_create($credenciales);


    $_DATA = file_get_contents($this->url."/".$matchingElement["id"], false, $config);
    return(json_decode($_DATA, true));
    }
}