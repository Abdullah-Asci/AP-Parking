<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de nouvelle réservation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card-header {
            background-color: gray;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #ffffff;
        }
        form {
            margin-top: 20px;
        }
        .custom-button {
            background-color: #eff655;
            color: black;
            border-style: inset;
            transition: background-color 0.3s ease;
        }
        .custom-button:hover {
            background-color: yellow;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Demander une nouvelle réservation</div>

                <div class="card-body">
                    <p>Cliquez sur le bouton pour faire une demande de réservation :</p>
                    <form action="{{ route('reservations.store') }}" method="post">
                        @csrf
                        <button type="submit" class="custom-button">Demander une réservation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
