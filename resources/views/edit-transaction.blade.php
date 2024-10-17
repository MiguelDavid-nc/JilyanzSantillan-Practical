<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Transaction</title>
</head>

<body>
    <form action="{{ route('storeTransaction') }}" method="POST">
        @method('POST')
        @csrf

        <label for="transaction_title">Transaction Title:</label>
        <input type="text" transaction_title="id" name="id"
            value="{{ $transaction->transaction_title }} required"><br>

        <label for="description">Description:</label>
        <input type="text" description="id" name="id" value="{{ $transaction->description }} required"><br>

        <label for="status">Status:</label>
        <select id="status" name='status' value="{{ $transaction->status }} required">
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select><br>

        <label for="total_amount">Total Amount:</label>
        <input type="text" total_amount="id" name="id" value="{{ $transaction->total_amount }} required"><br>

        <label for="transaction_number">Transaction Number:</label>
        <input type="text" transaction_number="id" name="id"
            value="{{ $transaction->transaction_number }} required"><br>

        <button type="submit">Update</button>

</body>

</html>
