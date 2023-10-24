// Fonctions Javascript

//Redirection vers path
function Redirection(path) {
    location.href = path;
}

//Fonction permettant d'ouvrir un lien url dans une fenetre modale 
function openModal(url) {
    const modal = document.getElementById("myModal");
    const modalIframe = document.getElementById("modal-iframe");
    modalIframe.src = url;
    modal.style.display = "block";
}

//Fonction permettant de fermer la fenetre modale
function closeModal() {
    const modal = document.getElementById("myModal");
    const modalIframe = document.getElementById("modal-iframe");
    modalIframe.src = "";
    modal.style.display = "none";
}

//Redirection lorsque l'on change de vue via le selecteur
function changeView(select) {
    const view = select.value;

    if (view === "mosaic") {
        location.href = "index.php";
    } else if (view === "map") {
        location.href = "map.php";
    }
}



// Initialisation de la carte
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 0, lng: 0 }, // Coordonnées du centre de la carte
    zoom: 2 // Niveau de zoom initial
    });

    // Ajout des marqueurs pour chaque Dropzone
    dropzone.forEach((dz,index) => {

        const marker = new google.maps.Marker({
        position: { lat: dz.coord_lat, lng: dz.coord_lon},
        map: map,
        title: dz.name
        });
                
        // Ajoutez un événement de clic pour chaque marqueur
        marker.addListener("click", () => {
            // Redirigez l'utilisateur vers la page de détails de la Dropzone
            window.location.href = "dropzone.php?dropzone=" + index.toString();
        });
    });
}