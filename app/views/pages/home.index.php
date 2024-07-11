<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php 
    include_once 'views/partials/header.php';
    include_once 'views/partials/sidebar.php';  ?> 
<div class="wrapper">
        <section class="section__top p-4">
                <h3>Films pour Tous les Temps !</h3>
                <div class="carousel custom-carousel">
                    <div class="inner-container inner-g">
                        <?php
                            // createBestOld($filmLegnd);
                        ?>
                    </div>
                </div>
        </section>    
        <section class="section__mid p-4">
                <h3>Découvrez les films et les séries les plus populaires, les nouveautés et les prochains sorties</h3>
                <div class=" row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Top 10 des films de la semaine</h5>
                        <p>Découvrez les films les plus populaires de la semaine</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container">
                                <?php
                                    // createTop10Film($filmTop);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Nouveaux films</h5>
                        <p>Découvrez les derniers films sorties</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container inner-g">
                                <?php
                                    // createNouvFilm($filmNouv);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="rounder p-5">
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
                            // createFilmPlus($filmPlus);
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
                <div class="row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Top 10 des séries de la semaine</h5>
                        <p>Découvrez les séries les plus populaires de la semaine</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container">
                                <?php
                                    // createTop10Serie($serieTop);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Nouvelles séries</h5>
                        <p>Découvrez les dernières séries sorties</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container inner-g">
                                <?php
                                    // createNouvSerie($serieNouv);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="rounder p-5">
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
                            // createSeriePlus($seriePlus);
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
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>