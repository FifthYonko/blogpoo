<?php

abstract class Modele{
    public $pdo;
    public $table;
    function __construct()
    {
        $this->pdo = Base::getPDO();
    }



    function show(){
        $sql = "SELECT * from $this->table";
        $stmt = $this->pdo->query($sql);
        
        $resultat = $stmt->fetchAll();
        require_once('./../templates/Article/index.php');
    }
    function showByID($id){
        $sql = "SELECT * from $this->table where `id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        $resultat = $stmt->fetch();
        $comm = new Commentaires();
       $commentaires = $comm->findAllbyArticle($id);
        require_once('./../templates/Article/show.php');
    }

    function deleteByID($id){
        $sql = "DELETE * FROM $this->table where `id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        require_once('./../templates/Article/index.php');
    }

}