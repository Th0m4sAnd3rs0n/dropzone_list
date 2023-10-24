<!DOCTYPE html>
<html>

<?php
    // Import des variables et fonctions PHP
    include_once('dropzones.php');
    include_once('functions.php');
?>

<head>
    <meta charset="UTF-8">
    <title>Carte des Dropzones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 45px 0px 0px 0px;
            padding: 0;
        }
        #map {
            height: 100vh;
            width: 100%;
        }
        /* Style pour le sélecteur */
        .view-selector {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            background-color: #444;
            padding: 5px;
            border: none;
        }
    </style>
</head>

<body>
    <!-- Sélecteur pour le type de vue -->
    <select class="view-selector" onchange="changeView(this)" autocomplete="off">
        <option value="map">Map</option>
        <option value="mosaic">Mozaïque</option>
    </select>
    
    <!-- div contenant la map -->
    <div id="map"></div>
    
    
    <script>
        // La fonction json_encode permet de convertir un array php en array javascript
        const dropzone = <?php echo json_encode($dropzones); ?>
    </script>

    <script type="text/javascript" src="script.js"></script>

    <!-- Génération de la map -->
    <!-- Clé API liée à mon compte google : AIzaSyBAzpHV4wlfC4WNFKH4modMBPnw8d1F2Wk -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAzpHV4wlfC4WNFKH4modMBPnw8d1F2Wk&callback=initMap" async defer></script>
</body>
</html>
