<!DOCTYPE html>
<html>
<head>
    <title>Paiement FedaPay</title>
</head>
<body>
    <h1>Paiement via FedaPay</h1>
    <form action="{{ route('payment.initiate') }}" method="GET">
        <button type="submit">Payer maintenant</button>
        <p>moi meme</p>
    </form>
</body>
</html>
