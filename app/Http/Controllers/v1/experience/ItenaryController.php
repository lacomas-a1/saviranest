<?php

namespace App\Http\Controllers\v1\experience;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\experience\StoreItenaryRequest;
use App\Http\Requests\v1\experience\UpdateItenaryRequest;
use App\Models\tabs\Itenary;

class ItenaryController extends Controller
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
    public function store(StoreItenaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Itenary $itenary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Itenary $itenary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItenaryRequest $request, Itenary $itenary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itenary $itenary)
    {
        //
    }
}
