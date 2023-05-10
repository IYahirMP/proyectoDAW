<?php

class Area
{
    private $id_area;
    private $nombre_area;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getIdArea()
    {
        return $this->id_area;
    }

    public function getNombreArea()
    {
        return $this->nombre_area;
    }

    public function setIdArea($id_area)
    {
        $this->id_area = $this->db->real_escape_string($id_area);
    }

    public function setNombreArea($nombre_area)
    {
        $this->nombre_area = $this->db->real_escape_string($nombre_area);
    }


    public function read()
    {
        $sql = "SELECT * FROM area;";
        $datos = $this->db->query($sql);
        return $datos;
    }

    public function readOne($id_area)
    {
        $sql = "SELECT * FROM area WHERE ID_AREA = {$id_area}";
        $datos = $this->db->query($sql);
        return $datos;
    }

    public function save()
    {
        $sql = "INSERT INTO AREA (ID_AREA, NOMBRE_AREA)
                    VALUES (
                        '{$this->id_area}',
                        '{$this->nombre_area}'
                    );";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}
