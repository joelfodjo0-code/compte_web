@extends('layouts.app')

@section('title', 'Rapports')

@vite([
    'resources/css/developpeur.css',
    'resources/css/solde.css',
    'resources/js/developpeur.js'
])

@section('content')
<div class="dev-container">

    {{-- TOP CARDS --}}
    <div class="stats-cards">
        <div class="stat-card">
            <p class="label">Requêtes API</p>
            <h2 class="stat-value">9,452 <span class="up">↑ 18%</span></h2>
            <canvas id="chartApi"></canvas>
            <div class="dates">
                <span>Juin 08</span>
                <span>Aujourd'hui</span>
            </div>
        </div>

        <div class="stat-card">
            <p class="label">Répartition erreurs API</p>
            <h2 class="stat-value">8% <span class="down">↓ 54%</span></h2>
            <canvas id="chartErrors"></canvas>
            <div class="dates">
                <span>Juin 08</span>
                <span>Aujourd'hui</span>
            </div>
        </div>

        <div class="stat-card">
            <p class="label">Webhooks</p>
            <h2 class="stat-value">12,009 <span class="up">↑ 32%</span></h2>
            <canvas id="chartWebhooks"></canvas>
            <div class="dates">
                <span>Juin 08</span>
                <span>Aujourd'hui</span>
            </div>
        </div>

        <div class="stat-card">
            <p class="label">Réponse Webhooks</p>
            <h2 class="stat-value">25 <span class="down">↑ 50%</span></h2>
            <canvas id="chartResponses"></canvas>
            <div class="dates">
                <span>Juin 08</span>
                <span>Aujourd'hui</span>
            </div>
        </div>
    </div>

    {{-- BIG GRAPH --}}
    <div class="big-card">
        <div class="big-header">
            <h3>Répartition erreurs API</h3>
            <select>
                <option>Mois</option>
            </select>
        </div>

        <canvas id="chartBar"></canvas>

        <div class="totals">
            <div>
                <div class="total-label"><span class="dot blue"></span> Total requêtes Get</div>
                <strong>1,253</strong>
            </div>
            <div>
                <div class="total-label"><span class="dot purple"></span> Total requêtes Post</div>
                <strong>546</strong>
            </div>
            <div>
                <div class="total-label"><span class="dot yellow"></span> Total requêtes supprimés</div>
                <strong>258</strong>
            </div>
            <div>
                <div class="total-label"><span class="dot green"></span> Total requêtes réussie</div>
                <strong>189</strong>
            </div>
        </div>
    </div>

    {{-- HISTORY --}}
    <div class="table-header  dev-history">
    <h3>Historique des transactions</h3>
    <div class="table-actions">
        <div class="search-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
                <path
                    stroke="#0F0F10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="m14.584 14.583 3.75 3.75"
                />
                <path
                    stroke="#0F0F10"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M16.666 9.167a7.5 7.5 0 1 0-15 0 7.5 7.5 0 0 0 15 0Z"
                />
            </svg>
            <input type="text" placeholder="Chercher transaction">
        </div>
        <select>
            <option>Depuis 30 jours</option>
            <option>Depuis 7 jours</option>
        </select>
        <button class="filter-btn">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
        <path
            stroke="#888E9E"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M7.381 10.422C5.308 8.872 3.83 7.166 3.023 6.207c-.25-.297-.332-.514-.381-.896-.169-1.31-.253-1.965.131-2.388C3.157 2.5 3.837 2.5 5.195 2.5h9.61c1.358 0 2.038 0 2.422.423.384.423.3 1.078.131 2.388-.05.382-.131.6-.38.896-.809.96-2.29 2.669-4.368 4.221a.875.875 0 0 0-.334.623c-.206 2.276-.396 3.522-.514 4.152-.191 1.018-1.634 1.63-2.407 2.177-.46.326-1.018-.062-1.078-.565-.113-.96-.327-2.91-.56-5.764a.874.874 0 0 0-.336-.63Z"
        />
    </svg>
    Filtre
</button>

    </div>
