<?php
    $titre = 'Films&Séries - Accueil';
    require 'src/components/lp_carousel/carouselFunc.php';
?>
<?php
    require 'src/components/header.php';
    require 'src/components/sidebar.php';
?>
    <div class="wrapper bg-dark">
        <section class="section__top p-4 bg-success">
                <h4>Films pour Tous les Temps !</h4>
                <div class="carousel custom-carousel">
                    <div class="inner-container inner-g">
                        <?php
                            createBestOld($filmLegnd);
                        ?>
                    </div>
                </div>
        </section>    
        <section class="bg-warning p-4">
                <h3>Découvrez les films et les séries les plus populaires, les nouveatés et les prochains sorties</h3>
                <div class=" row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Top 10 des films de la semaine</h5>
                        <p>Découvrez les films les plus populaires de la semaine</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container">
                                <?php
                                    createTop10Film($filmTop);
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
                                    createNouvFilm($filmNouv);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="bg-danger rounder p-5">
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
                <div class="row">
                    <div class="content-text mt-2 p-5 col">
                        <h5>Top 10 des séries de la semaine</h5>
                        <p>Découvrez les séries les plus populaires de la semaine</p>
                    </div>
                    <div class="col-10">
                        <div class="carousel custom-carousel">
                            <div class="inner-container">
                                <?php
                                    createTop10Serie($serieTop);
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
                                    createNouvSerie($serieNouv);
                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="bg-danger rounder p-5">
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
    </div>
<?php require 'src/components/footer.php'; ?>

