<?php
require_once('./../src/Entity/Articles.php');
class Application
{

    static function  process()
    {
        $task = "show";
        if (!empty($_GET['controlleur'])) {
            $controlleur = "controlleur".$_GET['controlleur'];
        }

        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }
        if (!empty($_GET['task'])) {
            $id = $_GET['id'];
        }


        $articles = new  $controlleur(); // connexion à la BD
        $articles->$task($id);
    }
}
