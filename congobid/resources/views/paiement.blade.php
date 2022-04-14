<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="{{ route('paiements.store')}}" method="post">
            @csrf
            <p>
                <input type="text" name="paymentPageId" id="paymentPageId" value="EC3E8939-ABB8-4DD8-958C-FF01AAC8E602">
            </p>
            <p>
                <input type="text" name="customerFullName" id="customerFullName" value="Roger Mutoto">
            </p>
            <p>
                <input type="text" name="customerPhoneNumber" id="customerPhoneNumber" value="243818086892">
            </p>
            <p>
                <input type="text" name="customerEmailAdress" id="customerEmailAdress" value="rogermutotomanu9@gmail.com">
            </p>
            <p>
                <input type="text" name="transactionReference" id="transactionReference" value="congobid_test1">
            </p>
            <p>
                <input type="text" name="amount" id="amount" value="10">
            </p>
            <p>
                <input type="text" name="currency" id="currency" value="CDF">
            </p>
            <p>
                <input type="text" name="redirectURL" id="redirectURL" value="https://www.newtech-rdc.net">
            </p>
            <p>
                <input type="submit" value="Valider">
            </p>
        </form>

    </body>
</html>
