<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class MyTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data my transaction by user id
        $myTransaction = Transaction::with(['user'])
            ->where('user_id', auth()->user()->id)->latest()->get();

        return view('pages.admin.my-transaction.index', compact(
            'myTransaction'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // show data by slud and id
    public function show($slug)
    {
        // get data transaction by slug and id with relation
        $transaction = Transaction::with(['user', 'transaction_item.product.product_galleries'])
            ->where('id', $slug)->firstOrFail();

        return view('pages.admin.my-transaction.show', compact(
            'transaction'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // show data bt slug and id
    public function showDataBySlugAndId($slug, $id)
    {
        // get data transaction by slug and id with relation
        // $transaction = Transaction::with(['user', 'transaction_items.product.product_galleries'])
        //     ->where('id', $id)->firstOrFail();
        // get data transaction by slug and id
        $transaction = Transaction::where('slug', $slug)
            ->where('id', $id)->firstOrFail();

        return view('pages.admin.my-transaction.show', compact(
            'transaction'
        ));
    }
}
