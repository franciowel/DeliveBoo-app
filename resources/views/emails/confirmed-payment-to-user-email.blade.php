<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao! E' stato effetuttato un nuovo ordine al tuo ristorante.</h1>

    <p>
        Ordine effetuttato da {{$new_order->name}} {{$new_order->lastname}}, {{$new_order->email}}, per un totale di {{$new_order->total_price}} euro.
        <br>
        Vai sul tuo profilo ristoratore per visualizzare l'ordine in tutti i suoi dettagli.
    </p>
        

</body>
</html>