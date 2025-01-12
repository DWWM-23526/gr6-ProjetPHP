<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./assets/css/accueil.css">
    
</head>
<?php 
    include_once "./configs/db.config.php";
    $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $db = new PDO(
        $dsn,
        $user,
        $pass,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )
    );
    $sql = "SELECT * FROM episode ORDER BY ? DESC LIMIT 24;";
    $stmt = $db->prepare($sql);
    $stmt->execute(['num_saison']);
    $episodes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="container-lg bg-light">
        <?php include_once "views/partials/navbar.php"; ?>
        <main class="mt-5 pt-3 row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <h1><?= $episode->titre ?></h1>
                  
                </div>
                <p style="text-align: justify;">
                    <?= $episode->description ?>
                </p>
               
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>

</html>









