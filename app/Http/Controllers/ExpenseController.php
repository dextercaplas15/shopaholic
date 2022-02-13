<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Product;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();
        $products = Product::all();
        $expenses = Expense::orderBy('id','desc')->paginate(10);
        return view ('admin.expenses.index')->withExpenses($expenses)->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view ('admin.expenses.create')->withProducts($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array (
            'account' => 'required',
            'cost' => 'integer|required',
            'description' => 'required',
            'date' => 'date|required',
            'voucher' => 'required',
            'product_id'   => 'integer|required'
        ));

        $expense = new Expense;

        $expense->account = $request->account;
        $expense->cost = $request->cost;
        $expense->description = $request->description;
        $expense->date = $request->date;
        $expense->voucher = $request->voucher;
        $expense->product_id = $request->product_id;

        $expense->save();

        Session::flash('success', 'Expense Item Added!');

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
