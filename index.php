<!doctype html>
<html lang="fr">

<?php
    // Import des variables et fonctions PHP
    include_once('dropzones.php');
    include_once('functions.php');
?>

<head>
    <title>DZ-LIST</title>
    <meta charset="UTF-8">
    <!-- Une seule stylesheet pour l'instant donc c'est assez brouillon -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

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
        <!-- les redirection sont faites à l'aide d'un script pour ne pas avoir à imbriquer la carte dans un <a> et rendre toute la carte cliquable -->
        
        <!-- On parcours la liste des dz -->
        <?php foreach($dropzones as $indice => $dz) : ?>
        
        <!-- Carte d'une dz  -->
        <div class="dropzone-card" onclick="openModal('dropzone.php?dropzone=<?php echo $indice;?>')">
            
            <div class="dropzone-inner">
              
                <div class="dropzone-front">
                    <h2><?php echo $dz['name'];?></h2>
                    <p>Description de la dropzone <?php echo $dz['name'];?></p>
                    <p>Cliquez pour en savoir plus</p>
              </div>
              
                <div class="dropzone-back">
            <!-- Informations supplémentaires sur la dropzone affichée au hover -->
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
      
        <!-- Fin de la boucle for en PHP -->
        <?php endforeach ?>
    
    </div>
      
    <!-- Fenêtre modale qui s'ouvre au clic sur une des cartes-->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <!-- Bouton de fermeture de la fenetre  -->
            <span class="close" onclick="closeModal()">&times;</span>
            <iframe id="modal-iframe" width="100%" height="400" frameborder="0"></iframe>
        </div>
    </div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
<div class="END-OF-FILE"></div>