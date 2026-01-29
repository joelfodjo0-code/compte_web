@extends('layouts.app')

@section('title', 'Tableau')

@vite(['resources/css/tableau.css'])

@section('content')
 
<div class="overview-header">
    <h2>Vue d'ensemble</h2>
    <div class="header-filters">
        <span class="filter-item text-muted-blue">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" width="14" height="14">
        <g clip-path="url(#a)">
            <circle cx="7" cy="7" r="6" fill="#fff"/>
            <circle cx="7" cy="7" r="4.75" stroke="#6438F5" stroke-width="2.5"/>
        </g>
        <defs>
            <clipPath id="a">
                <path fill="#fff" d="M0 0h14v14H0z"/>
            </clipPath>
        </defs>
    </svg>
    Période choisie
</span>

        <span class="filter-item text-muted-blue">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" width="14" height="14">
        <g clip-path="url(#a)">
            <circle cx="7" cy="7" r="6" fill="#fff"/>
            <circle cx="7" cy="7" r="4.75" stroke="#F27B2C" stroke-width="2.5"/>
        </g>
        <defs>
            <clipPath id="a">
                <path fill="#fff" d="M0 0h14v14H0z"/>
            </clipPath>
        </defs>
    </svg>
    Dernière période
</span>

        <select class="filter-select text-muted-blue">
            <option>Jour</option>
            @for($i = 1; $i <= 31; $i++)
                <option>{{ $i }}</option>
            @endfor
        </select>
        <select class="filter-select text-muted-blue">
            <option>Tous les produits</option>
        </select>
        <span class="filter-icon">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="#888E9E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
    </svg>
</span>
        <span class="filter-icon filter-icon-svg">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
        <path
            stroke="#888E9E"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M5.631 8.672C3.558 7.122 2.08 5.416 1.273 4.457c-.25-.297-.332-.514-.381-.896-.169-1.31-.253-1.965.131-2.388C1.407.75 2.087.75 3.445.75h9.61c1.358 0 2.038 0 2.422.423.384.423.3 1.078.131 2.388-.05.382-.131.6-.38.896-.809.96-2.29 2.669-4.367 4.22a.875.875 0 0 0-.335.624c-.206 2.276-.396 3.522-.514 4.152-.191 1.018-1.634 1.63-2.407 2.177-.46.325-1.018-.062-1.078-.565-.113-.96-.327-2.91-.56-5.764a.874.874 0 0 0-.336-.63Z"
        />
    </svg>
</span>
    </div>
</div>

<div class="overview">
  
    <div class="left-column">
        <div class="top-cards-vertical">
            <div class="card card-revenue">
                <div class="card-title">
    <svg class="card-icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
        <path
            stroke="#555F75"
            stroke-width="1.3"
            d="M1.334 5.713c0-.798.322-1.286.987-1.657l2.74-1.524c1.435-.8 2.153-1.199 2.94-1.199.787 0 1.504.4 2.94 1.199l2.74 1.524c.665.37.986.86.986 1.657 0 .216 0 .324-.023.413-.124.467-.547.54-.956.54H2.314c-.41 0-.832-.073-.956-.54-.024-.089-.024-.197-.024-.413Z"
        />
        <path
            stroke="#555F75"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.2"
            d="M7.998 4.667h.006"
        />
        <path
            stroke="#555F75"
            stroke-width="1.3"
            d="M2.666 6.667v5.666m2.667-5.666v5.666M10.666 6.667v5.666m2.667-5.666v5.666M12.667 12.333H3.334a2 2 0 0 0-2 2c0 .184.15.334.333.334h12.667c.184 0 .333-.15.333-.334a2 2 0 0 0-2-2Z"
        />
    </svg>
    Revenue
</div>
                <div class="card-value">86,044 <span class="text-muted-blue">XOF</span></div>
                <div class="card-sub text-muted-blue">Depuis 40 000 XOF</div>
            </div>
            <hr class="separator">
            <div class="card">
                <div class="card-title">
      <Svg class="card-icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeWidth={1.2}
      d="M9.334 1.467a6.667 6.667 0 1 0 5.2 5.2"
    />
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeWidth={1.2}
      d="M8 6c-.737 0-1.334.448-1.334 1s.597 1 1.333 1c.737 0 1.334.448 1.334 1s-.597 1-1.334 1m0-4c.58 0 1.075.278 1.258.667M7.999 6v-.667M8 10c-.58 0-1.074-.278-1.257-.667M7.999 10v.667"
    />
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeLinejoin="round"
      strokeWidth={1.2}
      d="m11.333 4.668 2.784-2.786m.549 2.438-.079-2.06c0-.487-.29-.79-.818-.827l-2.083-.098"
    />
  </Svg>
    Transactions
