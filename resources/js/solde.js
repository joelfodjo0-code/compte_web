const months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
    'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

const monthlyData = {
    'Janvier':   { revenus: [65, 80, 95, 75], depenses: [60, 75, 90, 70] },
    'Février':   { revenus: [70, 85, 100, 80], depenses: [65, 80, 95, 75] },
    'Mars':      { revenus: [80, 100, 105, 85], depenses: [75, 95, 100, 80] },
    'Avril':     { revenus: [75, 85, 80, 78], depenses: [70, 80, 75, 73] },
    'Mai':       { revenus: [85, 100, 70, 90], depenses: [80, 95, 65, 85] },
    'Juin':      { revenus: [90, 100, 85, 70], depenses: [85, 95, 80, 65] },
    'Juillet':   { revenus: [60, 75, 85, 95], depenses: [55, 70, 80, 90] },
    'Août':      { revenus: [50, 65, 75, 85], depenses: [48, 60, 70, 80] },
    'Septembre': { revenus: [85, 100, 110, 95], depenses: [80, 95, 105, 90] },
    'Octobre':   { revenus: [70, 85, 95, 80], depenses: [65, 80, 90, 75] },
    'Novembre':  { revenus: [75, 90, 100, 85], depenses: [70, 85, 95, 80] },
    'Décembre':  { revenus: [95, 110, 105, 100], depenses: [90, 105, 100, 95] }
};

const labels = ['Semaine 1', 'Semaine 2', 'Semaine 3', 'Semaine 4'];

let soldeChart = null;

document.addEventListener('DOMContentLoaded', function() {

    if (typeof Chart === 'undefined') {
        console.error('Chart.js n\'est pas chargé.');
        return;
    }

    const canvas = document.getElementById('soldeChart');
    if (!canvas) {
        console.error('Élément canvas #soldeChart introuvable');
        return;
    }

    const monthSelect = document.querySelector('.legend select');
    if (!monthSelect) {
        console.error('Élément select introuvable');
        return;
    }

    populateMonthSelect(monthSelect);

    initChart(canvas);

    monthSelect.addEventListener('change', function() {
        updateChart(this.value);
    });

    console.log('✅ Graphique initialisé avec succès');
});

function populateMonthSelect(selectElement) {
    selectElement.innerHTML = '';
    
    months.forEach((month, index) => {
        const option = document.createElement('option');
        option.value = month;
        option.textContent = month;
        selectElement.appendChild(option);
    });

    selectElement.value = 'Janvier';
}

function initChart(canvas) {
    const ctx = canvas.getContext('2d');

    const chartConfig = {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Revenus totaux',
                    data: monthlyData['Janvier'].revenus,
                    backgroundColor: '#1C3661',
                    borderRadius: 8,
                    barThickness: 40
                },
                {
                    label: 'Dépenses totales',
                    data: monthlyData['Janvier'].depenses,
                    backgroundColor: '#22c55e',
                    borderRadius: 8,
                    barThickness: 40
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: '#202224',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderColor: '#e5e7eb',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y + '%';
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#202224',
                        font: {
                            family: 'Nunito Sans, sans-serif',
                            size: 13,
                            weight: '600'
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                    grid: {
                        color: '#f3f4f6',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            family: 'Nunito Sans, sans-serif',
                            size: 12,
                            weight: '600'
                        },
                        stepSize: 20,
                        callback: function(value) {
                            return value;
                        }
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    };

    soldeChart = new Chart(ctx, chartConfig);
}

// ==================== FONCTION DE MISE À JOUR DU GRAPHIQUE ====================
function updateChart(selectedMonth) {
    if (!soldeChart) {
        console.error('Le graphique n\'est pas initialisé');
        return;
    }

    if (!monthlyData[selectedMonth]) {
        console.error('Données introuvables pour le mois:', selectedMonth);
        return;
    }

    // Mettre à jour les données
    soldeChart.data.datasets[0].data = monthlyData[selectedMonth].revenus;
    soldeChart.data.datasets[1].data = monthlyData[selectedMonth].depenses;

    // Rafraîchir le graphique avec une animation
    soldeChart.update('active');
}

// ==================== FONCTION UTILITAIRE POUR DÉBOGUER ====================
function debugChart() {
    console.log('État du graphique:', {
        chartExists: !!soldeChart,
        canvasExists: !!document.getElementById('soldeChart'),
        chartJsLoaded: typeof Chart !== 'undefined',
        currentData: soldeChart ? soldeChart.data : null
    });
}

// Exposer la fonction de débogage globalement
window.debugChart = debugChart;