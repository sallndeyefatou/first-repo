<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
</head>
<body>
    <h1>Nouveau message de {{$details['email']}}</h1>
    <p><strong>Nom:</strong> {{ $details['nom'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Objet:</strong> {{ $details['objet'] }}</p>

    <p><strong>Message:</strong></p>
    <p>{{ $details['message'] }}</p>
</body>
</html>
