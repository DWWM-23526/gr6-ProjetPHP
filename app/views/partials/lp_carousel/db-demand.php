<?php

$filmLegnd = $db->query("SELECT Titre FROM `film` WHERE Note BETWEEN '8' and '10' AND YEAR(date_sortie) = 2023 LIMIT 20")->fetchAll();
$filmTop = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
$filmNouv = $db->query("SELECT Titre FROM `film` ORDER BY `film`.`date_sortie` DESC LIMIT 10")->fetchAll();
$serieTop = $db->query("SELECT Titre FROM `serie` ORDER BY `serie`.`Note` DESC LIMIT 10")->fetchAll();
$serieNouv = $db->query("SELECT Titre FROM `serie` ORDER BY `serie`.`date_sortie` DESC LIMIT 10")->fetchAll();
$filmPlus = $db->query("SELECT Titre, date_sortie, duree, Description, Note FROM `film` ORDER BY `film`.`Note` DESC LIMIT 10")->fetchAll();
$seriePlus = $db->query("SELECT Titre, date_sortie, Description, Note FROM `serie` ORDER BY `serie`.`Note` DESC LIMIT 10")->fetchAll();


?>