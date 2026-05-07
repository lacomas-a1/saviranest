<?php

namespace App\Http\Controllers\v1\tabs;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\tabs\StoreHighlightRequest;
use App\Http\Requests\v1\tabs\UpdateHighlightRequest;
use App\Models\tabs\Highlight;

class HighlightController extends Controller
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
    public function store(StoreHighlightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Highlight $highlight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHighlightRequest $request, Highlight $highlight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Highlight $highlight)
    {
        //
    }
}
