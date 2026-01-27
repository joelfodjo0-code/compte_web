@extends('layouts.app')

@section('title', 'Client')

@vite(['resources/css/transactions.css', 'resources/css/client-overlay.css'])



@section('content')

<div class="transactions-container">

   
    <div class="transactions-header">
        <div>
            <h2>Clients</h2>
            <span class="subtitle">Voir vos activités - Juin 02, 2026</span>
        </div>

        <div class="header-actions">
            <button class="btn-outline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
        <path
            stroke="currentColor" 
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M10 12.083V3.75m0 8.333c-.584 0-1.674-1.662-2.084-2.083m2.083 2.083c.584 0 1.674-1.662 2.084-2.083M16.667 13.75c0 2.068-.431 2.5-2.5 2.5H5.834c-2.068 0-2.5-.432-2.5-2.5"
        /> </svg>Exporter</button>

            <button class="btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
    <path
        stroke="#fff"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="1.5"
        d="M5 10h10M10 5v10"
    />
    </svg> Ajouter clients</button>

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


<div id="clientOverlay" class="client-overlay">
    <div class="overlay-backdrop"></div>

    <div class="overlay-panel">
            <div class="overlay-header">
                <h3>Ajouter client</h3>
                <button class="overlay-close" id="closeOverlay">&times;</button>
            </div>

        <div class="overlay-card">

            <form>
                <h4>Information du compte</h4>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" placeholder="Louis OUEDRAOGO">
                    </div>
                    <div class="form-group">
                        <label>Adresse mail</label>
                        <input type="email" placeholder="Louisouedraogo@gmail.com">
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea placeholder="Entrez une description"></textarea>
                </div>

                <h4 class="section-title">Information de facturation</h4>

                <div class="form-group">
                    <label>Adresse mail de facturation</label>
                </div>

                <div class="form-group checkbox">
                    <input type="checkbox" id="billingMailSame" checked>
                    <label for="billingMailSame">Identique au compte mail</label>
                </div>

                <div class="form-group">
                    <label>Adresse mail</label>
                    <input type="email" placeholder="louisouedraogo@gmail.com">
                </div>

                <div class="form-group">
                    <label>Détails de livraison</label>
                </div>

                <div class="form-group checkbox">
                    <input type="checkbox" id="deliverySame" checked>
                    <label for="deliverySame">Identique au compte mail</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="email" placeholder="Louisouedraogo@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Pays</label>
                        <select>
                            <option>Choisir un pays</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Fuseau horaire</label>
                        <select>
                            <option>Sélectionner fuseau horaire</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Langue</label>
                        <select>
                            <option>Sélectionner une langue</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Devise</label>
                        <select>
                            <option>Sélectionner devise</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Identifiant de taxe</label>
                        <input type="text" placeholder="N° de taxe">
                    </div>
                </div>

                <div class="overlay-actions">
                    <button type="button" class="btn-cancel" id="cancelOverlay">
                        Annuler
                    </button>
                    <button type="submit" class="btn-submit">
                        Ajouter client
                    </button>
                </div>
            </form>
         </div>
    </div>
</div>

@endsection
