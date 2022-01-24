<h1>Page d'articles</h1>
     
<div>
    <?php   foreach ($resultat as $article) :?>
        <h2><?= $article['title'] ?></h2>
        <div>
            <?= $article['introduction'] ?>
        </div>
        
        <a href="index.php?controlleur=articles&task=showbyid&id=<?= $article['id']?>">Lire</a>
        <a href="index.php">Supprimer</a>

        <?php endforeach;?>
</div>


 