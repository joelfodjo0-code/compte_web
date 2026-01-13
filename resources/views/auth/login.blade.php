<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Nunito Sans', sans-serif;
            background: url('{{ asset('images/Fond.jpg') }}');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        .card {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .card h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            margin-bottom: 20px;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            text-align: left;
            font-weight: SemiBold;
            color: #202224;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .error {
            color: red;
            font-size: 13px;
            text-align: left;
        }


        .options {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #202224;
        }

        button[type="submit"] {
            padding: 10px;
            background-color: #1C3661;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 80%;
            display: block; 
            margin: 10px auto;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .link {
            margin-top: 20px;
            font-size: 14px;
            color: #333;
            margin-top: 2px;
        }

        .link a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            text-decoration: underline;
        }

    </style>
</head>
<body>

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

        <label>Mot de passe</label>
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
