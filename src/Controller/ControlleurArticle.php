<?php


class ControlleurArticle{
    public $modele="article";
    
    function show(){

        $modele= "article";

        // 1 recuperer le nom du modele qui nous interesse

        // 2 instancier le modele en question
        $unmodele=new $modele(); // instancier la classe concerné pas la classe abstraite (dynamique)

        $articles =$this->Modele->show(); // classe abstraite
        
    }
}