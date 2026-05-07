<?php

namespace App\Http\Controllers\v1\accomodation;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\accomodation\StoreStaysRequest;
use App\Http\Requests\v1\accomodation\UpdateStaysRequest;
use App\Models\accomodation\Stays;

class StaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreStaysRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stays $stays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stays $stays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaysRequest $request, Stays $stays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stays $stays)
    {
        //
    }
}
