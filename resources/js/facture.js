document.addEventListener('DOMContentLoaded', () => {
    console.log('Facture page loaded');

    if (typeof Chart === 'undefined') {
        console.warn('Chart.js not loaded');
        return;
    }

    const sparklineConfig = (data, colors) => ({
        type: 'bar',
        data: {
            labels: data.map((_, i) => i),
            datasets: [
                {
                    data: data,
                    backgroundColor: colors, 
                    borderRadius: 2,
                    barThickness: 8,
                    maxBarThickness: 8
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false }
            },
            scales: {
                x: {
                    display: false,
                    grid: { display: false }
                },
                y: {
                    display: false,
                    beginAtZero: true,
                    grid: { display: false }
                }
            },
            layout: {
                padding: 0
            }
        }
    });

    const charts = [
        { 
            id: 'chart-all', 
            data: [4, 6, 5, 7, 6], 
            colors: ['#22c55e', '#86efac', '#22c55e', '#86efac', '#22c55e'] 
        },
        { 
            id: 'chart-draft', 
            data: [7, 5, 6, 4, 5], 
            colors: ['#ef4444', '#fca5a5', '#ef4444', '#fca5a5', '#ef4444'] 
        },
        { 
            id: 'chart-unpaid', 
            data: [3, 5, 4, 6, 7], 
            colors: ['#22c55e', '#86efac', '#22c55e', '#86efac', '#22c55e'] 
        },
        { 
            id: 'chart-due', 
            data: [6, 5, 7, 4, 6], 
            colors: ['#ef4444', '#fca5a5', '#ef4444', '#fca5a5', '#ef4444'] 
        }
    ];

    charts.forEach(({ id, data, colors }) => {
        const canvas = document.getElementById(id);
        if (!canvas) {
            console.warn(`Canvas ${id} not found`);
            return;
        }

        new Chart(canvas, sparklineConfig(data, colors));
    });
});