</div>

    <div class="card full">
    <table>
        <thead>
            <tr>
                <th><input type="checkbox" class="table-checkbox"></th>
                <th>Facture</th>
                <th>Transaction</th>
                <th>Méthode</th>
                <th>Catégorie</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" class="table-checkbox"></td>
                <td>
                   <div class="transaction-cell">
                   <x-icons.book/>
                   KMF_97860474
                   </div>
                </td>
                <td>
                  <div class="transaction-cell">
                  <span class="transaction-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                    <rect width="31" height="31" x="0.5" y="0.5" fill="#fff" rx="15.5"/>
                    <rect width="31" height="31" x="0.5" y="0.5" stroke="#EAEDF2" rx="15.5"/>
                    <path fill="#FF5F00" d="M18.705 11.15h-5.408v9.718h5.408v-9.719Z"/>
                    <path fill="#EB001B" d="M13.64 16.009a6.169 6.169 0 0 1 2.36-4.86 6.18 6.18 0 1 0 0 9.719 6.17 6.17 0 0 1-2.36-4.86Z"/>
                    <path fill="#F79E1B" d="M26 16.009a6.18 6.18 0 0 1-10 4.859 6.18 6.18 0 0 0 0-9.718 6.181 6.181 0 0 1 10 4.859ZM25.411 19.838v-.198h.08v-.041h-.204v.04h.08v.2h.044Zm.397 0v-.24h-.063l-.072.166-.072-.165h-.063v.24h.045v-.181l.067.155h.046l.068-.156v.181h.044Z"/>
                  </svg>
                  </span>
                  <div class="transaction-text">
                  Master Card
                  <div class="transaction-sub">Paiement par carte</div>
                  </div>
                  </div>
                </td>
                <td>Master Card</td>
                <td>Transfert</td>
                <td>Jun 02, 2026</td>
                <td class="negative">-2,300 XOF</td>
                <td><span class="status success"><span class="status-dot success"></span>Complet</span></td>
            </tr>
            <tr>
                <td><input type="checkbox" class="table-checkbox"></td>
                <td>
                   <div class="transaction-cell">
                   <x-icons.book/>
                   KMF_97860474
                   </div>
                </td>
                <td>
                  <div class="transaction-cell">
                  <span class="transaction-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                    <rect width="31" height="31" x="0.5" y="0.5" fill="#fff" rx="15.5"/>
                    <rect width="31" height="31" x="0.5" y="0.5" stroke="#EAEDF2" rx="15.5"/>
                    <path fill="#1434CB" d="m15.903 12.872-1.337 6.247H12.95l1.337-6.247h1.616Zm6.799 4.034.85-2.346.49 2.346h-1.34Zm1.804 2.213H26l-1.305-6.247h-1.379c-.31 0-.572.18-.688.458l-2.425 5.789H21.9l.337-.933h2.073l.196.933Zm-4.22-2.04c.008-1.648-2.278-1.74-2.263-2.476.005-.224.218-.463.685-.524.232-.03.87-.053 1.594.28l.283-1.325a4.356 4.356 0 0 0-1.512-.276c-1.597 0-2.721.848-2.73 2.065-.01.899.803 1.4 1.414 1.7.63.306.842.502.839.776-.005.42-.503.605-.967.612-.813.012-1.284-.22-1.66-.395l-.293 1.37c.378.172 1.075.323 1.797.33 1.698 0 2.809-.838 2.814-2.137Zm-6.693-4.207-2.618 6.247H9.267l-1.289-4.986c-.078-.306-.146-.419-.384-.548-.388-.212-1.03-.409-1.594-.532l.038-.181h2.75c.35 0 .666.233.746.636l.68 3.616 1.682-4.252h1.697Z"/>
                  </svg>
                  </span>
                  <div class="transaction-text">
                  Visa Card
                  <div class="transaction-sub">Paiement par carte</div>
                  </div>
                  </div>
                </td>
                <td>Paiement en ligne</td>
                <td>Paiement</td>
                <td>Jun 03, 2026</td>
                <td class="positive">+6,000 XOF</td>
                <td><span class="status warning"><span class="status-dot warning"></span>En cours</span></td>
            </tr>
            <tr>
                <td><input type="checkbox" class="table-checkbox"></td>
                <td>
                   <div class="transaction-cell">
                   <x-icons.book/>
                   KMF_97860474
                   </div>
                </td>
                <td>
                  <div class="transaction-cell">
                  <span class="transaction-icon">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                    <rect width="31" height="31" x="0.5" y="0.5" fill="#fff" rx="15.5"/>
                    <rect width="31" height="31" x="0.5" y="0.5" stroke="#EAEDF2" rx="15.5"/>
                    <path fill="#253B80" d="m12.339 25.322.347-2.202-.772-.018H8.227l2.562-16.246a.214.214 0 0 1 .071-.127.209.209 0 0 1 .137-.05h6.216c2.064 0 3.489.43 4.232 1.277.349.397.57.813.678 1.27.113.48.115 1.053.005 1.753l-.008.05v.449l.348.197c.294.156.527.334.706.538.299.34.492.773.573 1.285.084.527.056 1.154-.081 1.864-.16.816-.417 1.527-.764 2.109-.32.536-.726.98-1.21 1.326a4.905 4.905 0 0 1-1.629.735c-.6.156-1.285.235-2.036.235h-.483c-.346 0-.682.124-.946.348-.265.228-.44.54-.493.88l-.037.198-.612 3.88-.028.143c-.007.045-.02.068-.038.083a.102.102 0 0 1-.064.023h-2.987Z"/>
                    <path fill="#179BD7" d="M22.799 11.081c-.019.119-.04.24-.064.365-.82 4.209-3.624 5.663-7.207 5.663h-1.824a.886.886 0 0 0-.875.75l-.934 5.923-.264 1.678a.467.467 0 0 0 .46.54h3.235a.779.779 0 0 0 .77-.656l.03-.165.61-3.865.04-.212a.778.778 0 0 1 .768-.657h.484c3.134 0 5.587-1.273 6.305-4.955.299-1.538.144-2.823-.649-3.726a3.094 3.094 0 0 0-.885-.683Z"/>
                    <path fill="#222D65" d="M21.94 10.74a6.487 6.487 0 0 0-.797-.178c-.492-.08-1.03-.117-1.608-.117h-4.872a.777.777 0 0 0-.768.658l-1.037 6.565-.03.191a.886.886 0 0 1 .876-.75h1.823c3.583 0 6.388-1.455 7.207-5.663.025-.125.045-.246.064-.365a4.372 4.372 0 0 0-.858-.342Z"/>
                    <path fill="#253B80" d="M13.895 11.103a.775.775 0 0 1 .768-.657h4.873c.577 0 1.116.037 1.608.117a6.484 6.484 0 0 1 .982.234c.241.08.466.175.673.284.244-1.555-.002-2.614-.843-3.573C21.03 6.452 19.356 6 17.214 6h-6.216a.889.889 0 0 0-.879.75L7.53 23.165c-.051.325.2.618.527.618h3.838l.964-6.114 1.036-6.565Z"/>
                    </svg>
                   </span>
                  <div class="transaction-text">
                  PayPal
                  <div class="transaction-sub">Paiement en ligne</div>
                  </div>
                  </div>
                </td>
                <td>Paiement en ligne</td>
                <td>Paiement</td>
                <td>Jun 03, 2026</td>
                <td class="positive">+9,000 XOF</td>
                <td><span class="status success"><span class="status-dot success"></span>Complet</span></td>
            </tr>
            <tr>
                <td><input type="checkbox" class="table-checkbox"></td>
                <td>
                   <div class="transaction-cell">
                   <x-icons.book/>
                   KMF_97860474
                   </div>
                </td>

                <td>
                  <div class="transaction-cell">
                  <span class="transaction-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                    <rect width="31" height="31" x="0.5" y="0.5" fill="#fff" rx="15.5"/>
                    <rect width="31" height="31" x="0.5" y="0.5" stroke="#EAEDF2" rx="15.5"/>
                    <path fill="#006CB4" d="M15.952 6.001c1.56 0 3.045.363 4.377 1.012.21.095.42.21.628.325l-.913.822-1.37-1.433-2.359 2.101-1.39-1.509-4.339 3.917 2.779 3.075-1.085.954 2.74 3.075-1.084.956 3.921 4.374 2.32-2.14 2.019 2.293c-.4.306-.838.612-1.313.879A9.907 9.907 0 0 1 15.972 26C10.472 26 6 21.512 6 15.992 5.981 10.509 10.454 6 15.953 6v.001Zm-1.827 9.379 2.38-2.14 2.13 2.388-2.379 2.14-2.131-2.388Zm1.694 4.126 2.36-2.159 2.15 2.389-2.38 2.14-2.13-2.37Zm-3.386-8.195 2.377-2.139 2.133 2.387-2.38 2.14-2.13-2.388Zm4.357-1.145 1.77-1.605 1.598 1.776-1.77 1.624-1.599-1.795h.001Zm3.159 7.353 1.769-1.604 1.599 1.795-1.77 1.606-1.598-1.797Zm1.56 3.611 1.77-1.605 1.598 1.777-1.77 1.623-1.598-1.795Zm.723-8.253 1.18-1.069 1.066 1.184-1.18 1.07-1.066-1.185ZM20.71 9.343l1.18-1.088 1.066 1.204-1.18 1.07-1.066-1.186Zm3.026 7.07 1.18-1.07L26 16.526l-1.2 1.069-1.064-1.184Zm-5.309-2.657 1.77-1.604 1.598 1.776-1.769 1.605-1.599-1.777Z"/>
                </svg>
                </span>
                  <div class="transaction-text">
                  Master Card
                  <div class="transaction-sub">Paiement en ligne</div>
                  </div>
                  </div>
                </td>
                <td>Carte Visa</td>
                <td>Transfert</td>
                <td>Jun 04, 2026</td>
                <td class="negative">-1,900 XOF</td>
                <td><span class="status warning"><span class="status-dot warning"></span>En cours</span></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection