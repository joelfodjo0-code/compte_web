const months = [ 'Janvier','Février','Mars','Avril','Mai','Juin', 'Juillet','Août','Septembre','Octobre','Novembre','Décembre' ];

function populateSelect(id) { 
    const select = document.getElementById(id);
     months.forEach(m => { 
        const opt = document.createElement('option'); 
        opt.textContent = m; 
        select.appendChild(opt);
     }); } 
 
 populateSelect('monthSelect'); 
 populateSelect('monthSelectGraph');

const ctx = document.getElementById('salesChart').getContext('2d');

const monthlyData = {
    Janvier: [22, 35, 48, 64, 52, 41, 33, 29, 25, 21, 20, 20],
    Février: [20, 28, 36, 45, 50, 55, 60, 65, 70, 75, 80, 85],
    Mars:    [25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80],
    Avril:   [14, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48],
    Mai:     [4, 15, 32, 1, 20, 24, 8, 32, 36, 40, 24, 5],
    Juin:    [3, 8, 12, 16, 28, 14, 28, 62, 36, 34, 44, 10],
    Juillet: [0, 8, 12, 16, 20, 24, 28, 52, 36, 49, 4, 8],
    Août:    [6, 8, 12, 19, 30, 24, 28, 32, 36, 40, 44, 49],
    Septembre:[9, 18, 12, 16, 20, 24, 48, 32, 36, 40, 44, 18],
    Octobre: [4, 8, 38, 36, 2, 34, 28, 42, 36, 40, 64, 28],
    Novembre:[1, 3, 12, 76, 20, 44, 25, 32, 76, 10, 44, 38],
    Décembre:[3, 6, 12, 56, 26, 22, 58, 30, 66, 42, 54, 40],
};

const labels = ['5k', '10k', '15k', '20k', '25k', '30k', '35k', '40k', '45k', '50k', '55k', '60k'];

const chartConfig = {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Performance (%)',
            data: monthlyData['Janvier'],
            borderColor: '#1C3661',
            backgroundColor: 'rgba(28, 54, 97, 0.1)',
            tension: 0.3,
            fill: true,
            pointRadius: 6,
            pointBackgroundColor: '#1C3661',
            hoverRadius: 10,
            hoverBackgroundColor: '#1C3661'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: {
                enabled: true,
                mode: 'nearest',
                intersect: false,
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': ' + context.raw + '%';
                    }
                }
            }
        },
        interaction: {
            mode: 'nearest',
            intersect: false
        },
        scales: {
            x: {
                ticks: {
                    color: '#202224',
                    font: {
                        family: 'Nunito Sans, sans-serif',
                        size: 12, weight: '600'
                    }
                }
            },
            y: {
                beginAtZero: true,
                min: 20,
                max: 100,
                ticks: {
                    stepSize: 20,
                    callback: value => value + '%',
                    color: '#202224',
                    font: {
                        family: 'Nunito Sans, sans-serif',
                        size: 12, weight: '600'
                    }
                }
            }
        }
    }
};
const salesChart = new Chart(ctx, chartConfig);

document.getElementById('monthSelect').addEventListener('change', function () {
    const selectedMonth = this.value;
    salesChart.data.datasets[0].data = monthlyData[selectedMonth];
    salesChart.update();
});
