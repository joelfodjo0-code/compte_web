new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'],
        datasets: [
            {

                data: [200,2225,7825,500,6000,3000,800,6000,5000,7000],
                borderColor: '#8b5cf6',
                borderWidth: 2,
                tension: 0.4,
                fill: false,
                pointRadius: 0
            },
            {
                data: [null,null,null,null,null,null,null,null,null,7000,5000,6000],
                borderColor: '#8b5cf6',
                borderWidth: 2,
                tension: 0.4,
                fill: false,
                pointRadius: 0,
                borderDash: [6,6]
            }
        ]
    },
    options: { 
        responsive: true,
        maintainAspectRatio: true,
        plugins: { legend: { display: false } },
        scales: {
            y: { 
                beginAtZero: true,
                max: 10000,        
                ticks: {
                    stepSize: 2000, 
                    callback: function(value) {
                        return value >= 1000 ? (value/1000) + 'k' : value;
                    }
                }
            },
            x: { grid: { display: false } }
        }
    }
});



new Chart(document.getElementById('netRevenueChart'), {
    type: 'doughnut',
    data: {
        labels: ['Clients','Inscrits'],
        datasets: [{
            data: [1254, 1145],
            backgroundColor: ['#8b5cf6', '#f59e0b'],
            borderWidth: 0
        }]
    },
    options: { 
        responsive: true,
        maintainAspectRatio: true,
        cutout: '75%',
        circumference: 180,
        rotation: 270,
        plugins: { 
            legend: { display: false },
            tooltip: { enabled: false }
        }
    }
});


new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: ['9 Jul','10 Jul','11 Jul','12 Jul','14 Jul','15 Jul','16 Jul'],
        datasets: [
            { 
                label: 'Juin 09',
                data: [20000,15000,10000,22000,10000,18000,20000],
                backgroundColor: '#8b5cf6'
            },
            { 
                label: '25 Design projects',
                data: [15000,13000,16000,18000,10000,15000,16000],
                backgroundColor: '#60a5fa'
            }
        ]
    },
    options: { 
        responsive: true,
        maintainAspectRatio: true,
        plugins: { 
            legend: { 
                display: true,
                position: 'top',
                align: 'start',
                labels: { boxWidth: 12, padding: 10, font: { size: 11 } }
            }
        },
        scales: {
            y: { 
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value >= 1000 ? (value/1000) + 'k' : value;
                    }
                }
            },
            x: { grid: { display: false } }
        }
    }
});


new Chart(document.getElementById('sideChart'), {
    type: 'bar',
    data: {
        labels: ['Revenue brut', 'Rétention', 'Coupon'],
        datasets: [
            { 
                data: [50, 45, 40], 
                backgroundColor: '#86efac' 
            },
            { 
                data: [30, 35, 30], 
                backgroundColor: '#60a5fa' 
            },
            { 
                data: [20, 20, 30], 
                backgroundColor: '#c084fc' 
            }
        ]
    },
    options: { 
        responsive: true,
        maintainAspectRatio: true,
        plugins: { 
            legend: { display: false }
        },
        scales: {
            y: { 
                display: false,
                stacked: true 
            },
            x: { 
                stacked: true,
                grid: { display: false },
                ticks: {
                    font: { size: 10 }
                }
            }
        }
    }
});

new Chart(document.getElementById('churnChart'), {
    type: 'bar',
    data: {
        labels: ['50-100','100-200','250-500','>$500'],
        datasets: [
            { data: [40,25,60,45], backgroundColor: '#86efac' },
            { data: [30,20,40,35], backgroundColor: '#60a5fa' },
            { data: [20,15,25,20], backgroundColor: '#c084fc' }
        ]
    },
    options: { 
        responsive: true,
        maintainAspectRatio: true,
        plugins: { legend: { display: false } },
        scales: {
            y: { display: false, stacked: true },
            x: { stacked: true, grid: { display: false } }
        }
    }
});