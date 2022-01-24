<?php
require_once('./../src/base.php');
require_once('./../src/Entity/Modele.php');

class Commentaires extends Modele{
   

    function findAllbyArticle($id){
        $sql = "SELECT * from comments where `article_id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        $commentaires = $stmt->fetch();
        return $commentaires;
    }
   
}

