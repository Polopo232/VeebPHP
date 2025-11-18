
const väljund = document.getElementById('output');

function näitaKuupaevJaAeg() {
    const praegu = new Date();
    const aegStr = praegu.toLocaleTimeString('et-EE');
    const kuupäevStr = praegu.toLocaleDateString('et-EE');
    väljund.textContent = `Täna: ${kuupäevStr}, ${aegStr}`;
}

function kuniMärtsini() {
    const praegu = new Date();
    let märts15 = new Date(praegu.getFullYear(), 2, 15);

    if (praegu > märts15) {
        märts15 = new Date(praegu.getFullYear() + 1, 2, 15);
    }

    let diffMs = märts15.getTime() - praegu.getTime();

    const diffPaevad = Math.floor(diffMs / (1000 * 60 * 60 * 24));
    diffMs -= diffPaevad * 1000 * 60 * 60 * 24;

    const diffTunnid = Math.floor(diffMs / (1000 * 60 * 60));
    diffMs -= diffTunnid * 1000 * 60 * 60;

    const diffMinutid = Math.floor(diffMs / (1000 * 60));
    diffMs -= diffMinutid * 1000 * 60;

    const diffSekundid = Math.floor(diffMs / 1000);

    väljund.textContent = `15. märtsini on jäänud: ${diffPaevad} päeva`;
}

