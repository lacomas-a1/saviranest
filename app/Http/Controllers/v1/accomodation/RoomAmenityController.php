<?php

namespace App\Http\Controllers\v1\accomodation;

use App\Filters\v1\accomodation\RoomAmenityFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\accomodation\StoreRoomAmenityRequest;
use App\Http\Resources\v1\accomodation\RoomAmenityCollection;
use App\Http\Resources\v1\accomodation\RoomAmenityResource;
use App\Models\accomodation\RoomAmenity;
use Illuminate\Support\Str;

class RoomAmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new RoomAmenityFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new RoomAmenityCollection(RoomAmenity::paginate());
        } else {
            $amenity = RoomAmenity::where($filterItems)->paginate(5)->withQueryString();

            return new RoomAmenityCollection($amenity);
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
    public function store(StoreRoomAmenityRequest $request)
    {
        try {
            $data = $request->validated();

            $lastOrder = RoomAmenity::where('room_id', $data['room_id'])
                ->max('sort_order') ?? 0;

            foreach ($request->room_amenities as $roomAmenity) {

                $roomFeature = RoomAmenity::create([
                    'title' => $roomAmenity['title'] ?? null,
                    'slug' => Str::slug($data['title']),
                    'icon' => $roomAmenity['icon'] ?? null,
                    'is_active' => $data['is_active'] ?? true,
                    'room_id' => $roomAmenity['room_id'] ?? null,
                    'description' => $roomAmenity['description'] ?? null,
                    'sort_order' => ++$lastOrder,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Room feature created successfully',
                'data' => new RoomAmenityResource($roomFeature),
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create room feature',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomAmenity $roomAmenity)
    {
        return new RoomAmenityResource($roomAmenity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomAmenity $roomAmenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRoomAmenityRequest $request, RoomAmenity $roomAmenity)
    {
        try {
            $data = $request->validated();

            $roomAmenity->update([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'icon' => $data['icon'],
                'description' => $data['description'],
                'is_active' => $data['is_active'] ?? $roomAmenity->is_active,
                'sort_order' => $data['sort_order'] ?? $roomAmenity->sort_order,
                'room_id' => $data['room_id'],
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Room feature updated successfully',
                'data' => new RoomAmenityResource($roomAmenity->fresh()),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update room feature',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomAmenity $roomAmenity)
    {
        try {
            $roomAmenity->delete();

            return response()->json([
                'status' => true,
                'message' => 'Room Amenity Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Room Amenity',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
