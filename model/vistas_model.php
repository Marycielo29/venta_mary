<?php

class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuario', 'nuevo-usuario', 'modificar-usuario', 'producto', 'inicio', 'carrito', 'botines', 'sandalias', 'nuevo', 'stock', 'categoria', 'nuevo',
    'sandalias', 'stock', 'nuevo-producto']; //carpetas de html
        if(in_array($vista, $palabras_permitidas)){
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";
                
            }else{
                $contenido = "404"; // si esta permitido
            }

        }elseif($vista=="login" || $vista=="index"){
            $contenido = "login";
        }elseif($vista=="perfil" ){
            $contenido = "perfil";
        }elseif($vista=="pago" ){
            $contenido = "pago";
        }elseif($vista=="contactanos" ){
            $contenido = "contactanos";
        }elseif($vista=="nosotros" ){
            $contenido = "nosotros";

        }else{
            $contenido = "404"; // no esta permitido
        }
        return $contenido;
    }
}

?>