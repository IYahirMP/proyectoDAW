<?php

class organigramaController
{
    public function index()
    {
        echo "Probando...<br>OrganigramaController<br>Acción index";
    }

    public function create()
    {
        require_once 'views/organigrama/create.php';
    }

    public function save()
    {
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
}
