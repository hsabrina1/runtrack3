document.addEventListener('DOMContentLoaded', () => {
    const typeSelect = document.getElementById('type');
    const filterButton = document.getElementById('filterButton');
    const resultsDiv = document.getElementById('results');

    // Fonction pour extraire les types uniques
    function getUniqueTypes(data) {
        const types = new Set();
        data.forEach(pokemon => pokemon.type.forEach(type => types.add(type)));
        return Array.from(types);
    }

    // Fonction pour remplir la liste déroulante des types
    function populateTypeSelect(types) {
        typeSelect.innerHTML = '<option value="">Tous</option>';
        types.forEach(type => {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            typeSelect.appendChild(option);
        });
    }

    // Fonction pour filtrer les données selon le type sélectionné
    function filterData(data) {
        const type = typeSelect.value;
        
        const filteredData = data.filter(pokemon => {
            return type === '' || pokemon.type.includes(type);
        });
        
        displayResults(filteredData);
    }

    // Fonction pour afficher les résultats
    function displayResults(data) {
        resultsDiv.innerHTML = '';
        if (data.length === 0) {
            resultsDiv.textContent = 'Aucun résultat trouvé.';
            return;
        }
        data.forEach(pokemon => {
            const div = document.createElement('div');
            div.innerHTML = `<strong>${pokemon.name.french}</strong> (ID: ${pokemon.id})<br>
                             Type(s): ${pokemon.type.join(', ')}<br>
                             HP: ${pokemon.base.HP}, Attack: ${pokemon.base.Attack}, Defense: ${pokemon.base.Defense}<br>
                             Sp. Attack: ${pokemon.base['Sp. Attack']}, Sp. Defense: ${pokemon.base['Sp. Defense']}, Speed: ${pokemon.base.Speed}`;
            resultsDiv.appendChild(div);
        });
    }

    // Charger les données depuis le fichier JSON
    fetch('pokemon.json')
        .then(response => response.json())
        .then(data => {
            const types = getUniqueTypes(data);
            populateTypeSelect(types);
            filterButton.addEventListener('click', () => filterData(data));
        })
        .catch(error => console.error('Erreur de chargement du fichier JSON :', error));
});
