@extends('layouts.app')

@section('title', 'Client')

@vite(['resources/css/transactions.css', 'resources/css/facture.css'])


@section('content')

<div class="transactions-container">

   
    <div class="transactions-header">
        <div>
            <h2>Facture</h2>
            <span class="subtitle">Cette historique de facture concerne uniquement les 30 derniers jours</span>
        </div>
    
    <button class="btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 20 20">
    <path
        stroke="#fff"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="1.5"
        d="M5 10h10M10 5v10"
    />
    </svg>Créer une facture</button>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection