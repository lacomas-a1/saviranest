<?php

namespace App\Http\Controllers\v1\accomodation;

use App\Filters\v1\accomodation\AmenityFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\accomodation\StoreAmenityRequest;
use App\Http\Requests\v1\accomodation\UpdateAmenityRequest;
use App\Http\Resources\v1\accomodation\AmenityCollection;
use App\Http\Resources\v1\accomodation\AmenityResource;
use App\Models\accomodation\Amenity;
use Illuminate\Support\Facades\DB;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new AmenityFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new AmenityCollection(Amenity::paginate());
        } else {
            $amenity = Amenity::where($filterItems)->paginate(5)->withQueryString();

            return new AmenityCollection($amenity);
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
    public function store(StoreAmenityRequest $request)
    {
        try {

            // $user = auth()->user();

            $amenity = DB::transaction(function () use ($request) {
                $data = $request->validated();

                $lastOrder = Amenity::where('stay_id', $data['stay_id'])
                    ->max('sort_order');

                foreach ($request->amenities as $amenity) {

                    $amenity = Amenity::create([
                        'title' => $amenity['title'] ?? null,
                        'icon' => $amenity['icon'] ?? null,
                        'stay_id' => $data['stay_id'],
                        'is_active' => true,
                        'description' => $amenity['description'] ?? null,
                        'sort_order' => ++$lastOrder,
                    ]);
                }

                return $amenity;

            });

            return response()->json([
                'status' => true,
                'message' => 'Amenity Added Successfully',
                'amenity' => new AmenityResource($amenity),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Add Amenity',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenity $amenity)
    {
        return new AmenityResource($amenity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amenity $amenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAmenityRequest $request, Amenity $amenity)
    {
        try {
            return DB::transaction(function () use ($request, $amenity) {

                $data = $request->validated();

                $amenity->update([
                    'title' => $data['title'],
                    'icon' => $data['icon'],
                    'category' => $data['category'],
                    'description' => $data['description'],
                ]);

                return response()->json([
                    'staff' => new AmenityResource($amenity->fresh()),
                    'status' => true,
                    'message' => 'Amenity Updated successfully',
                ], 200);
            });

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Update Amenity',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        try {
            $amenity->delete();

            return response()->json([
                'status' => true,
                'message' => 'Amenity Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Amenity',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
