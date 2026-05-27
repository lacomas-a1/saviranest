<?php

namespace App\Http\Controllers\v1\accomodation;

use App\Filters\v1\accomodation\RoomsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\accomodation\StoreRoomsRequest;
use App\Http\Requests\v1\accomodation\UpdateRoomsRequest;
use App\Http\Resources\v1\accomodation\RoomCollection;
use App\Http\Resources\v1\accomodation\RoomResource;
use App\Models\accomodation\Rooms;
use Illuminate\Support\Str;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new RoomsFilter;

        $filterItems = $filter->transform($request);

        $rooms = Rooms::where($filterItems)->with(['roomAmenities'])->paginate(5)->withQueryString();

        return new RoomCollection($rooms);
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
    public function store(StoreRoomsRequest $request)
    {
        try {
            $data = $request->validated();

            $room = Rooms::create([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'room_type' => $data['room_type'],
                'description' => $data['description'] ?? null,
                'image_url' => $data['image_url'] ?? null,
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate'] ?? 0,
                'is_available' => $data['is_available'] ?? true,
                'stay_id' => $data['stay_id'],
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Room created successfully',
                'data' => new RoomResource($room),
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create room',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rooms $rooms)
    {
        $rooms->load(['roomAmenities']);

        return new RoomResource($rooms);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomsRequest $request, Rooms $rooms)
    {
        try {
            $data = $request->validated();

            $rooms->update([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'room_type' => $data['room_type'],
                'description' => $data['description'] ?? $rooms->description,
                'image_url' => $data['image_url'] ?? $rooms->image_url,
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate'] ?? $rooms->rate,
                'is_available' => $data['is_available'] ?? $rooms->is_available,
                'stay_id' => $data['stay_id'],
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Room updated successfully',
                'data' => new RoomResource($rooms->fresh()),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update room',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rooms $rooms)
    {
        try {
            $rooms->delete();

            return response()->json([
                'status' => true,
                'message' => 'Room Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Room',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
