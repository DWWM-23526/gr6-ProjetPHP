<nav class="sidebar">
    <div class="categories">
        <h2>
            Catégories
        </h2>
        <img src="./src/images/svg/categories.svg" alt="categories-icon">
        <span><a href="#">Films</a></span>
        <br><br>
        <span><a href="#">Séries</a></span>
    </div>
    <div class="genres">
        <h2>
            Genres
        </h2>
        <img src="./src/images/svg/genres.svg" alt="genres-icon">

        <?php

            

            
            

           


            
        ?>
        
  
            
              <?php foreach ($genres as $genre): ?>
        
         
        <span><a href='#'><?php echo $genre['Nom'] ?></a></span>
        <br><br>
        <?php endforeach; ?>
        

    </div>
</nav>
