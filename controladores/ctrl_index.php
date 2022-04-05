<?php

class ControladorIndex{

    function cargarControlador($controller){
        $controlador='ctrl_'.$controller;
        $controlador_clase="Controlador".ucfirst($controller);
        $strFileController='controladores/'.$controlador.'.php';
        if(!is_file($strFileController)){
            $strFileController='controladores/ctrl_usuario.php';  
            $controlador_clase="ControladorUsuario";
        }
        require_once $strFileController;

        $controllerObj=new $controlador_clase();
        return $controllerObj;
    }

}    

?>