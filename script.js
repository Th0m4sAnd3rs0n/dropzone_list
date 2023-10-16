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