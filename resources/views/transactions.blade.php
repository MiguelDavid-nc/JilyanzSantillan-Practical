<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRANSACTION PAGE</title>
</head>

<body>
    <h1>TRANSACTION PAGE</h1>

    @foreach ($transactions as $transaction)
        <div>ID: {{ $transaction->id }}</div>
        <div>Transaction Title: {{ $transaction->transaction_title }}</div>
        <div>Description: {{ $transaction->description }}</div>
        <div>Status: {{ $transaction->status }}</div>
        <div>Total Amount: {{ $transaction->total_amount }}</div>
        <div>Transaction Number: {{ $transaction->transaction_number }}</div>
        <div>Timestampt: {{ $transaction->timestamp }}</div>
        <hr>
    @endforeach

</body>

</html>
