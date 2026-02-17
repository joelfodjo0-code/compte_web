@extends('layouts.app')

@section('title', 'Transactions')

@vite(['resources/css/transactions.css', 'resources/css/transactions-details.css',])



@section('content')

<div class="transactions-container">

   
    <div class="transactions-header">
        <div>
            <h2>Transaction</h2>
            <span class="subtitle">Voir vos activités - Juin 02, 2026</span>
        </div>

        <div class="header-actions">
            <button class="btn-outline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
            <path
            stroke="#888E9E"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M7.381 10.422C5.308 8.872 3.83 7.166 3.023 6.207c-.25-.297-.332-.514-.381-.896-.169-1.31-.253-1.965.131-2.388C3.157 2.5 3.837 2.5 5.195 2.5h9.61c1.358 0 2.038 0 2.422.423.384.423.3 1.078.131 2.388-.05.382-.131.6-.38.896-.809.96-2.29 2.669-4.368 4.221a.875.875 0 0 0-.334.623c-.206 2.276-.396 3.522-.514 4.152-.191 1.018-1.634 1.63-2.407 2.177-.46.326-1.018-.062-1.078-.565-.113-.96-.327-2.91-.56-5.764a.874.874 0 0 0-.336-.63Z"
            />
            </svg>Filtrer</button>

            <button class="btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
        <path
            stroke="currentColor" 
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M10 12.083V3.75m0 8.333c-.584 0-1.674-1.662-2.084-2.083m2.083 2.083c.584 0 1.674-1.662 2.084-2.083M16.667 13.75c0 2.068-.431 2.5-2.5 2.5H5.834c-2.068 0-2.5-.432-2.5-2.5"
        />
    </svg>
    Exporter
</button>

        </div>
    </div>

   
    <div class="transactions-table">
        <table>
            <thead>
                <tr>
                    <td><input type="checkbox"></td>
                    <th>Nom du compte</th>
                    <th>Facture</th>
                    <th>Type de paiement</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<tr>
    <td><input type="checkbox"></td>
    <td class="user-cell">
        <div class="avatar"> <img src="{{ asset('images/photo.jpg') }}" alt="Avatar Amadou Diallo"> 
        </div>
        <div class="user-info"> 
            <strong>Amadou Diallo</strong>
            <small>amadou@gmail.com</small>
        </div>
    </td>
    <td>KMF_97686976</td>
    <td>Mobile Money</td>
    <td>Juin 02, 2026</td>
    <td class="amount success">35,765 XOF</td>
    <td><span class="status success">Succès</span></td>
    <td class="actions">
    <button class="btn-action delete"><x-icons.icon-delete /></button>
    <button class="btn-action edit"><x-icons.edit /></button>
</td>
</tr>

<tr>
    <td><input type="checkbox"></td>
    <td class="user-cell">
        <div class="avatar"> <img src="{{ asset('images/photo.jpg') }}" alt="Avatar Fatou Traoré"> 
        </div>
        <div class="user-info"> 
            <strong>Fatou Traoré</strong>
            <small>fatou@gmail.com</small>
        </div>
    </td>
    <td>KMF_97686976</td>
    <td>Carte bancaire</td>
    <td>Juin 10, 2026</td>
    <td class="amount pending">12,500 XOF</td>
    <td><span class="status pending">En cours</span></td>
    <td class="actions">
    <button class="btn-action delete"><x-icons.icon-delete /></button>
    <button class="btn-action edit"><x-icons.edit /></button>
</td>
</tr>

<tr>
    <td><input type="checkbox"></td>
    <td class="user-cell">
        <div class="avatar"> <img src="{{ asset('images/photo.jpg') }}" alt="Avatar Moussa Keita"> 
        </div>
        <div class="user-info"> 
            <strong>Moussa Keita</strong> 
            <small>moussa@gmail.com</small> 
        </div>
    </td>
    <td>KMF_97686976</td>
    <td>Virement</td>
    <td>Juin 20, 2026</td>
    <td class="amount failed">8,900 XOF</td>
    <td><span class="status failed">Échec</span></td>
    <td class="actions">
    <button class="btn-action delete"><x-icons.icon-delete /></button>
    <button class="btn-action edit"><x-icons.edit /></button>
</td>
</tr>

<tr>
    <td><input type="checkbox"></td>
    <td class="user-cell">
        <div class="avatar"> <img src="{{ asset('images/photo.jpg') }}" alt="Avatar David Malan"> 
        </div>
        <div class="user-info"> 
            <strong>David Malan</strong> 
            <small>David@gmail.com</small> 
        </div>
    </td>
    <td>KMF_97652976</td>
    <td>Virement</td>
    <td>Septembre 14, 2026</td>
    <td class="amount success">8,900 XOF</td>
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


<div class="transaction-overlay" id="transactionOverlay">
    <div class="transaction-panel">
    <div class="transaction-header">
        <h3>Détails de transaction</h3>
        <button class="close-details" id="closeDetails">&times;</button>
    </div>
<div class="transaction-details">
    <div class="details-section">
    <h4>Expéditeur</h4>
    <div class="detail-row"><span>Payeur</span><strong id="detailSender">Jhon Smith</strong></div>
    <div class="detail-row"><span>Code Payeur</span><strong>1243 4569 8541 7415</strong></div>
    <div class="detail-row"><span>IBAN</span><strong>USD74865758685894756854</strong></div>
    <div class="detail-row"><span>Prestataire</span><strong>Orange Money</strong></div>
</div>

<div class="details-section">
    <h4>Bénéficiaire</h4>
    <div class="detail-row"><span>Bénéficiaire</span><strong>Koum’a FIN</strong></div>
    <div class="detail-row"><span>Code Bénéficiaire</span><strong>1243 4569 8541 7415</strong></div>
    <div class="detail-row"><span>IBAN</span><strong>USD74865758685894756854</strong></div>
    <div class="detail-row"><span>Prestataire</span><strong>Orange Money</strong></div>
</div>

<div class="details-section">
    <h4>Transaction</h4>
    <div class="detail-row"><span>Montant</span><strong>+200,00</strong></div>
    <div class="detail-row"><span>Commission</span><strong>$0.00</strong></div>
    <div class="detail-row"><span>Solde</span><strong>$65,658.00</strong></div>
    <div class="detail-row">
        <span>Statut</span>
         <span class="status-badge">
        <span class="status-dot"></span>
        Succès
    </span>
    </div>

    <div class="detail-row" style="flex-direction: column; margin-top: 10px;">
        <span>Motif du paiement</span>
        <strong>Koum’a FIN - Achat pack Stater</strong>
    </div>
</div>

<div class="details-footer">
    <button type="button" id="saveTransaction">
        Enregistrer
    </button>
</div>
</div>

@endsection
