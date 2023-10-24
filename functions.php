<?php
// Fonctions PHP

//Ajustement du style des barres de prix en fonction des paramètre d'entrée
function styleBarrePrix(int $prix) : string {

    // Style remplissage barre : 100% = 20E, 0% = 40E
$remplissagebarre = 200 - 5*$prix;

// Gestion du dégradé de couleur 
if ($remplissagebarre>90) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #13df00;";
}
elseif ($remplissagebarre>80) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: ##6cdf00;";
}
elseif ($remplissagebarre>70) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #a4df00;";
}
elseif ($remplissagebarre>60) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #dfdb00;";
}
elseif ($remplissagebarre>50) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df8600;";
}
elseif ($remplissagebarre>40) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df5900;";
}
elseif ($remplissagebarre>30) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df2100;";
}
elseif ($remplissagebarre>20) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df2100;";
}
elseif ($remplissagebarre>10) {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df2100;";
}
else {
    return "--largeurPrix: ".$remplissagebarre."%; --couleurPrix: #df2100;";
}
}

?>