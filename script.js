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


