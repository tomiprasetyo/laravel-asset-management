<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __invoke()
    {
        if (Auth::user()->hasRole('admin')) {
            $transactions = Transaction::search('invoice')
                ->with('details')
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } else {
            $transactions = Transaction::search('invoice')
                ->with('details')
                ->where('user_id', Auth::id())
                ->latest()
                ->paginate(10)
                ->withQueryString();
        }
        return view('backoffice.transaction.transaction', compact('transactions'));
    }
}