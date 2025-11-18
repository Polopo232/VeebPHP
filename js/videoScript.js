function muudaVideokaart(){
    let videokaardid = document.getElementsByName('videokaart');
    let pilt = document.getElementById('videokaart_pilt');

    for (let i = 0; i < videokaardid.length; i++) {
        if (videokaardid[i].checked) {
            if (videokaardid[i].value == "1050") {
                pilt.src = "videokaart/1050.png";
            }
            if (videokaardid[i].value == "1660s") {
                pilt.src = "videokaart/1660s.jpg";
            }
            if (videokaardid[i].value == "4060ti") {
                pilt.src = "videokaart/4060ti.jpg";
            }
            if (videokaardid[i].value == "5090") {
                pilt.src = "videokaart/5090.png";
            }
        }
    }
}

function arvutaVideoHind(){
    const hind1050 = 120;
    const hind1660s = 300;
    const hind4060ti = 600;
    const hind5090 = 2800;

    let kogus = document.getElementById('kogus_video').value;
    let summa = document.getElementById('videosumma');
    let pilt = document.getElementById('videokaart_pilt').getAttribute('src');

    if (pilt == "videokaart/1050.png") {
        summa.innerHTML = (kogus * hind1050) + " €";
    }
    if (pilt == "videokaart/1660s.jpg") {
        summa.innerHTML = (kogus * hind1660s) + " €";
    }
    if (pilt == "videokaart/4060ti.jpg") {
        summa.innerHTML = (kogus * hind4060ti) + " €";
    }
    if (pilt == "videokaart/5090.png") {
        summa.innerHTML = (kogus * hind5090) + " €";
    }
}