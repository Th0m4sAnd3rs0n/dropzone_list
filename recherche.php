<!DOCTYPE html>
<html>
<head>
    <title>Résultats de la recherche</title>
</head>
<body>
    <h1>Résultats de la recherche</h1>

    <?php
    
    //Import des variables et fonctions 
    include_once('dropzones.php');
    include_once('functions.php');


    if (isset($_POST['dz_recherche'])) {
        $recherche = $_POST['dz_recherche'];
        $resultats = array();

        // On parcours le tableau des dz pour trouver des correspondances
        foreach ($dropzones as $indice => $dz) {
            if (stripos($dz['name'], $recherche) !== false) {
                array_push($resultats,$indice);
            }
        }

        if (empty($resultats)) {
            echo "Aucun résultat trouvé pour : " . htmlspecialchars($recherche);
        } else {
            echo "<ul>";
            foreach ($resultats as $indice_dz) {
                echo '<li><a href="dropzone.php?dropzone=' . $indice_dz . '">' . htmlspecialchars($dropzones[$indice_dz]['name']) .'</a></li>';
            }
            echo "</ul>";
        }
    }
    ?>

    <a href="index.php">Retour à la page d'accueil</a>
</body>
</html>
