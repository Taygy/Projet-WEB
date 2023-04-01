const API_KEY = '9784640387068042834';

// Récupération des éléments HTML nécessaires
const codePostalInput = document.getElementById('code_postal');
const villeInput = document.getElementById('ville');

// Fonction pour récupérer les informations de la commune correspondant au code postal
function getCommuneByCodePostal(codePostal) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `https://apicarto.ign.fr/api/codes-postaux/communes/${codePostal}?key=${API_KEY}`);
        xhr.onload = function () {
            if (xhr.status === 200 || xhr.status === 201) {
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

// Fonction pour récupérer les informations du code postal correspondant à la ville
function getCodePostalByCommune(ville) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `https://apicarto.ign.fr/api/communes/codes-postaux/${ville}?key=${API_KEY}`);
        xhr.onload = function () {
            if (xhr.status === 200 || xhr.status === 201) {
                const data = JSON.parse(xhr.responseText);
                if (data.length > 0) {
                    resolve(data[0]);
                } else {
                    reject(new Error('Aucun code postal trouvé'));
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

// Fonction pour auto-compléter le champ de ville en fonction du code postal
function autoRemplirVille(codePostal) {
    getCommuneByCodePostal(codePostal)
        .then(commune => {
            villeInput.value = commune.nomCommune;
        })
        .catch(error => {
            console.error(error);
            villeInput.value = '';
        });
}

// Fonction pour auto-compléter le champ de code postal en fonction de la ville
function autoRemplirCodePostal(ville) {
    getCodePostalByCommune(ville)
        .then(codePostal => {
            codePostalInput.value = codePostal.codePostal;
        })
        .catch(error => {
            console.error(error);
            codePostalInput.value = '';
        });
}

// Ajout d'un écouteur d'événement pour le champ de code postal
if (codePostalInput) {
    codePostalInput.addEventListener('input', event => {
        const codePostal = event.target.value;
        if (codePostal.length === 5) {
            autoRemplirVille(codePostal);
        } else {
            villeInput.value = '';
        }
    });
} else {
    console.error("L'élément HTML avec l'ID 'code_postal' n'a pas été trouvé.");
}

// Ajout d'un écouteur d'événement pour le champ de la ville
villeInput.addEventListener('input', event => {
    const ville = event.target.value;
    if (ville.length > 0) {
        remplirCodePostal(ville);
    } else {
        codePostalInput.value = '';
    }
});

// Fonction pour récupérer le code postal correspondant à une ville
function getCodePostalByVille(ville) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `https://apicarto.ign.fr/api/codes-postaux/communes?nom=${ville}&key=${API_KEY}`);
        xhr.onload = function () {
            if (xhr.status === 200 || xhr.status === 201) {
                const data = JSON.parse(xhr.responseText);
                if (data.length > 0) {
                    resolve(data[0].codesPostaux[0]);
                } else {
                    reject(new Error('Aucun code postal trouvé'));
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

// Fonction pour remplir automatiquement le champ du code postal
function remplirCodePostal(ville) {
    getCodePostalByVille(ville)
        .then(codePostal => {
            codePostalInput.value = codePostal;
        })
        .catch(error => {
            console.error(error);
            codePostalInput.value = '';
        });
}