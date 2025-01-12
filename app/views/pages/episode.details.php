<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-lg bg-light">
        <?php include_once "views/partials/navbar.php"; ?>
        <main class="mt-5 pt-3 row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <h1><?= $article->titre ?></h1>
                  
                </div>
                <p style="text-align: justify;">
                    <?= $article->description ?>
                </p>
                <p>
                    Publié le <?= date("d/m/Y", strtotime($article->date_sortie));?>
               
                
                </p>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>

</html>
