// Fonctions

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