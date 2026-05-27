<?php

namespace App\Http\Controllers\v1\guest;

use App\Filters\v1\accomodation\GuestFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\guest\StoreGuestsRequest;
use App\Http\Requests\v1\guest\UpdateGuestsRequest;
use App\Http\Resources\v1\guest\GuestCollection;
use App\Http\Resources\v1\guest\GuestResource;
use App\Models\guest\Guests;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new GuestFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new GuestCollection(Guests::paginate());
        } else {
            $guests = Guests::where($filterItems)->paginate(5)->withQueryString();

            return new GuestCollection($guests);
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
    public function store(StoreGuestsRequest $request)
    {
    try {
        $user = auth()->user();
        $data = $request->validated();

        $guests = Guests::create([
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'],
            'stays' => $data['stays'] ?? 0,
            'experiences' => $data['experiences'] ?? 0,
            'gender' => $data['gender'] ?? null,
            'nationality' => $data['nationality'] ?? null,
            'country' => $data['country'] ?? null,
            'city' => $data['city'] ?? null,
            'location' => $data['location'] ?? null,
            'address' => $data['address'] ?? null,
            'business_id' => $user->business_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'guests created successfully',
            'data' => $guests,
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to create guests',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Guests $guests)
    {
        return new GuestResource($guests);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guests $guests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestsRequest $request, Guests $guests)
    {
    try {
        $data = $request->validated();

        $guests->update([
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'],
            'stays' => $data['stays'] ?? $guests->stays,
            'experiences' => $data['experiences'] ?? $guests->experiences,
            'gender' => $data['gender'] ?? $guests->gender,
            'nationality' => $data['nationality'] ?? $guests->nationality,
            'country' => $data['country'] ?? $guests->country,
            'city' => $data['city'] ?? $guests->city,
            'location' => $data['location'] ?? $guests->location,
            'address' => $data['address'] ?? $guests->address,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Guests updated successfully',
            'data' => $guests->fresh(),
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to update guests',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guests $guests)
    {
        try {
            $guests->delete();

            return response()->json([
                'status' => true,
                'message' => 'Guest Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Guest',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
