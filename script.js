function Redirection(path) {
    location.href = path;
}

function openModal(url) {
    const modal = document.getElementById("myModal");
    const modalIframe = document.getElementById("modal-iframe");
    modalIframe.src = url;
    modal.style.display = "block";
}

function closeModal() {
    const modal = document.getElementById("myModal");
    const modalIframe = document.getElementById("modal-iframe");
    modalIframe.src = "";
    modal.style.display = "none";
}

function changeView(select) {
    const view = select.value;
    const mosaic = document.querySelector(".mosaic");

    if (view === "mosaic") {
        // mosaic.style.flexDirection = "row";
    } else if (view === "map") {
        location.href = "map.html";
    }
}


// Fonction pour mettre à jour la barre de vie en fonction de la valeur
function updateBarreDeVie(valeur) {
    // Mettre à jour la largeur du remplissage en fonction de la valeur
    const barreVie = document.getElementById("barreVie");
    barreVie.style.width = valeur + "%";

    // Utiliser une échelle de couleurs en fonction de la valeur
    if (valeur < 30) {
        barreVie.style.backgroundColor = "red";
    } else if (valeur < 50) {
        // Jaune pour les valeurs intermédiaires
        barreVie.style.backgroundColor = "yellow";
    } else if (valeur < 70) {
        // Jaune pour les valeurs intermédiaires
        barreVie.style.backgroundColor = "blue";
    } else {
        // Vert pour les valeurs élevées
        barreVie.style.backgroundColor = "green";
    }

}

//----------------- lancé au chargement de la page --------------------

document.addEventListener("DOMContentLoaded", updateBarreDeVie(30) );


