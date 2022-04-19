<?php
require "clases/clase_base.php";
require "clases/grupo.php";

class ControladorGrupo extends ControladorIndex
{

    function getGrupos()
    {
        $grupo = new Grupo();
        $grupos = $grupo->getGrupos();

        $tpl = Template::getInstance();
        $tpl->asignar('grupos', $grupos);
        $tpl->mostrar('home');
    }
}