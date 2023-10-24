<!doctype html>
<html lang="fr">

<head>
    <title>Skydata</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    
 <!-- Import des variables et fonctions -->
 <?php
            include_once('dropzones.php');
            include_once('functions.php');
        ?>

    <!-- Bandeau de présentation -->
    <header>
        <h1>DZ list</h1>
        <p><em>Comparez les dropzones francaise</em></p>

    <!-- Barre de recherche -->
        <form method="post" action="recherche.php">

            <input type="text" name="dz_recherche" placeholder="Rechercher une DZ">
            <input type="submit" value="Rechercher">
    
        </form>
    
    </header>
     <!-- Sélecteur pour le type de vue -->
     <select class="view-selector" onchange="changeView(this)" autocomplete="off">
        <option value="mosaic">Mozaïque</option>
        <option value="map">Map</option> 
    </select>
    
    <div class="mosaic">
        
        <!-- Dropzones -->
        <!-- Redirection à l'aide d'un script pour ne pas avoir à imbriquer la carte dans un lien a et rendre toute la carte cliquable -->
        
        <?php foreach($dropzones as $indice => $dz) : ?>
        
        <div class="dropzone-card" onclick="openModal('dropzone.php?dropzone=<?php echo $indice;?>')">
            <div class="dropzone-inner">
              <div class="dropzone-front">
                    <h2><?php echo $dz['name'];?></h2>
                    <p>Description de la dropzone <?php echo $dz['name'];?></p>
                    <p>Cliquez pour en savoir plus</p>
              </div>
              <div class="dropzone-back">
                <!-- Informations supplémentaires sur la dropzone -->
                    <p>Informations supplémentaire</p>
                    <p>Avion : <?php echo $dz['planes'];?></p>
                    <p> Prix du saut : </p>
                    <div class="container">
                        <!-- La largeur et la couleur de la barre est gérée dans une fonction PHP -->
                        
                        <div class="barre prix" style="<?php echo styleBarrePrix($dz['tarif'])?>"><?php echo $dz['tarif'];?> € </div>
                    </div>
              </div>
            </div>
        </div>

      <?php endforeach ?>
    
    </div>
      
    <!-- Fenêtre modale -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <iframe id="modal-iframe" width="100%" height="400" frameborder="0"></iframe>
        </div>
    </div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
<div class="END-OF-FILE"></div>