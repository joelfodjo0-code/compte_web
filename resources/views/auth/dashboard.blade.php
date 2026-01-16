<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700&display=swap" rel="stylesheet">

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito Sans', sans-serif;
}

body {
    display: flex;
    background: #F5F6FA;
}


.sidebar {
    width: 250px;
    min-height: 100vh;
    padding: 20px;
    background: #FFFFFF;
    font-size: 14px;
}

.sidebar h3 {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-left: 15px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #202224;
}

.logo {
    width: 57px;
    height: 44px;
}


.menu a {
    display: block;
    padding: 10px;
    margin-bottom: 8px;
    text-decoration: none;
    color: #202224;
    border-radius: 6px;
    transition: background 0.2s, color 0.2s;
}

.menu a:hover,
.menu a.active {
    background: rgba(9, 2, 80, 0.97);
    color: #FFFFFF;
}

.menu hr {
    margin: 20px 0;
    border: none;
    border-top: 1px solid #E5E7EB;
}

.icon {
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 8px;
}


.main {
    flex: 1;
    padding: 25px;
    background: #FFFFFF;
    display: flex;
    flex-direction: column;
}


.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px;
    background: #FFFFFF;
    margin-top: -27px;
    margin-left: -25px;
}

.left-group {
    display: flex;
    align-items: center;
}

.line-icon {
    width: 22px;
    height: 25px;
    margin-left: 25px;
    margin-right: -20px;
    margin-top: 15px;
    color: #202224;
}


.search-wrapper {
    position: relative;
    display: inline-block;
}

.search {
    width: 388px;
    height: 38px;
    padding: 10px 10px 10px 40px;
    margin-left: 60px;
    border-radius: 100px;
    border: 1px solid #eaedf1ff;
    background-color: #F5F6FA;
}

.search-icon {
    position: absolute;
    left: 75px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    pointer-events: none;
    color: #F5F6FA;
}


.user-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.cloche-icon {
    width: 24px;
    height: 25px;
    margin-right:30px;
}

