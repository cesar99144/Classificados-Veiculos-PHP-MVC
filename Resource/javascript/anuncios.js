function abrirModal(mn, link) {
    let modal = document.getElementById(mn);
    document.getElementById("link-Share").value = link;
    if (typeof modal == 'undefined' || modal === null)
        return;

    modal.style.display = 'Block';
    document.body.style.overflow = 'hidden';
}

function fecharModal(mn) {
    let modal = document.getElementById(mn);

    if (typeof modal == 'undefined' || modal === null)
        return;

    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function compartilharWhats(){

    
    var linkEnvio = document.querySelector('input#link-Share').value;
    alert(linkEnvio)

    let target =  `whatsapp://send?text=${encodeURIComponent(msg)}`
    window.location.href = "https://api.whatsapp.com/send?text=" + linkEnvio;
}