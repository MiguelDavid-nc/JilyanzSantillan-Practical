<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create USer</title>
</head>

<body>
    <h1>CREATE TRANSACTION PAGE</h1>

    <form action="{{ route('storeTransaction') }}" method="POST">
        @method('POST')
        @csrf

        <label for="transaction_title">ID:</label>
        <input type="text" transaction_title="id" name="id" required><br>

        <label for="description">Description:</label>
        <input type="text" description="id" name="id" required><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select><br>

        <label for="total_amount">Total Amount:</label>
        <input type="number" name="total_amount" required><br>

        <label for="transaction_number">Transaction Number:</label>
        <input type="text" name="transaction_number" required><br>

        <button type="submit">Create Transaction</button>
    </form>

</body>

</html>
