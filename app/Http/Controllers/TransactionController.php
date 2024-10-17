<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    public function showAllTransactions()
    {
        $transactions = Transaction::all();
        return view('transactions', ['transactions' => $transactions]);
    }

    public function createTransaction()
    {
        return view('create-transaction');
    }

    public function storeTransaction(Request $request)
    {
        $validatedData = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:10',
            'total_amount' => 'required|decimal|max:255',
            'transaction_number' => 'required|string|max:255',
        ]);

        $transaction = new Transaction();
        $transaction->transaction_title = $validatedData['transaction_title'];
        $transaction->description = $validatedData['description'];
        $transaction->status = $validatedData['status'];
        $transaction->total_amount = $validatedData['total_amount'];
        $transaction->transaction_number = $validatedData['transaction_number'];

        return redirect()->route('showAllTransactions')->with('success', 'Transaction Created Succefully');
    }

    public function viewTransaction(Request $request)
    {
        $transaction = Transaction::find($request->id);
        return view('transaction', ['transaction' => $transaction]);
    }

    public function editTransaction(Request $request)
    {
        $transaction = Transaction::find($request->id);
        return view('edit-transaction', ['transaction' => $transaction]);
    }

    public function updateTransaction(Request $request)
    {
        $validatedData = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:10',
            'total_amount' => 'required|decimal|max:255',
            'transaction_number' => 'required|string|max:255',
        ]);

        $transaction = new Transaction();
        $transaction->transaction_title = $validatedData['transaction_title'];
        $transaction->description = $validatedData['description'];
        $transaction->status = $validatedData['status'];
        $transaction->total_amount = $validatedData['total_amount'];
        $transaction->transaction_number = $validatedData['transaction_number'];

        return redirect()->route('viewTransaction', ['id' => $transaction->id])->with('success', 'Transaction Updated Succefully');
    }

    public function deleteTransaction(Request $request)
    {
    }
}