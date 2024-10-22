<?php

require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{

    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }

    public function obtenerVistaControlador(){
        if (isset($_GET['views'])) {                                    //resiviendo la informacion de htacces - isset valida si existe o no 
            $ruta = explode("/", $_GET['views']);                //
            $respuesta = vistaModelo::obtener_vista($ruta[0]);   //lo obtenido se almacena en una variable respuesta
            
        }else {
            $respuesta = "login";                                //
        }
        return $respuesta;
    }
}

?>