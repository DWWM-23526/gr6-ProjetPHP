<?php
  include 'php-config.php';

  $filmLegnd = $db->query("SELECT Titre FROM `film` WHERE Note BETWEEN '8' and '10' AND YEAR(Date_de_sortie) = 2023 LIMIT 10")->fetchAll();
  $filmTop = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
  $filmNouv = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`Date_de_sortie` DESC LIMIT 10")->fetchAll();
  $serieTop = $db->query("SELECT Titre FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10")->fetchAll();
  $serieNouv = $db->query("SELECT Titre FROM `série` ORDER BY `série`.`Date_de_sortie` DESC LIMIT 10")->fetchAll();
  $filmPlus = $db->query("SELECT Titre, Date_de_sortie, Durée, Description, Note FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
  $seriePlus = $db->query("SELECT Titre, Date_de_sortie, Description, Note FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10")->fetchAll();

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