</div>

                <div class="card-value">132</div>
                <div class="card-sub text-muted-blue">Depuis 8 mois</div>
            </div>
            <div class="card">
                <div class="card-title">
    <svg class="card-icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16">
        <path
            d="m3.054 5.738-1.72-.102C2.567 2.47 6.106.666 9.556 1.563c3.675.955 5.858 4.611 4.876 8.167-.813 2.94-3.536 4.89-6.533 4.937"
            stroke="#555F75"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
        />
        <path
            d="M8 14.667c-3.666 0-6.666-3.334-6.666-7.334"
            stroke="#555F75"
            stroke-dasharray="0.5 3"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
        />
        <path
            d="M9.069 6.481c-.235-.246-.81-.824-1.717-.414S6.3 7.8 7.673 7.94c.62.063 1.025-.074 1.396.314.37.387.439 1.465-.508 1.756-.947.29-1.56-.19-1.725-.34m1.102-4.323v.528m0 4.224v.582"
            stroke="#555F75"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
        />
    </svg>
    Transactions moye...
</div>

                <div class="card-value">90 000 <span class="text-muted-blue">XOF</span></div>
                <div class="card-sub text-muted-blue">Depuis 6 000 XOF</div>
            </div>
        </div>
    </div>

   
    <div class="main-content">
      
        <div class="grid-first">
            <div class="panel panel-revenue">
                <div class="panel-header">
                    <select class="header-select">
                        <option>Tous les revenus</option>
                    </select>
                    <select class="header-select">
                        <option>Année passée</option>
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
                <canvas id="revenueChart"></canvas>
            </div>

            <div class="panel panel-revenue-net">
                <div class="panel-header">Revenue Net</div>
                <div class="net-revenue-container">
                    <canvas id="netRevenueChart"></canvas>
                    <div class="net-revenue-center">
                        <div class="net-revenue-label">Revenue</div>
                        <div class="net-revenue-value">15,000 XOF</div>
                    </div>
                </div>
                <div class="legend-boxes">
                    <div class="legend-box"><span class="dot dot-clients"></span> Clients<br><strong>1254</strong></div>
                    <div class="legend-box"><span class="dot dot-inscrits"></span> Inscrits<br><strong>1145</strong></div>
                </div>
            </div>
        </div>

        <div class="grid-second">
            <div class="panel panel-resume">
                <div class="panel-header">
                    <span>Résumé des rapports</span>
                    <div class="header-right">
    <span class="date-range"> <Svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20">
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeLinejoin="round"
      strokeWidth={1.5}
      d="M14.5 2.5V4m-9-1.5V4M2.875 10.182c0-3.268 0-4.902.94-5.917.938-1.015 2.45-1.015 5.473-1.015h1.425c3.022 0 4.534 0 5.473 1.015.939 1.015.939 2.65.939 5.917v.386c0 3.268 0 4.902-.94 5.917-.938 1.015-2.45 1.015-5.472 1.015H9.287c-3.023 0-4.535 0-5.474-1.015-.939-1.015-.939-2.65-.939-5.917v-.386ZM3.25 7h13.5"
    />
  </Svg>
  Juin 09 – Juil 16 2024
