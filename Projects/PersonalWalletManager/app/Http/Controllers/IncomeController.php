<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IncomeCategories  = IncomeCategory::all();
        $Incomes = Income::select(
            'incomes.id',
            'income_categories.Name as CategoryName',
            'incomes.Amount',
            'incomes.Description',
            'incomes.IncomeDate',
            'incomes.created_at',
            'incomes.updated_at'
        )
        ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')  
        ->get();

        return view('income', compact('IncomeCategories','Incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Income::create($request->all());

        $Income = new Income();

        $Income->CategoryID     = $request->CategoryID;
        $Income->Amount         = $request->Amount;
        $Income->Description    = $request->Description;
        $Income->IncomeDate     = date('Y-m-d');

        $Income->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        //
    }
}
