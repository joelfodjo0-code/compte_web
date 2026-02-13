@extends('layouts.app')

@section('title', 'Client')

@vite(['resources/css/transactions.css',
'resources/css/facture.css',
'resources/js/facture.js', 
'resources/css/catalogue.css',
'resources/css/facture-overlay.css',
'resources/js/facture-overlay.js',
'resources/css/catalogue-overlay.css',])

@section('content')

<div class="transactions-container">

    <div class="transactions-header">
        <div>
            <h2>Facture</h2>
            <span class="subtitle">
                Cette historique de facture concerne uniquement les 30 derniers jours
            </span>
        </div>

        <button id="openFactureOverlay" class="btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
                <path
                    stroke="#fff"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M5 10h10M10 5v10"
                />
            </svg>
            Créer une facture
        </button>
    </div>

    <div class="facture-stats">

        <div class="stat-card">
            <div class="stat-text">
                <p class="stat-title">Toutes les factures</p>
                <h3>11,324</h3>
                <span class="stat-percentage">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         fill="none" 
                         viewBox="0 0 16 16" 
                         class="stat-icon">
                        <circle cx="8" cy="8" r="6.667" stroke="#37B793" stroke-width="1.5"/>
                        <path stroke="#37B793" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9.849 6.151 6 10m3.849-3.849c-.337-.337-1.926-.007-2.406 0m2.406 0c.337.337.007 1.926 0 2.406"/>
                    </svg>
                    <span class="stat-positive">2.7%</span> du mois dernier
                </span>
            </div>
            <div class="stat-graph">
                <canvas id="chart-all"></canvas>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-text">
                <p class="stat-title">Brouillon de facture</p>
                <h3>1,245</h3>
                <span class="stat-percentage">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 16 16"
                         class="stat-icon">
                        <circle cx="8" cy="8" r="6.667" stroke="#DE2C41" stroke-width="1.5"/>
                        <path stroke="#DE2C41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M6.151 9.849 10 6M6.151 9.849c.337.337 1.926.007 2.406 0m-2.406 0c-.337-.337-.007-1.926 0-2.406"/>
                    </svg>
                    <span class="stat-negative">1.3%</span> du mois dernier
                </span>
            </div>
            <div class="stat-graph">
                <canvas id="chart-draft"></canvas>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-text">
                <p class="stat-title">Montant impayé</p>
                <h3>2,353</h3>
                <span class="stat-percentage">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         fill="none" 
                         viewBox="0 0 16 16" 
                         class="stat-icon">
                        <circle cx="8" cy="8" r="6.667" stroke="#37B793" stroke-width="1.5"/>
                        <path stroke="#37B793" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9.849 6.151 6 10m3.849-3.849c-.337-.337-1.926-.007-2.406 0m2.406 0c.337.337.007 1.926 0 2.406"/>
                    </svg>
                    <span class="stat-positive">3.7%</span> du mois dernier
                </span>
            </div>
            <div class="stat-graph">
                <canvas id="chart-unpaid"></canvas>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-text">
                <p class="stat-title">Date d'échéance</p>
                <h3>546</h3>
                <span class="stat-percentage">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 16 16"
                         class="stat-icon">
                        <circle cx="8" cy="8" r="6.667" stroke="#DE2C41" stroke-width="1.5"/>
                        <path stroke="#DE2C41" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M6.151 9.849 10 6M6.151 9.849c.337.337 1.926.007 2.406 0m-2.406 0c-.337-.337-.007-1.926 0-2.406"/>
                    </svg>
                    <span class="stat-negative">1.2%</span> du mois dernier
                </span>
            </div>
            <div class="stat-graph">
                <canvas id="chart-due"></canvas>
            </div>
        </div>

    </div>

    
    <div class="catalogue-actions">
        <div class="left">
            <button class="btn-filter active">Toutes les factures</button>
        </div>

        <div class="right">

    <select class="btn-outline select-btn">
        <option selected disabled>Statut</option>
        <option>Actif</option>
        <option>En cours</option>
        <option>Expiré</option>
    </select>

    <select class="btn-outline select-btn">
        <option selected disabled>Date création</option>
        <option>Cette semaine</option>
        <option>Ce mois</option>
    </select>

    <select class="btn-outline select-btn">
        <option selected disabled>Montant</option>
        <option>0 - 1000</option>
        <option>1000 - 5000</option>
        <option>5000+</option>
    </select>

    <select class="btn-outline select-btn">
        <option selected disabled>Plus de filtre</option>
        <option>Client</option>
        <option>Méthode</option>
    </select>

    <button class="btn-outline icon-text">
    Exporter 
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
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
        Analyse 
        <Svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="20" height="20" viewBox="0 0 20 20">
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeWidth={1.5}
      d="M17.5 17.5H8.333c-2.75 0-4.124 0-4.979-.854-.854-.855-.854-2.23-.854-4.98V2.5M5.835 3.333h.833M5.835 5.833h3.333"
    />
    <Path
      stroke="#555F75"
      strokeLinecap="round"
      strokeLinejoin="round"
      strokeWidth={1.5}
      d="M4.168 16.667c.892-1.623 2.102-5.818 4.422-5.818 1.603 0 2.018 2.044 3.59 2.044 2.702 0 2.31-4.56 5.321-4.56"
    />
  </Svg>
       </button>
        <button id="openEditColumns" class="btn-outline icon-text">
    Éditer colonnes
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
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
                    <th>Email client</th>
                    <th>Méthode de paiement</th>
                    <th>Date de création</th>
                    <th>Date de paiement</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

        <tr>
            <td><input type="checkbox"></td>
            <td class="user-cell">
                <div class="avatar"> <img src="{{ asset('images/client1.jpg') }}" alt="Avatar Amadou Diallo"> 
                </div>
                <div class="user-info"> 
                    <strong>Amadou Diallo</strong>
                </div>
            </td>
            <td>amadou@gmail.com</td>
            <td>Mobile Money</td>
            <td>Juin 02, 2026</td>
            <td>Juin 02, 2026</td>
            <td><span class="status success">Succès</span></td>
            <td class="actions">
            <button class="btn-action delete"><x-icons.icon-delete /></button>
            <button class="btn-action edit"><x-icons.edit /></button>
        </td>
        </tr>

        <tr>
            <td><input type="checkbox"></td>
            <td class="user-cell">
                <div class="avatar"> <img src="{{ asset('images/client2.jpg') }}" alt="Avatar Fatou Traoré"> 
                </div>
                <div class="user-info"> 
                    <strong>Fatou Traoré</strong>
                </div>
            </td>
            <td>fatou@gmail.com</td>
            <td>Carte bancaire</td>
            <td>Juin 10, 2026</td>
            <td>Juin 10, 2026</td>
            <td><span class="status pending">En cours</span></td>
            <td class="actions">
            <button class="btn-action delete"><x-icons.icon-delete /></button>
            <button class="btn-action edit"><x-icons.edit /></button>
        </td>
        </tr>

        <tr>
            <td><input type="checkbox"></td>
            <td class="user-cell">
                <div class="avatar"> <img src="{{ asset('images/client3.jpg') }}" alt="Avatar Moussa Keita"> 
                </div>
                <div class="user-info"> 
                    <strong>Moussa Keita</strong> 
                </div>
            </td>
            <td>moussa@gmail.com</td>
            <td>Virement</td>
            <td>Juin 20, 2026</td>
            <td>Juin 20, 2026</td>
            <td><span class="status failed">Échec</span></td>
            <td class="actions">
            <button class="btn-action delete"><x-icons.icon-delete /></button>
            <button class="btn-action edit"><x-icons.edit /></button>
        </td>
        </tr>

        <tr>
            <td><input type="checkbox"></td>
            <td class="user-cell">
                <div class="avatar"> <img src="{{ asset('images/client1.jpg') }}" alt="Avatar David Malan"> 
                </div>
                <div class="user-info"> 
                    <strong>David Malan</strong>  
                </div>
            </td>
            <td>David@gmail.com</td>
            <td>Virement</td>
            <td>Septembre 14, 2026</td>
            <td>Septembre 14, 2026</td>
            <td><span class="status success">Succès</span></td>
            <td class="actions">
            <button class="btn-action delete"><x-icons.icon-delete /></button>
            <button class="btn-action edit"><x-icons.edit /></button>
        </td>
        </tr>

        </tbody>

                </table>
            </div>
        <div class="transactions-footer">
                <span>Montrer 1-10 de 260 entrées</span>
                <div class="pagination">
                <button class="btn-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16" viewBox="0 0 20 20">
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11 2 5 8l6 6"
                />
            </svg>
            <span>Précédent</span>
        </button>

                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button class="active">4</button>
                    <button>...</button>
                    <button>16</button>
                    <button class="btn-next">
            <span>Suivant</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16" viewBox="0 0 20 20">
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m5 14 6-6-6-6"
                />
            </svg>
        </button>
                </div>
            </div>

        </div>
        </div>


