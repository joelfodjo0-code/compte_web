<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/login.css'])
</head>
<body style="background: url('{{ asset('images/Fond.jpg') }}'); background-size: cover; background-position: center;">

<div class="card">
    <h2>Connexion au compte</h2>
    <p>Veuillez entrer votre mail et mot de passe</p>

    <form method="POST" action="/login">
        @csrf

        <label>Adresse mail</label>
        <input type="email" name="email" value="{{ old('email') }}"
        placeholder="Djamina.sawadogo@koumafin.com" required>

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="password-label">
        <label>Mot de passe</label>
         <a href="#" class="forgot-password">Mot de passe oublié?</a>
        </div>
        <input type="password" name="password">
       
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="options">
            <input type="checkbox"> Se souvenir de moi
        </div>

        <button type="submit">Connexion</button>
    </form>

    <div class="link">
        Vous n’avez pas de compte ?
        <a href="{{ route('register') }}">Créer un compte</a>
    </div>
</div>

</body>
</html>
