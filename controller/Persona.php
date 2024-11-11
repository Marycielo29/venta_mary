<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instancio la clase modeloPersona
$objPersona = new PersonaModel();

if ($tipo=="registrar"){
//print_r($_POST);
if ($_POST) {
    $nroIdentidad = $_POST['nroIdentidad'];
    $razonSocial = $_POST['razonSocial'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $codigoPostal = $_POST['codigoPostal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    $password = $_POST['password'];
    $estado = $_POST['estado'];
    $fechaRegistro = $_POST['fechaRegistro'];
    if($nroIdentidad=="" || $razonSocial=="" || $telefono=="" || $correo=="" || $departamento=="" || $provincia=="" ||  $distrito=="" || $codigoPostal=="" || $direccion=="" || $rol=="" || $password=="" || $estado=="" || $fechaRegistro==""){
        $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacios'); //respuesta
    }else {
        $arrPersona = $objPersona->registrarPersona($nroIdentidad, $razonSocial, $telefono, $correo, $departamento, $provincia, $distrito, $codigoPostal, $direccion, $rol, $password, $estado, $fechaRegistro);
    
        if ($arrPersona->id>0) {
            $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');

        }else{
            $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar persona');
        }
            echo json_encode($arr_Respuesta);

}
}
}
?>