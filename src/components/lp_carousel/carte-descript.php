<?php
  include 'php-config.php';

  $sql0 = "SELECT Titre FROM `film` WHERE Note BETWEEN '8' and '10' AND YEAR(Date_de_sortie) = 2023 LIMIT 10";
  $requete0 = $db->query($sql0);
  $filmLegnd = $requete0->fetchAll();

  $sql1 = "SELECT Titre FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10";
  $requete1 = $db->query($sql1);
  $filmTop = $requete1->fetchAll();

  $sql2 = "SELECT Titre FROM `film` ORDER BY `film`.`Date_de_sortie` DESC LIMIT 10";
  $requete2 = $db->query($sql2);
  $filmNouv = $requete2->fetchAll();

  $sql3 = "SELECT Titre FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10";
  $requete3 = $db->query($sql3);
  $serieTop = $requete3->fetchAll();

  $sql4 = "SELECT Titre FROM `série` ORDER BY `série`.`Date_de_sortie` DESC LIMIT 10";
  $requete4 = $db->query($sql4);
  $serieNouv = $requete4->fetchAll();

  $sql5 = "SELECT Titre, Date_de_sortie, Durée, Description, Note FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10";
  $requete5 = $db->query($sql5);
  $filmPlus = $requete5->fetchAll();

  $sql6 = "SELECT Titre, Date_de_sortie, Description, Note FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10";
  $requete6 = $db->query($sql6);
  $seriePlus = $requete6->fetchAll();

function createBestOld($filmLegnd){

  foreach ($filmLegnd as $titre){
    echo
      '<div class="item text-center">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
        htmlspecialchars($titre['Titre']) . 
      '</div>';
  }
}

function createTop10Film($filmTop){

  foreach ($filmTop as $titre){
    echo
      '<div class="item text-center">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
        htmlspecialchars($titre['Titre']) . 
       '</div>';
  }
}
function createNouvFilm($filmNouv){

  foreach ($filmNouv as $titre){
    echo
      '<div class="item text-center">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
        htmlspecialchars($titre['Titre']) . 
       '</div>';
  }
}

function createTop10Serie($serieTop){

  foreach ($serieTop as $titre){
    echo
      '<div class="item text-center">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
        htmlspecialchars($titre['Titre']) . 
       '</div>';
  }
}

function createNouvSerie($serieNouv){

  foreach ($serieNouv as $titre){
    echo
      '<div class="item text-center">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
        htmlspecialchars($titre['Titre']) . 
       '</div>';
  }
}

function createFilmPlus($filmPlus){

  $active = ' active';
  foreach ($filmPlus as $infoPlus){
    echo
    '<div class="carousel-item' . $active . '">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
      '<div class="item-body">' .
        '<h1>' . htmlspecialchars($infoPlus['Titre']) . '</h1>' .
        '<p>' . 'Sortie le: ' . htmlspecialchars($infoPlus['Date_de_sortie']) . '</p>' .
        '<p>' . 'Durée: ' . htmlspecialchars($infoPlus['Durée']) . ' minute(s)'.'</p>' .
        '<p>' . 'Description: ' . htmlspecialchars($infoPlus['Description']) . '</p>' .
        '<p>' . 'Note: ' . htmlspecialchars($infoPlus['Note']) . '/10'.'</p>' .
      '</div>' .
    '</div>';
  $active = '';
  }
}

function createSeriePlus($seriePlus){

  $active = ' active';
  foreach ($seriePlus as $infoPlus){
    echo
    '<div class="carousel-item' . $active . '">' .
        '<img src="src/images/picture_grey.svg" class="card-img-top" alt="...">' .
      '<div class="item-body">' .
        '<h1>' . htmlspecialchars($infoPlus['Titre']) . '</h1>' .
        '<p>' . 'Sortie le: ' . htmlspecialchars($infoPlus['Date_de_sortie']) . '</p>' .
        '<p>' . 'Description: ' . htmlspecialchars($infoPlus['Description']) . '</p>' .
        '<p>' . 'Note: ' . htmlspecialchars($infoPlus['Note']) . '/10'.'</p>' .
      '</div>' .
    '</div>';
  $active = '';
  }
}

?>