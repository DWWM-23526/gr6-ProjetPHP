
<head>
    
    <title>Document</title>
    
    <link rel="stylesheet" href="src\css\footer.css">
    <link rel="stylesheet" href="src\components\header.php">
    <link rel="stylesheet" href="src\components\sidebar.php">
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
    <div id=" <?php echo $séries[key($séries)]; ?>" class="helloworld">
    <h1 class="Titre"><?php echo $séries['Titre']; ?> 
               </h1>
    <p class="Description"> <?php echo $séries['Description']; ?> </p>
    <p class="Note"> <?php echo $séries['Note'] ?></p>
    <p class="Datedesortie"><?php echo $séries['Date_de_sortie'] ?></p>
    </div>
    <?php endforeach ?>
    <form method="POST" action="" id="loadMoreForm" class="helloworld">
        <input type="hidden" name="offset" value="<?php echo $offset; ?>">
        <label for="pageSelect">Page <?php echo $currentPage; ?> of <?php echo $totalPages; ?>:</label>
        <select name="offset" id="pageSelect" onchange="document.getElementById('loadMoreForm').submit()">
            <?php for($i = 0; $i < $totalPages; $i++): ?>
                <option value="<?php echo $i * $limit; ?>" <?php if($i + 1 == $currentPage) echo 'selected'; ?>>Page <?php echo $i + 1; ?></option>
            <?php endfor; ?>
        </select>
    </form>
    </form>
    </section>
    
    
    

        <?php 
        require 'src/components/footer.php';?>
    

</body>
</html>