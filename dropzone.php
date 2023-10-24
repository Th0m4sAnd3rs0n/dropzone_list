<!doctype html>
<html lang="fr">

<!-- Ce fichier PHP genere une page html spécifique à une DZ -->
<!-- L'indice de la DZ est spécifié en paramètre de l'URL sous la forme dropzone.php?dropzone=INDICE -->

<?php

//Import des variables et fonctions 
include_once 'dropzones.php';
include_once 'functions.php';


// vérifier la présence d'un paramètre transmis dans l'URL 
if (!isset($_GET['dropzone']))
{
	echo('Pas de nom de dropzone transmis');
	// Arrête l'exécution
    return;
}

//On récupère l'indice de la dz transmis dans l'URL
$dz_indice = $_GET['dropzone']; 

// Vérifier que le paramètre transmis est bien valide
if (!array_key_exists($dz_indice, $dropzones))
{
    echo('indice invalide');
	// Arrête l'exécution
    return;
}

$dz = $dropzones[$dz_indice];

?>

<!-- Generation de la page HTML en grace aux données contenus la tableau PHP -->

<head>
    <title><?php echo $dz['name'] ?></title>
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <h1><?php echo $dz['name'] ?></h1>
    </header>

    <p>Description de <?php echo $dz['name'] ?></p>
</body>
</html>
<div class="END-OF-FILE"></div>