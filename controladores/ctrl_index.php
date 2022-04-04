<?php
class ControladorIndex{

    function cargarControlador($controller){
        echo $controller."-----";
        $controlador='ctrl_'.$controller;
        echo $controlador."-----";
        $controlador_clase="Controlador".ucfirst($controller);
        echo $controlador_clase."-----";
        $strFileController='controladores/'.$controlador.'.php';
        echo $strFileController."-----";
        if(!is_file($strFileController)){
            $strFileController='controladores/ctrl_usuario.php';  
            $controlador_clase="ControladorUsuario";
        }
        require_once $strFileController;

        $controllerObj=new $controlador_clase();
        return $controllerObj;
    }
    function cargarAccion($controllerObj,$action,$params){
        $accion=$action;
        $controllerObj->$accion($params);
    }
    function ejecutarAccion($controllerObj,$action,$params){
        if(isset($action) && method_exists($controllerObj, 
            $action)){
            $this->cargarAccion($controllerObj, $action,$params);
        }else{
            $this->cargarAccion($controllerObj, "listado",$params);
        }
    }
    public function redirect($controlador="usuario",$accion="listado",$params=array()){
        //header("Location:index.php?controller=".$controlador."&action=".$accion);
        $url= URL_BASE.$controlador."/".$accion."/";
        foreach ($params as $key => $value) {
            $url.=$value."/";
        }
        header("Location:".$url);
    }

    public function getUrl($controlador="usuario",
        $accion="listado",$params=array()){
        $url= URL_BASE.$controlador."/".$accion."/";
        foreach ($params as $key => $value) {
            $url.=$value."/";
        }
        return $url;
    }
}
?>
