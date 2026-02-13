<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    @vite(['resources/css/error.css'])
</head>
<body style="background: url('{{ asset('images/Fond.jpg') }}'); background-size: cover; background-position: center;">
    <div class="error-container">
        <div class="error-card">
            <div class="error-image">
                <img src="{{ asset('images/card.jpg') }}" alt="404">
            </div>

            @auth
                {{-- Si l'utilisateur est connecté --}}
                <h1 class="error-title">Regardez ce que vous avez ratés...</h1>
                
                <a href="{{ route('tableau') }}" class="btn-tableau">
                    Retour au tableau de bord
                </a>
            @else
                {{-- Si l'utilisateur n'est PAS connecté --}}
                <h1 class="error-title">L'URL demandée est introuvable</h1>
                
                <a href="{{ route('login') }}" class="btn-tableau">
                    Retour à la page de connexion
                </a>
            @endauth
        </div>
    </div>
</body>
</html>