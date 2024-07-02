<?php
  require 'db-host.php';
   /* FILMS*/
  $filmLegnd = $db->query("SELECT Titre FROM `film` WHERE Note BETWEEN '8' and '10' AND YEAR(Date_de_sortie) = 2023 LIMIT 20")->fetchAll();
  $filmTop = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
  $filmNouv = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`Date_de_sortie` DESC LIMIT 10")->fetchAll();
  $serieTop = $db->query("SELECT Titre FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10")->fetchAll();
  $serieNouv = $db->query("SELECT Titre FROM `série` ORDER BY `série`.`Date_de_sortie` DESC LIMIT 10")->fetchAll();
  $filmPlus = $db->query("SELECT Titre, Date_de_sortie, Durée, Description, Note FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
  $seriePlus = $db->query("SELECT Titre, Date_de_sortie, Description, Note FROM `série` ORDER BY `série`.`Note` DESC LIMIT 10")->fetchAll();
   
  //Series
  
  
  
  $limit = 27;
$offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;


$totalSeries = $db->query("SELECT COUNT(*) as count FROM `série`")->fetchColumn();
$totalPages = ceil($totalSeries / $limit);


$currentPage = ($offset / $limit) + 1;


$série = $db->query("SELECT Titre, Description, Date_de_sortie, Note FROM `série` LIMIT $offset, $limit")->fetchAll(PDO::FETCH_ASSOC);


  // Components 


     
     $genres = $db->query("SELECT * FROM `genre` Limit 20")->fetchAll();
