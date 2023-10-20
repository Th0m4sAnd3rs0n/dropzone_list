<!doctype html>
<html lang="fr">

<!-- Le nom de la est spécifié en paramètre de l'URL  sous la forme dropzone.php?dropzone=dropzone_name -->

<?php

// vérifier la présence d'un paramètre transmis dans l'URL 
if (!isset($_GET['dropzone']) || empty($_GET['dropzone']))
{
	echo('Pas de nom de dropzone transmis');
	// Arrête l'exécution de PHP
    return;
}

include_once 'dropzones.php';

$dz_indice = $_GET['dropzone']; 
// Vérifier que le paramètre transmis est bien valide

if (!array_key_exists($dz_indice, $dropzones))
{
    echo('indice invalide');
	// Arrête l'exécution de PHP
    return;
}

$dz = $dropzones[$dz_indice];

?>
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