<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloPersona
$objPersona = new PersonaModel();

if ($tipo=="registrar"){
//print_r($_POST);
if ($_POST) {
    $nro_identidad = $_POST['nroIdentidad'];
    $razon_social = $_POST['razonSocial'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];

    $secure_password = password_hash($nro_identidad, PASSWORD_DEFAULT);

    if($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" ||  $distrito=="" || $cod_postal=="" || $direccion=="" || $rol==""){
        $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta
    }else {
        $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);
    
        if ($arrPersona->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');

        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
    }
            echo json_encode($arr_Respuesta);

}
}
if ($tipo=="listar") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_proveedor =  $objPersona->obtener_proveedor();

    if (!empty($arr_proveedor)) {
        
        for ($i=0; $i < count($arr_proveedor); $i++) { 
            $rol_persona = $arr_proveedor[$i]->rol;
            $persona = $arr_proveedor[$i]->razon_social;
            $opciones = '';
            $arr_proveedor[$i]->options = $opciones;
        }
        $arr_respuesta['status'] = true;
        $arr_respuesta['contenido'] = $arr_proveedor;
    }
    //$arr_respuesta['contenido']=$arr_proveedor;
    echo json_encode($arr_respuesta);

}
if ($tipo=="listar") {
    $arr_respuesta = array('status'=>false,'contenido'=>'');
    $arr_Trabajador =  $objPersona->obtener_trabajador();

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