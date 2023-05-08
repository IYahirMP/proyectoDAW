<?php

class Organigrama
{
    private $id_organigrama;
    private $area;
    private $descripcion;
    private $area_depende;
    private $nivel;
    private $tipo_area;
    private $titular;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId_organigrama()
    {
        return $this->id_organigrama;
    }

    public function getArea()
    {
        return $this->area;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getArea_depende()
    {
        return $this->area_depende;
    }
    public function getNivel()
    {
        return $this->nivel;
    }
    public function getTipo_area()
    {
        return $this->tipo_area;
    }
    public function getTitular()
    {
        return $this->titular;
    }

    public function setId_organigrama($id_organigrama)
    {
        $this->id_organigrama = $this->db->real_escape_string($id_organigrama);
    }

    public function setArea($area)
    {
        $this->area = $this->db->real_escape_string($area);
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    public function setArea_depende($area_depende)
    {
        $this->area_depende = $this->db->real_escape_string($area_depende);
    }
    public function setNivel($nivel)
    {
        $this->nivel = $this->db->real_escape_string($nivel);
    }
    public function setTipo_area($tipo_area)
    {
        $this->tipo_area = $this->db->real_escape_string($tipo_area);
    }
    public function setTitular($titular)
    {
        $this->titular = $this->db->real_escape_string($titular);
    }

    public function read()
    {
        $sql = "SELECT organigrama.ID_ORGANIGRAMA,
                    organigrama.AREA,
                    organigrama.DESCRIPCION,
                    area1.NOMBRE_AREA as AREA_DEPENDE,
                    organigrama.NIVEL,
                    area2.NOMBRE_AREA as TIPO_AREA,
                    organigrama.TITULAR
                    FROM organigrama
                    INNER JOIN area area1 ON organigrama.AREA_DEPENDE = area1.ID_AREA
                    INNER JOIN area area2 ON organigrama.TIPO_AREA = area2.ID_AREA;";
        $datos = $this->db->query($sql);
        return $datos;
    }

    public function save()
    {
        $sql = "INSERT INTO organigrama (area, descripcion, area_depende, nivel, tipo_area, titular)
                    VALUES (
                        '{$this->area}',
                        '{$this->descripcion}',
                        '{$this->area_depende}',
                        '{$this->nivel}',
                        '{$this->tipo_area}',
                        '{$this->titular}'
                    );";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}