<!-- Overlay Créer une facture -->
<div class="facture-overlay" id="factureOverlay">
    <div class="overlay-backdrop"></div>
    <div class="overlay-panel">
        <div class="overlay-header">
            <h2>Créer une facture</h2>
            <button class="overlay-close" id="closeOverlay">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 5 5 15M5 5l10 10"/>
                </svg>
            </button>
        </div>

        <div class="overlay-content">
            <div class="overlay-section">
                <h3>Information client</h3>
                
            <div class="form-group">
                <label>Client</label>
                <input type="text" 
                    id="openClientOverlay" 
                    placeholder="Rechercher ou ajouter un client" 
                    class="form-input"
                    readonly
                    style="cursor: pointer;">
            </div>

                <div class="form-group">
                    <label>Devise</label>
                    <select class="form-select">
                        <option selected disabled>Choisir une devise</option>
                        <option>XOF - Franc CFA</option>
                        <option>EUR - Euro</option>
                        <option>USD - Dollar</option>
                    </select>
                </div>
            </div>

            <div class="overlay-section">
                <h3>Article</h3>
                <p class="section-note">
                     Ajouter un article ponctuel depuis votre 
                     <a href="/catalogue" class="link-text">catalogue</a> 
                     pour cette facture.
                </p>
                <div class="form-group">
                    <input type="text" placeholder="Chercher ou ajouter un article" class="form-input">
                </div>
            </div>

            <div class="overlay-section">
                <h3>Collecte des paiements</h3>
                
                <div class="radio-group">
                    <label class="radio-option selected">
                        <input type="radio" name="paiement" checked>
                        <div class="radio-content">
                            <span class="radio-title">Demander un paiement</span>
                            <span class="radio-description">Créer une facture de deman...</span>
                        </div>
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="paiement">
                        <div class="radio-content">
                            <span class="radio-title">Changer auto le client</span>
                            <span class="radio-description">Débiter automatiquement le...</span>
                        </div>
                    </label>
                </div>
            </div>

            <div class="overlay-section">
                <h3>Options supplémentaires</h3>
                
                <div class="checkbox-group">
                    <label class="checkbox-item">
                        <input type="checkbox">
                        <span>Note</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox">
                        <span>Pied de page</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox">
                        <span>Champ personnalisé</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7" stroke="#9CA3AF" stroke-width="1.5"/>
                            <path d="M8 11.5V8M8 5.5h.005" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </label>
                </div>

                <div class="form-group">
                    <label>Taille de la page PDF</label>
                    <select class="form-select">
                        <option selected disabled>Choisir la taille</option>
                        <option>A4</option>
                    </select>
                </div>
            </div>

            <div class="overlay-section">
                <h3>Branding</h3>
                
                <div class="form-group">
                    <label>Template</label>
                    <select class="form-select">
                        <option selected disabled>Choisir un template</option>
                        <option>Template 1</option>
                        <option>Template 2</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="overlay-footer">
            <button class="btn-secondary" id="showPreviewBtn">Montrer un aperçu</button>
            <button class="btn-primar">Créer une facture</button>
        </div>
    </div>
