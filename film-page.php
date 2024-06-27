<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/film.css">
    <title>Liste des Films</title>
</head>
<body>
    <?php

    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "sitefilm");

    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    try {
        $db = new PDO($dsn, DBUSER, DBPASS);
        $db->exec("SET NAMES utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $filmsParPage = 10;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($page < 1) $page = 1;
    $offset = ($page - 1) * $filmsParPage;

    $stmt = $db->query("SELECT COUNT(*) FROM film");
    $totalFilms = $stmt->fetchColumn();
    $totalPages = ceil($totalFilms / $filmsParPage);

    $sql = "SELECT * FROM `film` ORDER BY `Id_Film` DESC LIMIT :limit OFFSET :offset";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':limit', $filmsParPage, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $films = $stmt->fetchAll();
    ?>

    <h1>Liste des Films</h1>

    <section class="films">
        <?php for ($i = 0; $i < count($films); $i++): ?>
            <div class="film">
                <h1><?php echo htmlspecialchars($films[$i]["Titre"]); ?></h1>
                <p>Sortie le <?php echo htmlspecialchars($films[$i]["Date_de_sortie"]); ?></p>
                <p><?php echo htmlspecialchars($films[$i]["Description"]); ?></p>
                <span>Une durée de <?php echo htmlspecialchars($films[$i]["Durée"]); ?> minutes</span><br>
                <span>Note: <?php echo htmlspecialchars($films[$i]["Note"]); ?> /10</span>
            </div>
        <?php endfor; ?>
    </section>

    <div class="pagination">
        <form action="" method="GET">
            <label for="page">Sélectionnez une page :</label>
            <select name="page" id="page" onchange="this.form.submit()">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <option value="<?php echo $i; ?>" <?php if ($i == $page) echo 'selected'; ?>>Page <?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </form>
    </div>
</body>
</html>
