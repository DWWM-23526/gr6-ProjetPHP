<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/serie.css">
</head>
<body>
    <h1 class="accroche"> Tous vos films ici !</h1>
    <section id="séries" class="flexsérie">
    <?php /*
    Générer des noms de films de la DB
    Les mettre en rang avec flex css
    Colorer police etc
    afficher     */

    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "sitefilm");

    // DSN DE CONNEXION
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    // connexion => base de donnée 

    try{
        $db = new PDO($dsn, DBUSER, DBPASS);
        /*echo"meandeboisloggedin"*/;

        // on s'assure de la compatibilité
        $db->exec("SET NAMES utf8");

        // le fetch par défaut est défini ici, pour cette page j'ai choisi FETCH_ASSOC car j'ai besoin de tout
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }
    catch(PDOException $e) {

        die("Erreur:".$e->getMessage());
    }

    // maintenant on récupère des données
    $sql = "SELECT Titre, Description, Date_de_sortie, Note, Date_de_sortie FROM `série` LIMIT 26";

    $requete = $db->query($sql);
    
    // fetch ou fetchall
    $série = $requete->fetchAll(PDO::FETCH_ASSOC);
    /* Pour ajouter un film (different pour JSON)
    $sql = "INSERT INTO `film`(`Titre`,`Description`,`Date_de_sortie`,`Durée`,`Note`) VALUES ('unfilm', 'il est bien', '80', '3')
    $requete = db->query($sql);
    */
    /* supprimer une série $sql = 'DELETE FROM `série`  WHERE Id_Série > 27' 
    $requete = db->query($sql)
    savoir combien de lignes ont été supprimées : 
    echo $requete->rowCount();*/

    
    
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
    

</body>
</html>