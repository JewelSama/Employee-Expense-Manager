<?php

namespace App\Http\Controllers;

use App\Imports\ExpenseImport;
use App\Models\Expense;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExpenseController extends Controller
{
    public function store(Request $request){
        $expenseFields = $request->validate([
            'date' => 'required',
            'merchant' => 'required',
            'total' => 'required',
            'comment' => 'required',
        ]);
        Expense::create($expenseFields);
        return redirect('/')->with('status', 'Expense added Successfully!');        
    }   

    public function update(Request $request, Expense $expense){
        $expenseFields = $request->validate([
            'date' => 'required',
            'merchant' => 'required',
            'total' => 'required',
            'comment' => 'required',
        ]);
        $expense->update($expenseFields);
        return redirect('/')->with('status', 'Expense updated successfully!');
    }

    public function destroy(Expense $expense){
        $expense->delete();
        return redirect('/')->with('status', 'Expense deleted successfully!');
    }

    public function importExpense(Request $request){
        // return $request;
        Excel::import(new ExpenseImport, $request->file);
        return redirect('/')->with('status', 'Expense imported successfully!');
    }
}
