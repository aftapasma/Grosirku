<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        if (auth()->check()) {
            $userRole = auth()->user()->role;
            $userId = auth()->user()->id;

            if ($userRole === 'admin') {
                $transactions = Transaction::filter(request()->only('search'))
                ->orderByDesc('id')
                ->with('user')
                ->get();

                return view('admin.transactions', ['transactions' => $transactions]);
            } else {
                $transactions = Transaction::where('user_id', $userId)->get();
                $transactions->load('product');

                return view('customer.transactions', ['transactions' => $transactions]);
            }
        }
    }

    public function update(Request $request, Transaction $transaction) {
        if (auth()->check()) {
            $formFields['status'] = $request->status;
            $transaction->update($formFields);
            return redirect()->back();
        } 
    }
}
