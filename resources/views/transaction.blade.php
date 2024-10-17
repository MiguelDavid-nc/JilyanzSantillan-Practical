<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Page</title>
</head>

<body>

    <h1>Transaction Page</h1>
    <div>ID: {{ $transaction->id }}</div>
    <div>Transaction Title: {{ $transaction->transaction_title }}</div>
    <div>Description: {{ $transaction->description }}</div>
    <div>Status: {{ $transaction->status }}</div>
    <div>Total Amount: {{ $transaction->total_amount }}</div>
    <div>Transaction Number: {{ $transaction->transaction_number }}</div>
    <div>Timestampt: {{ $transaction->timestamp }}</div>
    <hr>
    
</body>

</html>
