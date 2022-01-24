<?php

class Base
{
    static function getPDO()
    {
        $dsn = 'mysql:dbname=blogpoo;host=127.0.0.1:3306';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->exec('SET NAMES utf8');
            $pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC

            );

            return $pdo;
        } catch (Exception $e) {
            // en production 
            // echo 'Oups il y a un probleme';                 
            die('Erreur : ' . $e->getMessage());
        }
    }
}
