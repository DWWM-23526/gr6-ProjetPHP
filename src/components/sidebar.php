<nav class="sidebar">
    <div class="categories">
        <h2>
            Catégories
        </h2>
        <img src="./src/images/svg/categories.svg" alt="categories-icon">
        <span><a href="./film-page.php">Films</a></span>
        <br><br>
        <span><a href="./serie-page.php">Séries</a></span>
    </div>
    <div class="genres">
        <h2>
            Genres
        </h2>
        <img src="./src/images/svg/genres.svg" alt="genres-icon">

        <?php

            require_once './src/components/connect.php';

            $sql = "SELECT * FROM `genre` Limit 20 ";

            $requete = $db->query($sql);
        
            $genres = $requete->fetchAll();


            foreach ($genres as $genre): 
        ?>
        <span><a href='#'><?php echo $genre['Nom'] ?></a></span>
        <br><br>
        <?php endforeach; 
            $db = null;
        ?>

    </div>
</nav>
<div class="app">