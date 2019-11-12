<?php

namespace App;

use PDO;

class Connexion
{
    public static function getPDO(): PDO
    {
        return new PDO("mysql:dbname=gestion_commentaires;host=localhost","root",null,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}