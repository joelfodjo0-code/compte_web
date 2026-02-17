@extends('layouts.app')

@section('title', 'Rapports')

@vite(['resources/css/rapport.css', 'resources/js/rapport.js'])

@section('content')
<div class="rapport-wrapper">

    <div class="top-cards">
        <div class="stat-card">
            <div class="stat-left">
                <div class="stat-header">
                    <div class="stat-title">Solde disponible</div>
                    <button class="more-btn">&hellip;</button>
                </div>
                <div class="stat-value">43 647 XOF</div>
            <div class="stat-evolution up">
                <svg xmlns="http://www.w3.org/2000/svg" 
                 width="16" height="16" 
                 fill="none" 
                 stroke="#37B793" 
                 stroke-width="1.5" 
                 stroke-linecap="round" 
                 stroke-linejoin="round" >
                <path d="M8 2.667v10.666M11.335 6S8.88 2.667 8 2.667C7.123 2.667 4.668 6 4.668 6"/>
                </svg>
                17% Mois dernier
            </div>
            </div>
            <div class="stat-right">
                <canvas id="chartSolde" width="110" height="94"></canvas>
                <div class="days">L M M J V S D</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-left">
                <div class="stat-header">
                    <div class="stat-title">Dépense totale</div>
                    <button class="more-btn">&hellip;</button>
                </div>
                <div class="stat-value">64 465 XOF</div>
                <div class="stat-evolution down">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    width="16" height="16" 
                    fill="none" 
                    stroke="#DE2C41" 
                    stroke-width="1.5" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" >
                    <path d="M8 13.333V2.667M11.335 10S8.88 13.333 8 13.333C7.123 13.333 4.668 10 4.668 10"/>
                    </svg>
                    17% Mois dernier
                </div>
            </div>
            <div class="stat-right">
                <canvas id="chartDepense" width="110" height="94"></canvas>
                <div class="days">L M M J V S D</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-left">
                <div class="stat-header">
                    <div class="stat-title">Entrée de fonds</div>
                    <button class="more-btn">&hellip;</button>
                </div>
                <div class="stat-value">65 869 XOF</div>
                <div class="stat-evolution up">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    width="16" height="16" 
                    fill="none" 
                    stroke="#37B793" 
                    stroke-width="1.5" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" >
                    <path d="M8 2.667v10.666M11.335 6S8.88 2.667 8 2.667C7.123 2.667 4.668 6 4.668 6"/>
                    </svg>
                    17% Mois dernier
                </div>
            </div>
            <div class="stat-right">
                <canvas id="chartEntree" width="110" height="94"></canvas>
                <div class="days">L M M J V S D</div>
            </div>
        </div>
    </div>

    <div class="middle-card">
        <div class="card-header">
            <h3>Évolution de solde</h3>
            <div class="card-actions">
                <select>
                    <option>Ce mois</option>
                    <option>Ce trimestre</option>
                    <option>Cette année</option>
                </select>
            <button class="export-btn">
                Exporter CSV
                <svg xmlns="http://www.w3.org/2000/svg" 
                     width="16" height="16" 
                     fill="none" 
                     stroke="#fff" 
                     stroke-width="1.5" 
                     stroke-linecap="round" 
                     stroke-linejoin="round" >
                    <path d="M9.997 12.083V3.75m0 8.333c-.583 0-1.673-1.662-2.083-2.083m2.083 2.083c.584 0 1.674-1.662 2.084-2.083M16.665 13.75c0 2.068-.431 2.5-2.5 2.5H5.832c-2.068 0-2.5-.432-2.5-2.5"/>
                </svg>
            </button>
            </div>
        </div>
        <div class="chart-container">
            <canvas id="balanceChart"></canvas>
        </div>
    </div>

    <div class="bottom-cards">
        <div class="bottom-card">
            <div class="card-header-bottom">
                <h3>Statistiques</h3>
                <button class="more-btn">&hellip;</button>
            </div>
            <div class="big-number">289.000 <span class="percentage-up">+4,6%</span></div>
            <div class="subtitle">Total revenu de 3 packs</div>

            <ul class="packs-list">
                <li>
                    <span class="pack-name"><input type="checkbox">Pack STATER</span>
                    <span class="pack-amount">200 000 XOF</span>
                </li>
                <li>
                    <span class="pack-name"><input type="checkbox">Pack PRO</span>
                    <span class="pack-amount">69 038 XOF</span>
                </li>
                <li>
                    <span class="pack-name"><input type="checkbox">Pack PREMIUM</span>
                    <span class="pack-amount">49 083 XOF</span>
                </li>
            </ul>
        </div>

        <div class="bottom-card">
            <div class="card-header-bottom">
                <h3>Entrée de fonds</h3>
                <div class="legend-group">
                    <div class="legend-item">
                        <span class="legend-square dark"></span>
                        <span>Inscriptions</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-square light"></span>
                        <span>Paiements</span>
                    </div>
                    <span class="legend-period">Dernier 8 mois</span>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="incomeChart"></canvas>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection