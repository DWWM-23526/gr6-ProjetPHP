
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="/css/serie.css">
</head>
<body>
<?php require 'src/components/header.php';
     
     
     require 'src\components\lp_carousel\db-demand.php';
     require 'src/components/sidebar.php'; 
     
     
   ?>;
    <h1 class="accroche"> Tous vos Séries ici !</h1>
    <section id="séries" class="flexsérie">
    <?php 
    

    
    
    ?>
    <?php foreach($série as $séries) :  
    ?>
    <div id="<?php echo $séries[key($séries)]; ?>">
    <h1 class="Titre"><?php echo $séries['Titre']; ?> 
               </h1>
    <p class="Description"> <?php echo $séries['Description']; ?> </p>
    <p class="Note"> <?php echo $séries['Note'] ?></p>
    <p class="Datedesortie"><?php echo $séries['Date_de_sortie'] ?></p>
    </div>
    <?php endforeach ?>
    </section>
    

        <?php 
        require 'src/components/footer.php';?>
    

</body>
</html>