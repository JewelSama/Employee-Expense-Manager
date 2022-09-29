<?php

use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $expense = Expense::latest()->get();
    $totalN = 0;
    foreach($expense as $item){
        $totalN += $item->total;
    }
    return view('home', compact('expense', 'totalN'));
});
Route::post('/expense', [ExpenseController::class, 'store'])->name('expense');
Route::put('/expense/edit/{expense}', [ExpenseController::class, 'update']);
Route::delete('/expense/delete/{expense}', [ExpenseController::class, 'destroy']);
