document.addEventListener('DOMContentLoaded', () => {

    const createLineChart = (ctx, color, data) => {
        return new Chart(ctx, {
            type: 'line',
            data: {
                labels: Array(data.length).fill(''),
                datasets: [{
                    data: data,
                    borderColor: color,
                    borderWidth: 2,
                    tension: 0.4,
                    fill: false,
                    pointRadius: 0,
                    pointHoverRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { 
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: { 
                    x: { display: false },
                    y: { display: false }
                }
            }
        });
    };

   
    createLineChart(chartApi, '#10B981', [20, 4, 3, 5, 4, 3, 2, 5, 7, 8, 8, 10]);
    createLineChart(chartErrors, '#EF4444', [8, 9, 7, 8, 7, 6, 5, 4, 5, 4, 3, 3]);
    createLineChart(chartWebhooks, '#10B981', [3, 4, 15, 6, 8, 10, 9, 7, 6, 5, 4, 3]);
    createLineChart(chartResponses, '#EF4444', [2, 3, 15, 5, 6, 0, 8, 9, 10, 15, 12, 10]);

   
    new Chart(chartBar, {
        type: 'bar',
        data: {
            labels: ['Jan','Fev','Mar','Avr','Mai','Juin','Juil','Aou','Sep','Oct','Nov','Dec'],
            datasets: [
                {
                    label: 'GET',
                    data: [5, 10, 9, 14, 12, 13, 15, 11, 15, 10, 14, 12],
                    backgroundColor: '#2563EB',
                    barPercentage: 1,
                    categoryPercentage: 1
                },
                {
                    label: 'SUCCESS',
                    data: [3, 7, 6, 10, 8, 9, 10, 7, 9, 6, 10, 8],
                    backgroundColor: '#22C55E',
                    barPercentage: 1,
                    categoryPercentage: 1
                },
                {
                    label: 'DELETE',
                    data: [4, 8, 7, 12, 9, 11, 12, 9, 11, 8, 12, 10],
                    backgroundColor: '#F59E0B',
                    barPercentage: 1,
                    categoryPercentage: 1
                },
                {
                    label: 'POST',
                    data: [3, 6, 5, 9, 7, 8, 9, 6, 9, 5, 9, 7],
                    backgroundColor: '#1E293B',
                    barPercentage: 1,
                    categoryPercentage: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { 
                legend: { display: false },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                x: { 
                    stacked: true,
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#9CA3AF',
                        font: {
                            size: 12
                        }
                    }
                },
                y: { 
                    stacked: true,
                    beginAtZero: true,
                    max: 40,
                    ticks: {
                        stepSize: 10,
                        color: '#9CA3AF',
                        font: {
                            size: 12
                        }
                    },
                    grid: {
                        color: '#F3F4F6',
                        drawBorder: false
                    }
                }
            },
            layout: {
                padding: {
                    top: 10,
                    bottom: 10
                }
            },
          
            barThickness: 24, 
            maxBarThickness: 24
        }
    });

});