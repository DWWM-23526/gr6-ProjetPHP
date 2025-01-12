<nav class="sidebar">
    <div class="categories">
        <h2>
            Catégories
        </h2>
        <img src="/src/images/svg/genres" alt="categories-icon">
        <span><a href="#">Films</a></span>
        <br><br>
        <span><a href="#">Séries</a></span>
    </div>
    <div class="genres">
        <h2>
            Genres
        </h2>
        

        <?php

            $sql = "SELECT * FROM `genre` Limit 4 ";

            $requete = $db->query($sql);
        
            $genres = $requete->fetchAll();


            foreach ($genres as $genre): 
        ?>
        <span><a href='#'><?php echo $genre['nom'] ?></a></span>
        <br><br>
        <?php endforeach; ?>

    </div>
</nav>