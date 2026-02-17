@extends('layouts.app')

@section('title', 'Solde')

@vite(['resources/css/solde.css', 'resources/js/solde.js'])

@section('content')

<div class="solde-header">
    <h2>Solde</h2>

    <select class="btn-select">
        <option>Gestion des paiements</option>
        <option>Versements</option>
        <option>Retraits</option>
    </select>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-top">
            <span class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M17.452 14.03a13.136 13.136 0 0 0-3.73-7.18c-.43-.42-.646-.63-1.121-.823-.476-.194-.885-.194-1.703-.194H9.102c-.818 0-1.227 0-1.703.194-.475.194-.69.403-1.121.822a13.137 13.137 0 0 0-3.73 7.18c-.407 2.449 1.851 4.304 4.376 4.304h6.152c2.525 0 4.783-1.855 4.376-4.303Z"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M6.048 3.702c-.172-.25-.421-.59.093-.667.53-.08 1.079.283 1.617.275.486-.007.734-.222 1-.53.28-.325.714-1.113 1.243-1.113.529 0 .962.788 1.242 1.113.266.308.514.523 1 .53.538.008 1.088-.355 1.617-.275.515.077.265.417.094.667l-.778 1.132c-.332.484-.499.726-.847.863-.348.136-.797.136-1.697.136H9.37c-.9 0-1.35 0-1.697-.136-.348-.137-.514-.38-.847-.863l-.777-1.132Z"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M11.356 10.765c-.18-.665-1.097-1.265-2.198-.816-1.1.45-1.276 1.894.39 2.047.752.07 1.243-.08 1.692.344.449.424.532 1.602-.616 1.92-1.148.318-2.285-.179-2.41-.884m1.654-4.215v.633m0 4.564v.636"
                    />
                </svg>
                Solde total
            </span>
            <span class="pulse">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 59" fill="none">
        <path 
            d="M10.8633 35.1058L14.4436 28.9799C14.9148 28.1736 16.1359 28.3959 16.2927 29.3165L18.5471 42.5524C18.6702 43.275 19.5032 43.624 20.1046 43.2049L24.9615 39.8206C25.1602 39.6822 25.3019 39.4763 25.3603 39.2412L27.1778 31.9241C27.2291 31.7173 27.3452 31.5324 27.509 31.3962L37.9989 22.6744C38.3888 22.3502 38.9596 22.3691 39.3272 22.7185L47.4617 30.451C47.569 30.553 47.6522 30.6774 47.7056 30.8154L50.8549 38.9662C51.0038 39.3517 51.3744 39.6058 51.7877 39.6058H54.9531C55.3328 39.6058 55.6798 39.3908 55.8487 39.0507L59.385 31.9323C59.7002 31.2977 60.5572 31.1832 61.028 31.7128L67.6538 39.1662C68.0811 39.6469 68.8445 39.6051 69.2167 39.0806L73.3765 33.219C73.4298 33.1439 73.4932 33.0766 73.5649 33.0188L78.2537 29.2434C78.3663 29.1528 78.4579 29.0388 78.5222 28.9094L82.6198 20.6609C82.7887 20.3209 83.1357 20.1058 83.5154 20.1058H85.4738C85.9851 20.1058 86.414 19.7201 86.4681 19.2117L87.8633 6.10583" 
            stroke="#37B793" 
            stroke-width="2"
        />
    </svg>
    </span>
        </div>
        <h3>64,453 XOF</h3>
        <p class="positive">+10 depuis semaine der.</p>
    </div>

    <div class="stat-card">
        <div class="stat-top">
            <span class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-width="1.5"
                        d="M10.003 7.506c-.92 0-1.667.56-1.667 1.25s.746 1.25 1.667 1.25c.92 0 1.666.56 1.666 1.25s-.746 1.25-1.666 1.25m0-5c.725 0 1.343.348 1.571.833m-1.571-.833v-.833m0 5.833c-.726 0-1.343-.348-1.572-.834m1.572.834v.833"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-width="1.5"
                        d="M10.834 2.09h-.833c-3.732 0-5.598 0-6.758 1.159-1.159 1.159-1.159 3.025-1.159 6.757 0 3.732 0 5.598 1.16 6.757 1.159 1.16 3.025 1.16 6.757 1.16 3.732 0 5.598 0 6.757-1.16 1.16-1.16 1.16-3.025 1.16-6.757v-.833"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="m17.907 2.077-3.48 3.482m-.687-3.047.099 2.576c0 .608.362.986 1.023 1.034l2.603.122"
                    />
                </svg> Versement initial</span>
            <span class="pulse">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 59" fill="none">
        <path 
            d="M10.8633 35.1058L14.4436 28.9799C14.9148 28.1736 16.1359 28.3959 16.2927 29.3165L18.5471 42.5524C18.6702 43.275 19.5032 43.624 20.1046 43.2049L24.9615 39.8206C25.1602 39.6822 25.3019 39.4763 25.3603 39.2412L27.1778 31.9241C27.2291 31.7173 27.3452 31.5324 27.509 31.3962L37.9989 22.6744C38.3888 22.3502 38.9596 22.3691 39.3272 22.7185L47.4617 30.451C47.569 30.553 47.6522 30.6774 47.7056 30.8154L50.8549 38.9662C51.0038 39.3517 51.3744 39.6058 51.7877 39.6058H54.9531C55.3328 39.6058 55.6798 39.3908 55.8487 39.0507L59.385 31.9323C59.7002 31.2977 60.5572 31.1832 61.028 31.7128L67.6538 39.1662C68.0811 39.6469 68.8445 39.6051 69.2167 39.0806L73.3765 33.219C73.4298 33.1439 73.4932 33.0766 73.5649 33.0188L78.2537 29.2434C78.3663 29.1528 78.4579 29.0388 78.5222 28.9094L82.6198 20.6609C82.7887 20.3209 83.1357 20.1058 83.5154 20.1058H85.4738C85.9851 20.1058 86.414 19.7201 86.4681 19.2117L87.8633 6.10583" 
            stroke="#F17B2C" 
            stroke-width="2"
        />
    </svg>
    </span>
        </div>
        <h3>1,456 XOF</h3>
        <p class="positive">+10 depuis semaine der.</p>
    </div>

    <div class="stat-card">
        <div class="stat-top">
             <span class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-width="1.5"
                        d="M14.168 15v-1.667M10 15v-2.5M5.834 15v-4.167"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M5 5.833c2.664 2.724 6.028 3.401 9.284 2.494m-1.21-1.268 1.727.848c.205.1.26.333.124.52L13.772 10"
                    />
                    <path
                        stroke="#555F75"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M2.084 10c0-3.732 0-5.598 1.16-6.757 1.159-1.16 3.025-1.16 6.757-1.16 3.732 0 5.598 0 6.757 1.16 1.16 1.16 1.16 3.025 1.16 6.757 0 3.732 0 5.598-1.16 6.757-1.16 1.16-3.025 1.16-6.757 1.16-3.732 0-5.598 0-6.758-1.16C2.084 15.598 2.084 13.732 2.084 10Z"
                    />
                </svg>Nouveaux avis</span>
            <span class="pulse">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 59" fill="none">
        <path 
            d="M10.8633 35.1058L14.4436 28.9799C14.9148 28.1736 16.1359 28.3959 16.2927 29.3165L18.5471 42.5524C18.6702 43.275 19.5032 43.624 20.1046 43.2049L24.9615 39.8206C25.1602 39.6822 25.3019 39.4763 25.3603 39.2412L27.1778 31.9241C27.2291 31.7173 27.3452 31.5324 27.509 31.3962L37.9989 22.6744C38.3888 22.3502 38.9596 22.3691 39.3272 22.7185L47.4617 30.451C47.569 30.553 47.6522 30.6774 47.7056 30.8154L50.8549 38.9662C51.0038 39.3517 51.3744 39.6058 51.7877 39.6058H54.9531C55.3328 39.6058 55.6798 39.3908 55.8487 39.0507L59.385 31.9323C59.7002 31.2977 60.5572 31.1832 61.028 31.7128L67.6538 39.1662C68.0811 39.6469 68.8445 39.6051 69.2167 39.0806L73.3765 33.219C73.4298 33.1439 73.4932 33.0766 73.5649 33.0188L78.2537 29.2434C78.3663 29.1528 78.4579 29.0388 78.5222 28.9094L82.6198 20.6609C82.7887 20.3209 83.1357 20.1058 83.5154 20.1058H85.4738C85.9851 20.1058 86.414 19.7201 86.4681 19.2117L87.8633 6.10583" 
            stroke="#37B793" 
            stroke-width="2"
        />
    </svg>
    </span>
        </div>
        <h3>2.34</h3>
        <p class="positive">+10 depuis semaine der.</p>
    </div>

    <div class="stat-card">
        <div class="stat-top">
            <span class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20"> 
                <path stroke="#555F75" stroke-linecap="round" stroke-width="1.5" d="M10 7.5c-.92 0-1.666.56-1.666 1.25S9.08 10 10.001 10c.92 0 1.666.56 1.666 1.25s-.746 1.25-1.666 1.25m0-5c.725 0 1.343.348 1.572.833M10 7.5v-.833m0 5.833c-.726 0-1.343-.348-1.572-.833M10 12.5v.833" /> 
                <path stroke="#555F75" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 1.667c-2.507 0-4.133 1.682-6.055 2.295-.781.25-1.172.374-1.33.55-.158.176-.204.433-.297.946-.991 5.497 1.175 10.579 6.341 12.556.555.213.833.32 1.343.32s.787-.107 1.342-.32c5.166-1.977 7.33-7.06 6.34-12.556-.094-.513-.14-.77-.298-.946-.158-.176-.549-.3-1.33-.55-1.923-.613-3.55-2.295-6.057-2.295Z" /> 
            </svg> Paiement complet </span>
            <span class="pulse">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 59" fill="none">
        <path 
            d="M10.8633 35.1058L14.4436 28.9799C14.9148 28.1736 16.1359 28.3959 16.2927 29.3165L18.5471 42.5524C18.6702 43.275 19.5032 43.624 20.1046 43.2049L24.9615 39.8206C25.1602 39.6822 25.3019 39.4763 25.3603 39.2412L27.1778 31.9241C27.2291 31.7173 27.3452 31.5324 27.509 31.3962L37.9989 22.6744C38.3888 22.3502 38.9596 22.3691 39.3272 22.7185L47.4617 30.451C47.569 30.553 47.6522 30.6774 47.7056 30.8154L50.8549 38.9662C51.0038 39.3517 51.3744 39.6058 51.7877 39.6058H54.9531C55.3328 39.6058 55.6798 39.3908 55.8487 39.0507L59.385 31.9323C59.7002 31.2977 60.5572 31.1832 61.028 31.7128L67.6538 39.1662C68.0811 39.6469 68.8445 39.6051 69.2167 39.0806L73.3765 33.219C73.4298 33.1439 73.4932 33.0766 73.5649 33.0188L78.2537 29.2434C78.3663 29.1528 78.4579 29.0388 78.5222 28.9094L82.6198 20.6609C82.7887 20.3209 83.1357 20.1058 83.5154 20.1058H85.4738C85.9851 20.1058 86.414 19.7201 86.4681 19.2117L87.8633 6.10583" 
            stroke="#DE2C41" 
            stroke-width="2"
        />
    </svg>
    </span>
        </div>
        <h3>53,546 XOF</h3>
        <p class="positive">+10 depuis semaine der.</p>
    </div>
