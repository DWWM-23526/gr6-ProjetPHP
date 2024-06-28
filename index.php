<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'src/components/lp_carousel/carte-descript.php';
    ?>
    <!-- header -->
    <!-- <span><a class="btn btn-danger" href="src\components\lp_carousel\carte-descript.php">Carte</a></span> -->
    <!-- <span><a class="btn btn-danger" href="src\components\lp_carousel\php-config.php">Php-config</a></span> -->
    <div class="wrapper bg-dark">
        <section class="container pt-4 bg-success">
                <h4>Films pour Tous les Temps !</h4>
                <div class="horizontal-scrollbar overflow-auto">
                    <?php
                        createBestOld($filmLegnd);
                    ?>
            </div>
        </section>    
        <section class="container bg-warning py-5">
                <h3>Découvrez les films et les séries les plus populaires, les nouveatés et les prochains sorties</h3>
                <div class="container row">
                    <div class="content-text mt-2 p-4 col">
                        <h5>Top 10 des films de la semaine</h5>
                        <p>Découvrez les films les plus populaires de la semaine</p>
                    </div>
                    <div class="horizontal-scrollbar col-10 overflow-auto">
                        <?php
                            createTop10Film($filmTop);
                        ?>
                    </div>
                </div>
                <div class="container row">
                    <div class="content-text mt-2 p-4 col">
                        <h5>Nouveaux films</h5>
                        <p>Découvrez les derniers films sorties</p>
                    </div>
                    <div class="horizontal-scrollbar col-10 overflow-auto">
                        <?php
                            createNouvFilm($filmNouv);
                        ?>
                    </div>
                </div>
                <div class="container bg-danger rounder mt-5 p-5">
                <div id="carouselExampleIndicators" class="carousel info-plus slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner d-flex">
                        <?php
                            createFilmPlus($filmPlus);
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <div class="container row">
                    <div class="content-text mt-2 p-4 col">
                        <h5>Top 10 des séries de la semaine</h5>
                        <p>Découvrez les séries les plus populaires de la semaine</p>
                    </div>
                    <div class="horizontal-scrollbar col-10 overflow-auto">
                        <?php
                            createTop10Serie($serieTop);
                        ?>
                    </div>
                </div>
                <div class="container row">
                    <div class="content-text mt-2 p-4 col">
                        <h5>Nouvelles séries</h5>
                        <p>Découvrez les dernières séries sorties</p>
                    </div>
                    <div class="horizontal-scrollbar col-10 overflow-auto">
                        <?php
                            createNouvSerie($serieNouv);
                        ?>
                    </div>
                </div>
                <div class="container bg-danger rounder mt-5 p-5">
                <div id="carouselExampleIndicators2" class="carousel info-plus slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner d-flex">
                        <?php
                            createSeriePlus($seriePlus);
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
        </section>
        <!-- footer -->
    </div>
    

    <?php
       
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>