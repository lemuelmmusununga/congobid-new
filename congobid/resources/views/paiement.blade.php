<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement via Araka</title>
</head>

<body>
    <form action="/araka/store" method="post">
        @csrf
        <input type="text" name="username" id="username">
        <input type="submit" value="Connexion">
    </form>
</body>

</html>
