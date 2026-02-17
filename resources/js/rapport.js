document.addEventListener('DOMContentLoaded', () => {

    // ===== MINI CHARTS  =====
    function createMiniSparkline(canvasId, data, color) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;

        const ctx = canvas.getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 94);
        gradient.addColorStop(0, color + '40'); 
        gradient.addColorStop(1, color + '00'); 

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.map((_, i) => i),
                datasets: [{
                    data,
                    borderColor: color,
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4, 
                    borderWidth: 2,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: false,
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
    }

    createMiniSparkline('chartSolde', [20, 45, 30, 55, 35, 58, 48], '#22c55e');
    createMiniSparkline('chartDepense', [200, 260, 240, 300, 280, 250, 220], '#ef4444');
    createMiniSparkline('chartEntree', [20, 85, 50, 75, 45, 90, 100], '#10b981');


    // ===== GRAPHE ÉVOLUTION DE SOLDE  =====
    const balanceCtx = document.getElementById('balanceChart');

    new Chart(balanceCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                data: [1000, 1400, 800, 1600, 900, 1300, 400, 1700, 700, 1500, 1100, 1500, 1500, 1500],
                borderColor: '#1e40af',
                backgroundColor: 'transparent',
                tension: 0, 
                borderWidth: 2,
                pointRadius: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#111827',
                    padding: 10,
                    callbacks: {
                        label: ctx => `${ctx.raw} K XOF`
                    }
                }
            },
            scales: {
                x: {
                    grid: { 
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 11
                        }
                    }
                },
                y: {
                    min: 0,
                    max: 2000,
                    ticks: {
                        stepSize: 500,
                        callback: v => v,
                        color: '#6b7280',
                        font: { size: 11 }
                    },
                    grid: {
                        color: '#e5e7eb',
                        drawBorder: false
                    }
                }
            },
            layout: {
                padding: { bottom: 10, left: 10, right: 10 }
            }
        }
    });


    // ===== GRAPHE ENTRÉE DE FONDS =====
    const incomeCtx = document.getElementById('incomeChart');

    new Chart(incomeCtx, {
        type: 'bar',
        data: {
            labels: ['Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Inscriptions',
                    data: [8000, 12000, 18000, 25000, 15000, 14000, 16000, 10000],
                    backgroundColor: '#1e3a8a',
                    borderRadius: 4
                },
                {
                    label: 'Paiements',
                    data: [6000, 10000, 12000, 15000, 16000, 18000, 8000, 6000],
                    backgroundColor: '#93c5fd',
                    borderRadius: 4
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
                    backgroundColor: '#111827',
                    padding: 10,
                    callbacks: {
                        label: ctx => `${ctx.dataset.label}: ${ctx.raw} XOF`
                    }
                }
            },
            scales: {
                x: {
                    stacked: true,
                    grid: { 
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 11
                        }
                    }
                },
                y: {
                    stacked: true,
                    min: 0,
                    max: 40000,
                    ticks: {
                        stepSize: 10000,
                        callback: value => (value / 1000) + 'K',
                        color: '#6b7280',
                        font: {
                            size: 11
                        }
                    },
                    grid: {
                        color: '#e5e7eb',
                        drawBorder: false
                    }
                }
            },
            layout: {
                padding: {
                    bottom: 10,
                    left: 10,
                    right: 10
                }
            }
        }
    });


    // ===== GESTION DES OVERLAYS =====
    function openOverlayById(id) {
        const overlay = document.getElementById(id);
        if (!overlay) return;

        closeAllOverlays();
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeAllOverlays() {
        document.querySelectorAll('.overlay').forEach(o => {
            o.classList.add('hidden');
        });
        document.body.style.overflow = '';
    }

    document.getElementById('openExportPrice')
        ?.addEventListener('click', () =>
            openOverlayById('exportPriceOverlay')
        );

    document.getElementById('openCreateDate')
        ?.addEventListener('click', () =>
            openOverlayById('filterOverlay')
        );

    document.querySelectorAll('[data-close]')
        .forEach(btn => btn.addEventListener('click', closeAllOverlays));

    document.getElementById('openEditColumns')
        ?.addEventListener('click', () =>
            openOverlayById('editColumnsOverlay')
        );

});