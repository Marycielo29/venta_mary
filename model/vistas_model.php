<?php
session_start();
class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario', 'nuevo-usuario', 'modificar-usuario', 'producto', 'inicio', 'carrito', 'botines', 'sandalias', 'nuevo', 'stock', 'categoria', 'nuevo', 'perfil', 'pago', 'nosotros', 'contactanos',
    'sandalias', 'stock', 'nuevo-producto', 'nuevo-persona', 'nuevo-categoria', 'nuevo-compra', 'productos', 'usuarios', 'categorias', 'compras', 'editar-producto', 'editar-persona', 'editar-categoria', 'editar-compra', 'panel']; //carpetas de html
    if (!isset($_SESSION['sesion_ventas_id'])) {
        return "login";
    }
        if(in_array($vista, $palabras_permitidas)){
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";
                
            }else{
                $contenido = "404"; // si esta permitido
            }

        }elseif($vista=="login" || $vista=="index"){
            $contenido = "login";

        }else{
            $contenido = "404"; // no esta permitido
        }
        return $contenido;
    }
}

?>