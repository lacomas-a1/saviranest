<?php

namespace App\Http\Controllers\v1\transaction;

use App\Filters\v1\accomodation\TransactionFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\transaction\StoreTransactionsRequest;
use App\Http\Requests\v1\transaction\UpdateTransactionsRequest;
use App\Http\Resources\v1\transaction\TransactionCollection;
use App\Http\Resources\v1\transaction\TransactionResource;
use App\Models\transaction\Transactions;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new TransactionFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new TransactionCollection(Transactions::paginate());
        } else {
            $transaction = Transactions::where($filterItems)->paginate(5)->withQueryString();

            return new TransactionCollection($transaction);
        }
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
    public function store(StoreTransactionsRequest $request)
    {
        try {
        $user = auth()->user();
        $data = $request->validated();

        $payment = Transactions::create([
            'book_ref' => $data['book_ref'],
            'amount' => $data['amount'],
            'status' => $data['status'] ?? 'pending',
            'transaction_id' => $data['transaction_id'] ?? null,
            'guest_name' => $data['guest_name'],
            'payment_method' => $data['payment_method'],
            'payment_date' => $data['payment_date'] ?? now(),
            'booking_id' => $data['booking_id'],
            'business_id' => $user->business_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Payment created successfully',
            'data' => $payment,
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to create payment',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transactions $transactions)
    {
        return new TransactionResource($transactions);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionsRequest $request, Transactions $transactions)
    {
        try {
        $data = $request->validated();

        $transactions->update([
            'book_ref' => $data['book_ref'],
            'amount' => $data['amount'],
            'status' => $data['status'] ?? $transactions->status,
            'transaction_id' => $data['transaction_id'] ?? $transactions->transaction_id,
            'guest_name' => $data['guest_name'],
            'payment_method' => $data['payment_method'],
            'payment_date' => $data['payment_date'] ?? $transactions->payment_date,
            'booking_id' => $data['booking_id'],
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Payment updated successfully',
            'data' => $transactions->fresh(),
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to update payment',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transactions $transactions)
    {
        try {
            $transactions->delete();

            return response()->json([
                'status' => true,
                'message' => 'Transaction Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Transaction',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
