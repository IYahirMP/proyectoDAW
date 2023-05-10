<?php

require_once "models/Organigrama.php";
require_once "models/Area.php";


class organigramaController
{
    public function index()
    {
        echo "Probando...<br>OrganigramaController<br>Acción index";
        echo phpversion();
    }

    public function create()
    {
        require_once("controllers/areaController.php");
        $areaController = new areaController();
        require_once 'views/organigrama/create.php';
    }

    public function read()
    {
        $dbOrganigrama = new Organigrama();
        $datos = $dbOrganigrama->read();
        $dbArea = new Area();
        $datosArea = $dbArea->readOne("0");
        if ($datosArea->num_rows > 0) {
            while ($asd = $datosArea->fetch_assoc()) {
                var_dump($asd);
            }
        }
        require_once 'views/organigrama/read.php';
    }

    public function save()
    {
        if (isset($_POST)) {
            $area = isset($_POST["area"]) ? $_POST["area"] : false;
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : false;
            $area_depende = isset($_POST["area_depende"]) ? $_POST["area_depende"] : false;
            $nivel = isset($_POST["nivel"]) ? $_POST["nivel"] : false;
            $tipo_area = isset($_POST["tipo_area"]) ? $_POST["tipo_area"] : false;
            $titular = isset($_POST["titular"]) ? $_POST["titular"] : false;

            if ($area && $descripcion && $area_depende && $nivel && $tipo_area && $titular) {
                $organigrama = new Organigrama();
                echo "Prueba";
                $organigrama->setArea($area);
                $organigrama->setDescripcion($descripcion);
                $organigrama->setArea_depende($area_depende);
                $organigrama->setNivel($nivel);
                $organigrama->setTipo_area($tipo_area);
                $organigrama->setTitular($titular);

                $save = $organigrama->save();

                if ($save) {
                    echo "Registro completado";
                } else {
                    echo "Registro fallido";
                }
            }
        }
    }
}