</div>


<div class="main-grid">

    <div class="card large">
        <div class="card-header">
            <h3>Solde prévisionnel</h3>

            <div class="legend">
                <span><span class="dot blue"></span> Revenus totaux</span>
                <span><span class="dot green"></span> Dépenses totales</span>

                <select>
                    <option>Janvier</option>
                </select>
            </div>
        </div>

        <canvas id="soldeChart"></canvas>
    </div>

    <div class="card">
        <h3>Versement épargne</h3>

        <div class="epargne-card">
            <div class="epargne-header">
            <p>Fonds communs</p>
            <strong>1,463 XOF</strong>
            </div>
            <small>Revenus mensuelles</small>
            <div class="bar blue"></div>
        </div>

        <div class="epargne-card">
            <div class="epargne-header">
            <p>Investissements</p>
            <strong>2,635 XOF</strong>
            </div>
            <small>Investissements mensuels</small>
            <div class="bar orange"></div>
        </div>

        <div class="epargne-card">
            <div class="epargne-header">
            <p>Dépenses</p>
            <strong>3,768 XOF</strong>
            </div>
            <small>Dépenses mensuelles</small>
            <div class="bar green"></div>
        </div>
    </div>
</div>

<div class="table-header">
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
            <option>Depuis 90 jours</option>
            <option>Cette année</option>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection