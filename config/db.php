<?php

class Database
{
    public static function connect()
    {
        $db = new mysqli("localhost", "ivan_daw", "4/YYS2Q.dMsXRtk0", "proyecto_daw", 3308);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}

//Me toca trabajar con la tabla organigrama