.user-block {
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.default-avatar {
    background-color: #F5F6FA;
    display: flex;
    align-items: center;
    justify-content: center;
}

.default-icon {
    width: 20px;
    height: 20px;
    color: #202224;
}

.user-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.user-name-row {
    display: flex;
    align-items: center;
    gap: 6px;
}

.user-name {
    font-size: 14px;
    font-weight: 700;
    color: #202224;
}

.user-role {
    font-size: 12px;
    font-weight: 600;
    color: #6B7280;
}

.chevron-icon {
    width: 6px;
    height: 4px;
    color: #565656;    
}

.chevron-btn { 
    width: 18px; 
    height: 18px; 
    border-radius: 50%; 
    border: none; 
    background-color: #D8D8D8; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    cursor: pointer; 
    transition: background-color 0.2s ease; 
    padding: 0;  
} 
.chevron-btn:hover { 
    background-color: #E0E2E7; 
}

.content {
    flex: 1;
    padding: 25px;
    background: #F5F6FA;
    margin-top: -15px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.card {
    background: #FFFFFF;
    padding: 20px;
    border-radius: 12px;
    margin-top: 30px;
}

.card h4 {
    margin-bottom: 10px;
    color: #666;
}

.card strong {
    font-size: 22px;
}


table {
    width: 100%;
    border-collapse: collapse;
    background: #FFFFFF;
    border-radius: 12px;
    overflow: hidden;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background: #F1F3F9;
}

.badge {
    padding: 5px 10px;
    font-size: 12px;
    color: #FFFFFF;
    background: #1DBF73;
    border-radius: 20px;
}


.graph {
    height: 470px;
    margin-bottom: 30px;
    padding: 20px;
    background: #FFFFFF;
    border-radius: 12px;
}

.graph-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.graph-title {
    font-size: 16px;
    font-weight: 700;
    color: #202224;
}

.graph-body {
    height: 350px; 
}


.graph-body canvas {
    width: 100% !important;
    height: 100% !important;
    display: block;
}

.graph-inner {
    padding: 20px;
    height: 100%;
}

.month-select {
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid #E5E7EB;
    background-color: #F5F6FA;
    font-size: 14px;
    color: #202224;
    cursor: pointer;
}


.card-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}


.card-icon {
    width: 42px;
    height: 42px;
    border-radius: 40%;
    display: flex;
    opacity: 1;
    align-items: center;
    justify-content: center;
}


.bg-purple { background: #EEF2FF; }
.bg-yellow { background: #fdf4e2ff; }
.bg-green  { background: #93e6bdff; }
.bg-orange { background: #feece5ff; }


.card-trend {
    margin-top: 6px;
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
}

.card-icon svg {
     width: 30px;
      height: 33px; 
      flex-shrink: 0;
    }

.card-trend.up {
    color: #16A34A;
}

.card-trend.down {
    color: #DC2626;
}

.trend-icon {
    display: inline-flex;
    align-items: center;
}

.trend-icon-svg {
    width: 16px;
    height: 16px;
}


.trend-label { color: #000;}

.section-title { font-size: 12px; 
    font-weight: 700; 
    color: #202224; 
    margin-bottom: 18px; 
    margin-right: 18px;
    padding-left: 12px;
}

.table-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 5px;
}


.table-header {
    margin-bottom: 35px;
    display: flex;
    justify-content: space-between;
    margin-right:16px;
}

.table-title {
    font-size: 16px;
    font-weight: 700;
    color: #202224;
    margin-left:16px;
}


.table-card table {
    width: 100%;
    border-collapse: collapse;
    margin-left:20px;
}



</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


<div class="sidebar">
   <h3>
    <img src="{{ asset('images/Frame.jpg') }}" alt=" logo Koum'a FIN" class="logo">
    Koum'a FIN
   </h3>



    <div class="menu">
        <a href="#" class="active"><x-icons.bord class="icon" /> Tableau de bord</a>
        <a href="#"><x-icons.education class="icon" /> Éducation financière</a>
        <a href="#"><x-icons.favori class="icon" /> Favoris</a>
        <a href="#"><x-icons.gestion class="icon" /> Gestion des rôles</a>
        <a href="#"><x-icons.rapport class="icon" /> Rapport</a>

        <hr style="margin:40px 0">

        <h5 class="section-title">Autres pages</h5>
        <a href="#"><x-icons.pack class="icon" /> Prix des packs</a>
        <a href="#"><x-icons.utilisateurs class="icon" /> Utilisateurs</a>
        <a href="#"><x-icons.facture class="icon" /> Facture</a>
        <a href="#"><x-icons.equipe class="icon" /> Équipe</a>
        

        <hr style="margin:120px 0">

        <a href="#"><x-icons.setting class="icon" /> Paramètres</a>

        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <x-icons.deconnexion class="icon" /> Déconnexion</a>


        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>
</div>


<div class="main">

    
    <div class="header">
        <div class="left-group">
            <x-icons.line class="line-icon" />
    <div class="search-wrapper">
    <x-icons.search class="search-icon"/>
    <input type="text" class="search" placeholder="Rechercher">
    </div>
    </div>
    <div class="user-info">

    <x-icons.cloche class="cloche-icon" />

<div class="user-block">
    <div class="user-avatar default-avatar">
        <img src="{{ asset('images/photo.jpg') }}" class="default-photo">
    </div>

    <div class="user-text">
        <div class="user-name-row">
            <span class="user-name">{{ auth()->user()->name }}</span>
        <button class="chevron-btn" type="button">
            <x-icons.chevron class="chevron-icon" />
        </button>
        </div>
        <span class="user-role">Admin</span>
    </div>
</div>

   </div>


    </div>
    
    <div class="content">
    <h2>Tableau de bord</h2>

    
    <div class="cards">

    <div class="card">
        <div class="card-top">
            <div>
                <h4>Utilisateurs Total</h4>
                <strong>40,689</strong>
                <div class="card-trend up">
                    <span class="trend-icon"><x-icons.up class="trend-icon-svg" /></span>
                    <span>8.5% </span>
                    <span class="trend-label">Au dessus d'hier</span>
                </div>
            </div>
            <div class="card-icon bg-purple">
                <x-icons.group />
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-top">
            <div>
                <h4>Commande Totale</h4>
                <strong>10,293</strong>
                <div class="card-trend up">
                    <span class="trend-icon"><x-icons.up class="trend-icon-svg" /></span>
                    <span>1.3%</span>
                    <span class="trend-label">Au dessus weekend P.</span>
                </div>
            </div>
            <div class="card-icon bg-yellow">
                <x-icons.commande />
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-top">
            <div>
                <h4>Vente Totale</h4>
                <strong>89,000</strong>
                <div class="card-trend down">
                    <span class="trend-icon"><x-icons.down class="trend-icon-svg" /></span>
                    <span>4.3%</span>
                    <span class="trend-label">En dessous d'hier</span>
                </div>
            </div>
            <div class="card-icon bg-green">
                <x-icons.vente />
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-top">
            <div>
                <h4>Total en attente</h4>
                <strong>2,040</strong>
                <div class="card-trend up">
                    <span class="trend-icon"><x-icons.up class="trend-icon-svg" /></span>
                    <span>1.8%</span>
                    <span class="trend-label"> Au dessus d'hier</span>
                </div>
            </div>
            <div class="card-icon bg-orange">
                <x-icons.total />
            </div>
        </div>
    </div>

</div>


   <div class="graph">
    <div class="graph-inner">
    <div class="graph-header">
        <h3 class="graph-title">Détails des ventes</h3>
        <select class="month-select" id="monthSelect">
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
        </select>
    </div>
    <div class="graph-body">
    <canvas id="salesChart"></canvas>
</div>
</div>
</div>


    <div class="table-card">
    <div class="table-header">
        <h3 class="table-title">Détails des ventes</h3>
        <select class="month-select" id="monthSelect">
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
        </select>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom du pack</th>
                <th>Pays</th>
                <th>Date</th>
                <th>Période</th>
                <th>Prix</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kouma Premium</td>
                <td>Burkina Faso</td>
                <td>12.10.2025 - 13:53</td>
                <td>Mensuel</td>
                <td>3 000 XOF</td>
                <td><span class="badge">Actif</span></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>

</div>
<script>
const ctx = document.getElementById('salesChart').getContext('2d');


const monthlyData = {
    Janvier: [22, 35, 48, 64, 52, 41, 33, 29, 25, 21, 20, 20],
    Février: [20, 28, 36, 45, 50, 55, 60, 65, 70, 75, 80, 85],
    Mars:    [25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80],
    Avril:    [14, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48],
    Mai:    [4, 15, 12, 16, 20, 24, 28, 32, 36, 40, 44, 5],
    Juin:    [3, 8, 12, 16, 20, 14, 28, 32, 36, 40, 44, 10],
    Juillet:    [0, 8, 12, 16, 20, 24, 28, 52, 36, 40, 44, 8],
    Août:    [6, 8, 12, 19, 30, 24, 28, 32, 36, 40, 44, 49],
    Septembre:    [9, 18, 12, 16, 20, 24, 28, 32, 36, 40, 44, 18],
    Octobre:    [4, 8, 18, 36, 2, 24, 28, 42, 36, 40, 44, 28],
    Novembre:    [1, 3, 12, 76, 20, 44, 25, 32, 66, 40, 44, 38],
    Décembre:    [3, 6, 12, 56, 26, 22, 28, 30, 36, 42, 44, 40],
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
            pointRadius: 4,
            pointBackgroundColor: '#1C3661'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false }
        },
        scales: {
            x: {
                ticks: {
                    color: '#202224'
                }
            },
            y: {
                beginAtZero: true,
                min: 20,
                max: 100,
                ticks: {
                    stepSize: 20,
                    callback: value => value + '%',
                    color: '#202224'
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
</script>

</body>
</html>

