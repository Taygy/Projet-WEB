const API_KEY = '9784640387068042834';
// Récupération de l'élément HTML nécessaire
const codePostalInput = document.getElementById('code_postal');
const villeInput = document.getElementById('ville');

// Fonction pour récupérer les informations de la commune correspondant au code postal
function getCommuneByCodePostal(codePostal) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `https://apicarto.ign.fr/api/codes-postaux/communes/${codePostal}?key=${API_KEY}`);
        xhr.onload = function () {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.length > 0) {
                    resolve(data[0]);
                } else {
                    reject(new Error('Aucune commune trouvée'));
                }
            } else {
                reject(new Error('Erreur de communication avec le serveur'));
            }
        };
        xhr.onerror = function () {
            reject(new Error('Erreur de communication avec le serveur'));
        };
        xhr.send();
    });
}

// Fonction pour remplir automatiquement le champ de la ville
function remplirVille(codePostal) {
    getCommuneByCodePostal(codePostal)
        .then(commune => {
            villeInput.value = commune.nomCommune;
        })
        .catch(error => {
            console.error(error);
            villeInput.value = '';
        });
}

// Ajout d'un écouteur d'événement pour le champ de code postal
codePostalInput.addEventListener('input', event => {
    const codePostal = event.target.value;
    if (codePostal.length === 5) {
        remplirVille(codePostal);
    } else {
        villeInput.value = '';
    }
});