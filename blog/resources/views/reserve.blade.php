<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de places de parking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .title {
    background: linear-gradient(to right, yellow, white);
    padding: 20px;
    text-align: center;
    margin-top: 20px;
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 25px;
            text-decoration: none;
            color: black;
            border: 1px solid black;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: lightgray;
        }

        .steps {
            margin-top: 20px;
            text-align: center;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .timetable {
            background: linear-gradient(to right, yellow, white);
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>
    <a href="/dashboard" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>
    <a href="/register" class="text-sm text-gray-700 dark:text-gray-500 underline">Inscription</a>
<<<<<<< Updated upstream
    
=======
    <a href="/create" class="text-sm text-gray-700 dark:text-gray-500 underline">demander une reservation</a>
>>>>>>> Stashed changes
</div>

<div class="title">
    <a href="/create" class="button-link">Cliquez ici pour demander une reservation</a>
</div>

<div class="steps">
    <br><br><br><br><br><br><br><br>
    <h2>Comment ça marche :</h2>
    <ol>
        <li>Choisissez votre lieu de stationnement.</li>
        <li>Sélectionnez la date et l'heure de début de votre réservation.</li>
        <li>Procédez au paiement en ligne de manière sécurisée.</li>
        <li>Recevez votre confirmation de réservation par email.</li>
    </ol>
</div>

</body>
</html>