</span>
                        <span class="header-action">Horaire</span>
                       <span class="header-action">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20">
        <path
            stroke="#555F75"
            stroke-width="1.5"
            d="M1.666 5c0-1.167 0-1.75.227-2.196.2-.392.519-.71.91-.91.446-.227 1.03-.227 2.196-.227 1.167 0 1.75 0 2.196.227.392.2.71.518.91.91.228.446.228 1.03.228 2.196 0 1.167 0 1.75-.227 2.196-.2.392-.519.71-.91.91-.446.227-1.03.227-2.197.227-1.166 0-1.75 0-2.195-.227-.392-.2-.711-.518-.91-.91-.228-.446-.228-1.03-.228-2.196ZM1.666 15c0-1.167 0-1.75.227-2.196.2-.392.519-.71.91-.91.446-.227 1.03-.227 2.196-.227 1.167 0 1.75 0 2.196.227.392.2.71.518.91.91.228.446.228 1.03.228 2.196 0 1.167 0 1.75-.227 2.196-.2.392-.519.71-.91.91-.446.227-1.03.227-2.197.227-1.166 0-1.75 0-2.195-.227-.392-.2-.711-.518-.91-.91-.228-.446-.228-1.03-.228-2.196ZM11.666 15c0-1.167 0-1.75.227-2.196.2-.392.518-.71.91-.91.446-.227 1.03-.227 2.196-.227 1.167 0 1.75 0 2.196.227.392.2.71.518.91.91.228.446.228 1.03.228 2.196 0 1.167 0 1.75-.227 2.196-.2.392-.519.71-.91.91-.447.227-1.03.227-2.197.227-1.166 0-1.75 0-2.196-.227-.392-.2-.71-.518-.91-.91-.227-.446-.227-1.03-.227-2.196Z"
        />
        <path
            fill="#555F75"
            d="m12.79 8.213-.158-.733.157.733ZM11.785 7.21l.734.157-.734-.157Zm.73-2.117-.53-.53.53.53Zm2.39 2.39.53.53-.53-.53Zm3.257-4.585.65-.375-.65.375Zm-.5 1.828-.53-.53.53.53Zm.5-.56.65.374-.65-.375Zm-1.061-2.33.375-.65-.375.65Zm-1.829.5.53.53-.53-.53Zm.561-.5-.375-.65.375.65Zm1.829 2.89-.53-.53-2.757 2.756.53.53.53.531 2.757-2.756-.53-.53Zm-5.146.367.53.53 2.756-2.756-.53-.53-.53-.53-2.757 2.756.53.53Zm.272 3.12-.157-.733c-.146.031-.261.056-.36.074-.1.018-.16.026-.198.029-.039.002-.021-.004.025.008.06.015.133.051.196.114l-.53.53-.531.53c.307.308.69.33.936.315.232-.015.513-.077.776-.133l-.157-.734ZM11.786 7.21l-.733-.157c-.056.264-.118.544-.133.777-.016.246.006.628.314.935l.53-.53.53-.53a.438.438 0 0 1 .114.195c.012.046.006.064.009.025.002-.038.01-.098.028-.198.019-.098.043-.213.075-.36l-.734-.157Zm5.877-4.873-.53.53c.311.312.359.368.38.406l.65-.375.65-.375c-.146-.252-.376-.473-.62-.717l-.53.53Zm0 2.39.53.53c.244-.244.474-.465.62-.717l-.65-.375-.65-.375c-.021.037-.069.094-.38.406l.53.53Zm.5-1.83-.65.376a.517.517 0 0 1 0 .517l.65.375.65.375c.36-.624.36-1.393 0-2.017l-.65.375Zm-.5-.56.53-.53c-.244-.244-.465-.475-.716-.62l-.375.65-.375.649c.037.022.093.069.405.38l.53-.53Zm-2.39 0 .53.53c.312-.312.369-.36.406-.381l-.375-.65-.375-.65c-.251.146-.473.377-.716.62l.53.53Zm1.829-.5.375-.65a2.017 2.017 0 0 0-2.018 0l.375.65.375.649a.517.517 0 0 1 .518 0l.375-.65Zm-2.196 5.646-.53-.53c-.14.14-.339.238-.645.316-.153.039-.318.07-.506.102-.18.031-.39.065-.593.109l.157.733.157.734c.165-.036.334-.063.534-.098.192-.033.407-.072.622-.127.431-.11.924-.299 1.335-.709l-.53-.53Zm-3.12-.273.734.157c.043-.203.077-.413.108-.593a6.65 6.65 0 0 1 .102-.506c.079-.306.176-.504.317-.645l-.53-.53-.53-.53c-.411.41-.6.903-.71 1.334-.055.215-.094.43-.127.622-.034.2-.062.37-.097.534l.733.157Z"
        />
    </svg>
    Modifier le graphique
</span>
                    </div>
                </div>
                <div class="stats">
                    <div>
                        
                        Volumes nets des ventes
                        <div class="stat-row"> 
                        <strong>8 000 000 XOF</strong> 
                        <span class="up">+4.2%</span>
                        </div>
                    </div>
                    <div>
                        Paiements validés 
                        <div class="stat-row"> 
                        <strong>25,296</strong> 
                        <span class="down">-3.5%</span>
                        </div>
                    </div>
                    <div>
                        Nouveaux clients 
                        <div class="stat-row">
                        <strong>18,043</strong> 
                        <span class="up">+10.9%</span>
                        </div>
                    </div>
                    <div>
                        Nouveaux inscrits 
                        <div class="stat-row">
                        <strong>13,326</strong> 
                        <span class="up">+5.9%</span>
                        </div>
                    </div>
                </div>
                
                <div class="charts-container">
                    <div class="main-bar-chart">
                        <canvas id="barChart"></canvas>
                    </div>
                    <div class="vertical-divider"></div>
                    <div class="side-charts">
                        <div class="side-chart-item">
                            <canvas id="sideChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-column">
                <div class="panel panel-churn">
                    <div class="panel-header">Taux de désabonnement cli...</div>
                    <canvas id="churnChart"></canvas>
                </div>
                
                <div class="panel panel-inscriptions">
                    <div class="panel-header">Inscriptions récentes</div>
                    <ul class="list">
                        <li>
                            <img src="{{ asset('images/client1.jpg') }}" alt="Client 1" class="client-avatar" onerror="this.style.display='none'">
                            <div class="client-info">
                            <span class="client-name">Robert Fox</span>
                            <small class="client-subtitle">18 sept.</small>
                            </div>
                            <span class="client-amount">2 000 XOF<br><small>/mois</small></span>
                        </li>
                        <li>
                            <img src="{{ asset('images/client2.jpg') }}" alt="Client 2" class="client-avatar" onerror="this.style.display='none'">
                            <div class="client-info">
                            <span class="client-name">Darrell Steward</span>
                            <small class="client-subtitle">18 sep 18.</small>
                            </div>
                            <span class="client-amount">6 000 XOF<br><small>/mois</small></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection