@extends('layouts.app')

@section('title', 'Catalogue')

@vite([
    'resources/css/transactions.css',
    'resources/css/catalogue.css',
    'resources/css/catalogue-overlay.css',
    'resources/js/catalogue.js'
])

@section('content')

<div class="transactions-container">

    <div class="transactions-header">
        <div>
            <h2>Catalogue</h2>
        </div>

        <div class="header-actions">
        <button  id="openAddProduct" class="btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" height="18" viewBox="0 0 20 20">
        <path
            stroke="#fff"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M5 10h10M10 5v10"
        />
    </svg>
    Ajouter produit
    </button>
        </div>
    </div>

    <div class="catalogue-stats">

    <div class="stat-card">
        <div class="stat-header">
             <span class="icon-text">
            <x-icons.bank /> Revenu mensuel moyen</span>
            <span class="dots">⋯</span>
        </div>

        <h3>2 987 639 XOF</h3>
        <p class="stat-positive">
        <span class="percent">+16,4%</span> <small>Depuis le mois passé</small>
        </p>
        <div class="sparkline">
            <canvas id="chartRevenue"></canvas>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
    <span class="icon-text">
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
            <path
                stroke="#555F75"
                stroke-width="1.5"
                d="M10.833 5.833a3.333 3.333 0 1 1-6.667 0 3.333 3.333 0 0 1 6.667 0Z"
            />
            <path
                stroke="#555F75"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M12.5 9.167a3.333 3.333 0 0 0 0-6.667"
            />
            <path
                stroke="#555F75"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M9.166 11.667H5.833a4.167 4.167 0 0 0-4.167 4.166c0 .92.746 1.667 1.667 1.667h8.333c.92 0 1.667-.746 1.667-1.667a4.167 4.167 0 0 0-4.167-4.166Z"
            />
            <path
                stroke="#555F75"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M14.166 11.667a4.167 4.167 0 0 1 4.167 4.166c0 .92-.746 1.667-1.667 1.667h-1.25"
            />
                </svg>
                Clients actifs
                </span>
                <span class="dots">⋯</span>
                 </div>


        <h3>4 780</h3>
        <p class="stat-positive">
         <span class="percent">+04,16%</span> <small>Depuis le mois passé</small>
        </p>
        <div class="sparkline">
            <canvas id="chartClients"></canvas>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
    <span class="icon-text">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
            <path
                stroke="#555F75"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M3.75 8.554V5h12.5v3.554c0 2.646 0 3.969-.814 4.79-.813.823-2.123.823-4.742.823H9.306c-2.62 0-3.929 0-4.742-.822-.814-.822-.814-2.145-.814-4.79Z"
            />
            <path
                stroke="#555F75"
                stroke-linecap="round"
                stroke-width="1.5"
                d="m3.75 5 .601-1.282c.466-.994.7-1.492 1.171-1.771.473-.28 1.079-.28 2.29-.28h4.375c1.212 0 1.818 0 2.29.28.473.28.706.777 1.172 1.77L16.25 5M8.75 7.5h2.5"
            />
            <path
                stroke="#555F75"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M10 16.25v2.083m0-2.083H5.835m4.167 0h4.166m-8.333 0H3.751c-1.15 0-2.084.933-2.084 2.083m4.167-2.083v2.083m8.333-2.083h2.084c1.15 0 2.083.933 2.083 2.083m-4.167-2.083v2.083"
                    />
                </svg>
                Produits archivés
                    </span>
                    <span class="dots">⋯</span>
                </div>


        <h3>2 926</h3>
        <p class="stat-negative">
          <span class="percent">+12,14%</span> <small>Depuis le mois passé</small>
        </p>
        <div class="sparkline">
            <canvas id="chartProducts"></canvas>
        </div>
    </div>

</div>

    <div class="catalogue-actions">
        <div class="left">
            <button class="btn-filter active">Tous produits</button>
            <button class="btn-filter">Prix</button>
        </div>

        <div class="right">
    <button id="openCreateDate" class="btn-outline select-btn">
    Créer le
    </button>


    <select class="btn-outline select-btn">
        <option selected disabled>Statut</option>
        <option>Actif</option>
        <option>En cours</option>
        <option>Expiré</option>
    </select>

    <button id="openExportPrice" class="btn-outline icon-text">
    Exporter prix
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" height="18" viewBox="0 0 20 20">
        <path
            fill="#555F75"
            fill-rule="evenodd"
            d="M9.408 12.322c.007.01.016.017.024.025.068.07.147.123.23.163h.002l.044.019a.8.8 0 0 0 .264.054h.003l.02.001H10.036a.803.803 0 0 0 .308-.078h.002a.803.803 0 0 0 .22-.157l.025-.027 2.864-3.082a.8.8 0 1 0-1.172-1.089l-1.484 1.596V3.4a.8.8 0 1 0-1.6 0v6.347L7.716 8.151A.799.799 0 1 0 6.544 9.24l2.864 3.082Z"
            clip-rule="evenodd"
        />
        <path
            fill="#555F75"
            fill-rule="evenodd"
            d="M16.4 11.431a.8.8 0 0 0-.8.8v1.32a1.85 1.85 0 0 1-1.847 1.848H6.25a1.85 1.85 0 0 1-1.85-1.848v-1.32a.8.8 0 1 0-1.6 0v1.32C2.8 15.452 4.349 17 6.25 17h7.503c1.9 0 3.448-1.547 3.448-3.448v-1.32a.8.8 0 0 0-.8-.8Z"
            clip-rule="evenodd"
        />
    </svg>
    </button>
    <button class="btn-outline icon-text">
        Exporter produits
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" height="18" viewBox="0 0 20 20">
        <path
            fill="#555F75"
            fill-rule="evenodd"
            d="M9.408 12.322c.007.01.016.017.024.025.068.07.147.123.23.163h.002l.044.019a.8.8 0 0 0 .264.054h.003l.02.001H10.036a.803.803 0 0 0 .308-.078h.002a.803.803 0 0 0 .22-.157l.025-.027 2.864-3.082a.8.8 0 1 0-1.172-1.089l-1.484 1.596V3.4a.8.8 0 1 0-1.6 0v6.347L7.716 8.151A.799.799 0 1 0 6.544 9.24l2.864 3.082Z"
            clip-rule="evenodd"
        />
        <path
            fill="#555F75"
            fill-rule="evenodd"
            d="M16.4 11.431a.8.8 0 0 0-.8.8v1.32a1.85 1.85 0 0 1-1.847 1.848H6.25a1.85 1.85 0 0 1-1.85-1.848v-1.32a.8.8 0 1 0-1.6 0v1.32C2.8 15.452 4.349 17 6.25 17h7.503c1.9 0 3.448-1.547 3.448-3.448v-1.32a.8.8 0 0 0-.8-.8Z"
            clip-rule="evenodd"
        />
       </svg>
       </button>
        <button id="openEditColumns" class="btn-outline icon-text">
    Éditer colonnes
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" height="18" viewBox="0 0 20 20">
        <path
            stroke="#555F75"
            stroke-width="1.35"
            d="M5.125 3.25c1.053 0 1.58 0 1.958.285.164.123.305.281.414.465.253.426.253 1.018.253 2.203v7.594c0 1.185 0 1.778-.253 2.203-.11.185-.25.343-.414.466-.378.284-.905.284-1.958.284s-1.58 0-1.958-.284A1.606 1.606 0 0 1 2.753 16c-.253-.425-.253-1.018-.253-2.203V6.203c0-1.185 0-1.777.253-2.203.11-.184.25-.342.414-.465.378-.285.905-.285 1.958-.285Z"
        />
        <path
            stroke="#555F75"
            stroke-linecap="round"
            stroke-width="1.35"
            d="M16 9.953v3.844c0 1.185 0 1.777-.253 2.203-.11.184-.25.343-.414.466-.378.284-.905.284-1.958.284s-1.58 0-1.958-.284a1.607 1.607 0 0 1-.414-.466c-.253-.425-.253-1.018-.253-2.203V6.203c0-1.185 0-1.777.253-2.203"
        />
        <path
            stroke="#555F75"
            stroke-linejoin="round"
            stroke-width="1.35"
            d="M15.717 3.674c.167-.181.251-.272.34-.325a.699.699 0 0 1 .698-.01c.09.05.177.138.35.314.173.177.26.265.309.358a.74.74 0 0 1-.01.713c-.052.091-.142.177-.32.348L14.97 7.11c-.337.324-.506.487-.716.569-.21.082-.442.076-.905.064l-.063-.002c-.141-.003-.212-.005-.253-.052-.04-.046-.035-.118-.024-.261l.006-.078c.032-.405.047-.607.126-.788.08-.182.215-.33.488-.624l2.089-2.264Z"
        />
      </svg>
      </button>

        </div>
    </div>

    <div class="transactions-table">
        <table>
            <thead>
                <tr>
                    <td><input type="checkbox"></td>
                    <th>Nom client</th>
                    <th>Nom produit</th>
                    <th>Prix</th>
                    <th>Date création</th>
                    <th>Date achat</th>
                    <th>Identifiant</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

