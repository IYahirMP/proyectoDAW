<?php

require_once "models/Area.php";


class areaController
{
    public function index()
    {
        echo "Probando...<br>areaController<br>Acción index";
        echo phpversion();
    }

    public function select()
    {
        $area = new Area();
        $datos = $area->read();
        include "views/area/select.php";
    }
}
