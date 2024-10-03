<?php

class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario', 'nuevo-usuario', 'modificar-usuario', 'producto', 'index', 'carrito', 'perfil', 'botines', 'sandalias', 'nuevo', 'stock', 'contactanos', 'nosotros', 'categoria', 'nuevo',
    'pago', 'sandalias', 'stock']; //carpetas de html
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