<tr>
    <td><input type="checkbox"></td>

    <td class="user-cell">
        <div class="avatar">
            <img src="{{ asset('images/photo.jpg') }}">
        </div>
        <div class="user-info">
            <strong>Herry Kane</strong>
        </div>
    </td>

    <td>Pack PRO</td>
    <td>6 000 XOF</td>
    <td>Juin 02, 2026</td>
    <td>Juin 14, 2026</td>
    <td>#75845797</td>
    <td><span class="status pending">En cours</span></td>

    <td class="actions">
        <button class="btn-action delete"><x-icons.icon-delete /></button>
        <button class="btn-action edit"><x-icons.edit /></button>
    </td>
</tr>

<tr>
    <td><input type="checkbox"></td>

    <td class="user-cell">
        <div class="avatar">
            <img src="{{ asset('images/photo.jpg') }}">
        </div>
        <div class="user-info">
            <strong>Herry Books</strong>
        </div>
    </td>

    <td>Pack STATER</td>
    <td>2 000 XOF</td>
    <td>Juin 03, 2026</td>
    <td>Juin 15, 2026</td>
    <td>#64758749</td>
    <td><span class="status success">Actif</span></td>

    <td class="actions">
        <button class="btn-action delete"><x-icons.icon-delete /></button>
        <button class="btn-action edit"><x-icons.edit /></button>
    </td>
</tr>

<tr>
    <td><input type="checkbox"></td>

    <td class="user-cell">
        <div class="avatar">
            <img src="{{ asset('images/photo.jpg') }}">
        </div>
        <div class="user-info">
            <strong>Matt Henry</strong>
        </div>
    </td>

    <td>Pack PRO</td>
    <td>6 000 XOF</td>
    <td>Juin 04, 2026</td>
    <td>Juin 16, 2026</td>
    <td>#96785749</td>
    <td><span class="status failed">Expiré</span></td>

    <td class="actions">
        <button class="btn-action delete"><x-icons.icon-delete /></button>
        <button class="btn-action edit"><x-icons.edit /></button>
    </td>
</tr>

            </tbody>
        </table>
    </div>

</div>


<!-- OVERLAY EXPORT PRIX -->
<div id="exportPriceOverlay" class="overlay hidden">
    <div class="overlay-card">

        <div class="overlay-header">
            <h3>Exportez le prix</h3>
            <button class="overlay-close" data-close>&times;</button>
        </div>

        <div class="overlay-content">

            <div class="form-group">
                <label>Fuseau horaire</label>
                <div class="radio-group">
                    <label><input type="radio" name="timezone" checked> GMT+6 (GMT+06:00)</label>
                    <label><input type="radio" name="timezone"> GMT</label>
                </div>
            </div>

            <div class="form-group">
                <label>Période</label>

                <div class="radio-line">
                    <label><input type="radio" name="period" checked> Aujourd’hui</label>
                    <span class="muted">Jun 02</span>
                </div>

                <div class="radio-line">
                    <label><input type="radio" name="period"> Ce mois</label>
                    <span class="muted">Jun 01 - Jul 02</span>
                </div>

                <div class="radio-line">
                    <label><input type="radio" name="period"> 7 jours derniers</label>
                    <span class="muted">Mai 26 - Jun 01</span>
                </div>

                <div class="radio-line">
                    <label><input type="radio" name="period"> Mois dernier</label>
                    <span class="muted">Mai 01 - Mai 31</span>
                </div>

                <label class="radio-line">
                    <input type="radio" name="period"> Tous
                </label>

                <label class="radio-line">
                    <input type="radio" name="period"> Personnaliser
                </label>
            </div>

            <div class="form-group">
                <label>Colonne</label>
                <select class="select-full">
                    <option>Défaut (10)</option>
                </select>

                <p class="hint">
                    ID Prix, ID Produit, Nom du produit, Description du produit,
                    Taxe du produit, Fuseau horaire, Montant, Devise, Intervalle.
                </p>
            </div>
        </div>

        <div class="overlay-footer">
           <button class="btn-outline btn-footer" data-close>Annuler</button>
           <button class="btn-primary btn-footer">Exporter</button>
       </div>
    </div>
</div>

<!-- OVERLAY FILTRER -->
<div id="filterOverlay" class="overlay overlay-top hidden">
    <div class="overlay-card overlay-filter">

        <div class="overlay-header">
            <h3>Filtrer</h3>
            <button class="overlay-close" data-close>&times;</button>
        </div>

        <div class="overlay-content">

            <div class="form-group">
                <select class="select-full">
                    <option selected>Au cours des</option>
                </select>
            </div>

            <div class="filter-row">
        <button type="button" class="btn-back-filter">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
        <path
            stroke="#2F78EE"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="m15.557 11.14 3.442 3.443-3.442 3.443"
        />
        <path
            stroke="#2F78EE"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M18.801 14.582h-8.175A5.626 5.626 0 0 1 5 8.957v-2.98"
        />
        </svg>
        </button>
                <input type="number" class="input-box" min="1">
                <select class="input-box">
                     <option selected>Jour</option>
                     <option>Semaine</option>
                     <option>Mois</option>
                </select>
            </div>

            <div class="form-group">
                <label>Fuseau Horaire</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="filter_timezone" checked>
                        GMT+6
                    </label>
                    <label>
                        <input type="radio" name="filter_timezone">
                        GMT
                    </label>
                </div>
            </div>
        </div>
        <div class="overlay-footer single">
            <button class="btn-primary btn-footer full">Appliquer</button>
        </div>
    </div>
