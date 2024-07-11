<?php


function createBestOld($filmLegnd){
  
    foreach ($filmLegnd as $titre){
      echo
        '<div>' .
          '<img src="images/picture_grey.svg" class="item" alt="...">' .
          '<div class="text-center item-titre">' . htmlspecialchars($titre['Titre']) . '</div>' .
        '</div>';
    }
  }
  
  function createTop10Film($filmTop){
    $counter = 1;
    foreach ($filmTop as $titre){
      echo
        '<div>' .
          '<span class="counter">' . $counter++ .'</span>' .
          '<img src="images/picture_grey.svg" class="item" alt="...">' .
          '<div class="text-center item-titre">' . htmlspecialchars($titre['Titre']) . '</div>' .
        '</div>';
    }
  }
  function createNouvFilm($filmNouv){
    foreach ($filmNouv as $titre){
      echo
        '<div>' .
          '<img src="images/picture_grey.svg" class="item" alt="...">' .
          '<div class="text-center item-titre">' . htmlspecialchars($titre['Titre']) . '</div>' .
        '</div>';
    }
  }
  
  function createTop10Serie($serieTop){
    $counter = 1;
    foreach ($serieTop as $titre){
      echo
        '<div>' .
          '<span class="counter">' . $counter++ .'</span>' .
          '<img src="images/picture_grey.svg" class="item" alt="...">' .
          '<div class="text-center item-titre">' . htmlspecialchars($titre['Titre']) . '</div>' .
        '</div>';
    }
  }
  
  function createNouvSerie($serieNouv){
    foreach ($serieNouv as $titre){
      echo
        '<div>' .
          '<img src="images/picture_grey.svg" class="item" alt="...">' .
          '<div class="text-center item-titre">' . htmlspecialchars($titre['Titre']) . '</div>' .
        '</div>';
    }
  }
  
  function createFilmPlus($filmPlus){
    $active = ' active';
    foreach ($filmPlus as $infoPlus){
      echo
      '<div class="carousel-item' . $active . '">' .
          '<img src="images/picture_grey.svg" class="card-img-top" alt="...">' .
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
          '<img src="images/picture_grey.svg" class="card-img-top" alt="...">' .
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