<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Expense;
use App\Models\ExpenseCategory;

class ReportController extends Controller
{
   public function incomeReport()
   {

   }

   public function expenseReport()
   {

   }

   public function report(Request $request)
   {
        $Incomes = Income::where()->get();
        $TotalIncome = ;

        $Expenses = Expense::where()->get();
        $TotalExpense = ;

        $RestAmount = ;

        $Data = 
        [
            'Incomes' => $Incomes,
            'TotalIncome' => $TotalIncome,
            'Expenses' => $Expenses,
            'TotalExpense' => $TotalExpense,
            'RestAmount' => $RestAmount, 
        ];

        return view('report',compact('Data'));
   }
}
