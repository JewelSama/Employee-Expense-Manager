<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function store(Request $request){
        $expenseFields = $request->validate([
            'date' => 'required',
            'merchant' => 'required',
            'total' => 'required',
            'comment' => 'required',
        ]);
        // return $request;
            Expense::create($expenseFields);
        return redirect('/')->with('status', 'Expense added Successfully!');        
    }   
}