</div>



<!-- Second Overlay - Aperçu de facture -->
<div class="second-overlay" id="secondOverlay">
    <div class="second-overlay-header">
        <h2>Aperçu de facture</h2>
        <button class="overlay-close" id="closeSecondOverlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 5 5 15M5 5l10 10"/>
            </svg>
        </button>
    </div>

    <div class="header-divider"></div>
    <div class="tabs-wrapper">
        <div class="tabs-container">
            <div class="second-overlay-tabs">
                <button class="tab-btn active" data-tab="pdf">Facture PDF</button>
                <button class="tab-btn" data-tab="email">Email</button>
                <button class="tab-btn" data-tab="payment">Page de paiement</button>
                <div class="tab-indicator"></div>
            </div>
        </div>
    </div>

    <div class="second-overlay-content">
        <div class="content-wrapper">
     
            <div class="preview-document">
                <div class="preview-header">
                    <div>
                        <h1 class="preview-title">Facture</h1>
                        <p class="preview-number">Numéro de facture Example-0001</p>
                    </div>
                    <div class="preview-logo">
                        <img src="{{ asset('images/Frame.jpg') }}" alt="Logo">
                    </div>
                </div>

                <div class="preview-info">
                    <div class="info-row">
                        <span class="info-label">Date de facturation</span>
                        <span class="info-value">Juin 12, 2026</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Date d'échéance</span>
                        <span class="info-value">Juin 12, 2026</span>
                    </div>
                </div>

                <div class="reference-section">
                    <div class="reference-group">
                        <p>Référence achat</p>
                        <p>KMF_00092323</p>
                    </div>
                    <div class="reference-group">
                        <p>Doit</p>
                        <p>Exemple client</p>
                    </div>
                </div>

                <div class="preview-table-header">
                    <span>Description</span>
                    <span>Qté</span>
                    <span>Prix unitaire</span>
                    <span>Montant</span>
                </div>

                <div class="preview-totals">
                    <div class="total-row sous-total">
                        <span class="label">Sous-total</span>
                        <span class="value">2 000 XOF</span>
                    </div>
                    <div class="total-row grand-total">
                        <span class="label">Total</span>
                        <span class="value">2 000 XOF</span>
                    </div>
                    <div class="total-row net-total">
                        <span class="label">Net à payer</span>
                        <span class="value">2 000 XOF</span>
                    </div>
                </div>

            
                <div class="preview-footer-text">
                    EXEMPLE-0001 - 2000 XOF du 12 Juin 2026
                </div>
            </div>
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


<!-- Third Overlay - Ajouter un client -->
<div class="client-overlay" id="clientOverlay">
    <div class="client-overlay-backdrop"></div>
    <div class="client-overlay-panel">
        <div class="client-overlay-header">
            <h2>Ajouter un client</h2>
            <button class="overlay-close" id="closeClientOverlay">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 5 5 15M5 5l10 10"/>
                </svg>
            </button>
        </div>

        <div class="client-overlay-content">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" placeholder="" class="form-input">
            </div>

            <div class="form-group">
                <label>Adresse e-mail</label>
                <input type="email" placeholder="Entrez l'adresse e-mail du client" class="form-input">
            </div>

            <div class="form-group">
                <label>Langage</label>
                <select class="form-select">
                    <option selected>Français (France)</option>
                    <option>English (USA)</option>
                    <option>Moore (Burkina Faso)</option>
                </select>
            </div>

            <div class="form-group">
                <a href="#" class="link-text-green">Ajouter détails supplémentaires</a>
            </div>
        </div>

        <div class="client-overlay-footer">
            <button class="btn-cancel" id="cancelClientBtn">Annuler</button>
            <button class="btn-save">Sauvegarder le client</button>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection




