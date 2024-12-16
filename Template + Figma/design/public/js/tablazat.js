document.getElementById('kereso').addEventListener('input', function() {
    const keresett = this.value.normalize('NFD').toLowerCase().replace(/[\u0300-\u036f]/g, "");
    const sorok = document.querySelectorAll('#tablazatBody tr');
    let found = false; // Nyomozó változó az elemek kereséséhez

    sorok.forEach(function(sor) {
        // Kezdjük a sor láthatóságának alaphelyzetbe állításával
        let showRow = false;

        // Ellenőrizzük az összes td és th elemet a sorban
        const cells = sor.querySelectorAll('td, th');
        cells.forEach(function(cell) {
            const cellValue = cell.textContent.normalize('NFD').toLowerCase().replace(/[\u0300-\u036f]/g, "");
            if (cellValue.includes(keresett)) {
                showRow = true; // Az aktuális sorban található keresett kifejezés
            }
        });

        // Ha a sor bármelyik cellája tartalmazza a keresett kifejezést, jelenítsük meg
        if (showRow) {
            sor.style.display = '';
            found = true; // Találtunk legalább egy megfelelő sort
        } else {
            sor.style.display = 'none';
        }
    });

    // Ellenőrizzük, hogy van-e találat
    const noResultMessage = document.getElementById('noResultMessage');
    if (found) {
        noResultMessage.style.display = 'none'; // Rejtsük el az üzenetet, ha találtunk elemet
    } else {
        noResultMessage.style.display = '';
    }
});


const noResultDiv = document.createElement('div');
noResultDiv.id = 'noResultMessage';
noResultDiv.className = 'text-danger text-center mt-3 h3';
noResultDiv.textContent = "Nincs ilyen nevezetű, árú vagy számú képzés :(";
noResultDiv.style.display = 'none'; 
document.querySelector('#tablazat').appendChild(noResultDiv);