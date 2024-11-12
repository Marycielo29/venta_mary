<?php
    require_once('../model/trabajadorModel.php');
    $tipo=$_REQUEST['tipo'];

    $objTrabajador = new TrabajadorModel();


    if ($tipo=="listar") {
        $arr_respuesta = array('status'=>false,'contenido'=>'');
        $arr_Trabajador =  $objTrabajador->obtener_trabajador();

        if (!empty($arr_Trabajador)) {
            
            for ($i=0; $i < count($arr_Trabajador); $i++) { 
                $rol_persona = $arr_Trabajador[$i]->rol;
                $persona = $arr_Trabajador[$i]->razon_social;
                $opciones = '';
                $arr_Trabajador[$i]->options = $opciones;
            }
            $arr_respuesta['status'] = true;
            $arr_respuesta['contenido'] = $arr_Trabajador;
        }
        //$arr_respuesta['contenido']=$arr_proveedor;
        echo json_encode($arr_respuesta);

    }
?>