// public/js/table.js

// public/js/table.js

document.addEventListener('DOMContentLoaded', function() {
    // Hämta datan från routen för marin data
    fetch('/marine/data')
        .then(response => response.json())
        .then(data => {
            // Skapa tabell med den hämtade datan
            const table = createTable(data);
            const tableContainer = document.getElementById('table-container');
            tableContainer.appendChild(table);
        })
        .catch(error => {
            console.error('Error fetching marine data:', error);
        });
});

