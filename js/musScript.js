function bandChoice() {
    const boxes = document.querySelectorAll('input[name="musband"]:checked');
    const out = document.getElementById("bandanswer");

    if (boxes.length === 0) {
        out.textContent = "Palun vali vähemalt üks ansambel.";
        return;
    }

    let valik = Array.from(boxes).map(b => b.value).join(", ");
    out.textContent = "Sinu valik: " + valik;
}

function interviewText() {
    const text = document.getElementById("interview").value.trim();
    const out = document.getElementById("interviewanswer");

    if (text === "") {
        out.textContent = "Palun kirjuta midagi.";
    } else {
        out.textContent = "Sinu arvamus: " + text;
    }
}

function numberAsk() {
    const num = document.getElementById("numberask").value;
    const out = document.getElementById("numberanswer");

    if (num < 1 || num > 100) {
        out.textContent = "Sisesta number vahemikus 1–100!";
    } else {
        out.textContent = "Sa kuulad muusikat " + num + " tundi päevas.";
    }
}

function radioAsk() {
    const checked = document.querySelector('input[name="ask"]:checked');
    const out = document.getElementById("radioanswer");

    if (!checked) {
        out.textContent = "Palun vali üks vastus.";
    } else {
        out.textContent = "Sinu vastus: " + checked.value;
    }
}

function datalistAsk() {
    const value = document.getElementById("radio-choice").value.trim();
    const out = document.getElementById("datalistanswer");

    if (value === "") {
        out.textContent = "Palun nimeta mõni raadiojaam.";
    } else {
        out.textContent = "Sa nimetasid: " + value;
    }
}

function genreAsk() {
    const genre = document.getElementById("genres").value;
    const out = document.getElementById("genreanswer");

    if (genre === "...") {
        out.textContent = "Palun vali üks žanr.";
    } else {
        out.textContent = "Sinu žanr: " + genre;
    }
}

function ifSaada() {
    const summary = document.getElementById("summary");
    summary.innerHTML = "";

    // Checkbox
    const bands = Array.from(document.querySelectorAll('input[name="musband"]:checked'))
                       .map(b => b.value)
                       .join(", ");
    summary.innerHTML += "<b>Muusikud:</b> " + (bands || "Pole valitud") + "<br>";

    const text = document.getElementById("interview").value.trim();
    summary.innerHTML += "<b>Arvamus:</b> " + (text || "Pole kirjutatud") + "<br>";

    const hours = document.getElementById("numberask").value;
    summary.innerHTML += "<b>Tunde päevas:</b> " + hours + "<br>";

    const radio = document.querySelector('input[name="ask"]:checked');
    summary.innerHTML += "<b>Raadio kuulamine:</b> " + (radio ? radio.value : "Pole valitud") + "<br>";

    const station = document.getElementById("radio-choice").value.trim();
    summary.innerHTML += "<b>Raadiojaam:</b> " + (station || "Pole sisestatud") + "<br>";

    const genre = document.getElementById("genres").value;
    summary.innerHTML += "<b>Žanr:</b> " + (genre === "..." ? "Pole valitud" : genre) + "<br>";
}