</div>

<!-- OVERLAY EDITER COLONNES -->
<div id="editColumnsOverlay" class="overlay overlay-right hidden">
    <div class="overlay-card overlay-edit-columns">

        <div class="overlay-header">
            <h3>Colonne active</h3>
            <button class="overlay-close" data-close>&times;</button>
        </div>

        <div class="overlay-content">
            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Nom client</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>

            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Nom produit</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>

            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Prix</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>

            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Date création</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>

            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Date achat</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>

            <div class="column-row">
                <input type="checkbox" class="column-check" checked>
                <span class="column-name">Identifiant</span>
                <span class="drag-handle">⋮⋮⋮</span>
            </div>
        </div>

        <div class="overlay-footer single">
            <button class="btn-primary btn-footer full">Apply</button>
        </div>

    </div>
</div>


<!-- Overlay Ajouter un produit -->
<div id="addProductOverlay" class="overlay hidden overlay-product">
    <div class="overlay-product-backdrop" data-close></div>
    <div class="overlay-product-panel">
        <div class="overlay-product-header">
            <h3>Ajouter un produit</h3>
            <button class="overlay-close" data-close>&times;</button>
        </div>
        
        <div class="overlay-product-card">
            <div class="overlay-product-body">
                <h4>Information du produit</h4>
                
                <div class="form-group">
                    <label>Nom du produit</label>
                    <input type="text" class="input-product-name" placeholder="Entrez le nom du produit">
                </div>

                <div class="form-group">
                    <label>Média</label>
                    <div class="media-upload-zone" id="mediaUploadZone">
                        <div class="media-upload-initial">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <div class="media-upload-text">
                                <span class="upload-link">Téléverser pour charger</span>, ou cliquer pour importer
                            </div>
                            <div class="media-upload-hint">200 × 200 (1:1) recommandé, inférieur à 1MB.</div>
                        </div>
                        <input type="file" class="media-input" id="mediaInput" accept="image/*">
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="textarea-product-desc" placeholder="Entrez la description du produit"></textarea>
                </div>

                <h4>Prix</h4>

                <div class="price-options-grid">
                    <div class="price-option">
                        <input type="radio" name="price_type" id="price_inscription" value="inscription" checked>
                        <label for="price_inscription">
                            <span class="radio-dot"></span>
                            <div class="option-content">
                                <span class="option-title">Inscription</span>
                                <span class="option-desc">Frais unique</span>
                            </div>
                        </label>
                    </div>

                    <div class="price-option">
                        <input type="radio" name="price_type" id="price_achat_unique" value="achat_unique">
                        <label for="price_achat_unique">
                            <span class="radio-dot"></span>
                            <div class="option-content">
                                <span class="option-title">Achat unique</span>
                                <span class="option-desc">Frais d'abonnement</span>
                            </div>
                        </label>
                    </div>

                    <div class="price-option">
                        <input type="radio" name="price_type" id="price_acquisition" value="acquisition">
                        <label for="price_acquisition">
                            <span class="radio-dot"></span>
                            <div class="option-content">
                                <span class="option-title">Contenu d'acquisition</span>
                                <span class="option-desc">Accès moyennant des frais</span>
                            </div>
                        </label>
                    </div>

                    <div class="price-option">
                        <input type="radio" name="price_type" id="price_paie_veut" value="paie_veut">
                        <label for="price_paie_veut">
                            <span class="radio-dot"></span>
                            <div class="option-content">
                                <span class="option-title">Paie quand tu veux</span>
                                <span class="option-desc">Le client fixe le prix</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="form-group" >
                    <label>Modèle de prix</label>
                    <select class="input-price-unit">
                        <option>Prix standard</option>
                        <option>Prix variable</option>
                        <option>Prix personnalisé</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Prix par unité</label>
                    <input type="text" class="input-price-unit" placeholder="2000 XOF">
                </div>

                <div class="form-group form-group-last">
                    <label>Quantité</label>
                    <div class="quantity-row">
                        <input type="number" class="input-quantity-number" min="1" value="1">
                        <select class="select-quantity-period">
                            <option>Année</option>
                            <option>Mois</option>
                            <option>Semaine</option>
                            <option>Jour</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="overlay-product-actions">
                <button class="btn-cancel" data-close>Annuler</button>
                <button class="btn-submit">Ajouter un produit</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
