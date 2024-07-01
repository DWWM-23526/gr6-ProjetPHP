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

            require_once './src/components/connect.php';

            $sql = "SELECT * FROM `genre` Limit 20 ";

            $requete = $db->query($sql);
        
            $genres = $requete->fetchAll();


            foreach ($genres as $genre): 
        ?>
        <span><a href='#'><?php echo $genre['Nom'] ?></a></span>
        <br><br>
        <?php endforeach; ?>

    </div>
</nav>
<div class="app">
    oooo
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit temporibus odit placeat rerum dolorum rem aliquid amet a, nisi, dicta, reiciendis pariatur? Repellendus adipisci pariatur nisi quos cumque! Nesciunt, cum.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, similique incidunt possimus modi suscipit, qui error in sapiente architecto cumque officia fugit odit molestias quod minima deleniti soluta expedita dolor?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, mollitia velit doloremque similique nam enim hic modi et in tenetur vel explicabo cupiditate earum voluptatum exercitationem optio dolorum alias necessitatibus?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis magni totam dicta aspernatur dolorum aliquid, ut molestiae eos ullam fugit nesciunt eaque explicabo ipsam accusantium, itaque quaerat harum iure inventore.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit temporibus odit placeat rerum dolorum rem aliquid amet a, nisi, dicta, reiciendis pariatur? Repellendus adipisci pariatur nisi quos cumque! Nesciunt, cum.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, similique incidunt possimus modi suscipit, qui error in sapiente architecto cumque officia fugit odit molestias quod minima deleniti soluta expedita dolor?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, mollitia velit doloremque similique nam enim hic modi et in tenetur vel explicabo cupiditate earum voluptatum exercitationem optio dolorum alias necessitatibus?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis magni totam dicta aspernatur dolorum aliquid, ut molestiae eos ullam fugit nesciunt eaque explicabo ipsam accusantium, itaque quaerat harum iure inventore.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit temporibus odit placeat rerum dolorum rem aliquid amet a, nisi, dicta, reiciendis pariatur? Repellendus adipisci pariatur nisi quos cumque! Nesciunt, cum.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, similique incidunt possimus modi suscipit, qui error in sapiente architecto cumque officia fugit odit molestias quod minima deleniti soluta expedita dolor?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, mollitia velit doloremque similique nam enim hic modi et in tenetur vel explicabo cupiditate earum voluptatum exercitationem optio dolorum alias necessitatibus?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis magni totam dicta aspernatur dolorum aliquid, ut molestiae eos ullam fugit nesciunt eaque explicabo ipsam accusantium, itaque quaerat harum iure inventore.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit temporibus odit placeat rerum dolorum rem aliquid amet a, nisi, dicta, reiciendis pariatur? Repellendus adipisci pariatur nisi quos cumque! Nesciunt, cum.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, similique incidunt possimus modi suscipit, qui error in sapiente architecto cumque officia fugit odit molestias quod minima deleniti soluta expedita dolor?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, mollitia velit doloremque similique nam enim hic modi et in tenetur vel explicabo cupiditate earum voluptatum exercitationem optio dolorum alias necessitatibus?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis magni totam dicta aspernatur dolorum aliquid, ut molestiae eos ullam fugit nesciunt eaque explicabo ipsam accusantium, itaque quaerat harum iure inventore.