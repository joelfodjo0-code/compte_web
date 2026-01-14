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
            background: #FFFFFF;
            color: white;
            min-height: 100vh;
            padding: 20px;
        }

        .sidebar h3 {
            margin-bottom: 30px;
            color: #202224;
        }

        .menu a {
            display: block;
            color: #202224;
            text-decoration: none;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 8px;
            transition: background 0.2s, color 0.2s;
        }

        .menu a.active { 
            background: rgba(9, 2, 80, 0.97); 
            color: white;
        }

        .menu a:hover {
            background: rgba(9, 2, 80, 0.97);
            color: white;
        }
        
        .menu a.active:not(:hover) {
            background: rgba(9, 2, 80, 0.97); 
            color: white;
            
        }
       
        .main {
            flex: 1;
            padding: 25px;
            flex-direction: column;
            background: #FFFFFF;
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

         .content { 
            flex: 1; 
            background: #F5F6FA; 
            padding: 25px; 
        }

        .search {
            padding: 10px;
            width: 300px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        
        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }

        .card h4 {
            color: #666;
            margin-bottom: 10px;
        }

        .card strong {
            font-size: 22px;
        }

        .graph {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            height: 300px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
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
            background: #1DBF73;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .icon {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 8px;
        }


       
    </style>
</head>
<body>


<div class="sidebar">
    <h3>💳 Kouma FIN</h3>

    <div class="menu">
        <a href="#" class="active"><x-icons.bord class="icon" /> Tableau de bord</a>
        <a href="#"><x-icons.education class="icon" /> Éducation financière</a>
        <a href="#"><x-icons.favori class="icon" /> Favoris</a>
        <a href="#"><x-icons.gestion class="icon" /> Gestion des rôles</a>
        <a href="#"><x-icons.rapport class="icon" /> Rapport</a>

        <hr style="margin:60px 0">

        <a href="#"><x-icons.pack class="icon" /> Prix des packs</a>
        <a href="#"><x-icons.utilisateurs class="icon" /> Utilisateurs</a>
        <a href="#"><x-icons.facture class="icon" /> Facture</a>
        <a href="#"><x-icons.equipe class="icon" /> Équipe</a>
        

        <hr style="margin:20px 0">

        <a href="#"><x-icons.setting class="icon" /> Paramètres</a>

        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <x-icons.deconnexion class="icon" /> Déconnexion
        </a>


        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>
</div>


<div class="main">

    
    <div class="header">
        <input type="text" class="search" placeholder="🔍 Rechercher">

        <div>
            🔔 &nbsp; 👤 {{ auth()->user()->name ?? 'Admin' }}
        </div>
    </div>
    
    <div class="content">
    <h2>Tableau de bord</h2>

    
    <div class="cards">
        <div class="card">
            <h4>Utilisateurs Total</h4>
            <strong>40,689</strong>
        </div>

        <div class="card">
            <h4>Commande Totale</h4>
            <strong>10,293</strong>
        </div>

        <div class="card">
            <h4>Vente Totale</h4>
            <strong>89,000</strong>
        </div>

        <div class="card">
            <h4>Total en attente</h4>
            <strong>2,040</strong>
        </div>
    </div>

    <div class="graph">
        📈 Graphique des ventes (placeholder)
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

</body>
</html>
