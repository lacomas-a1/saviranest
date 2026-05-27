<?php

namespace App\Http\Controllers\v1\experience;

use App\Filters\v1\accomodation\ItenaryFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\experience\StoreItenaryRequest;
use App\Http\Requests\v1\experience\UpdateItenaryRequest;
use App\Http\Resources\v1\experience\ItenaryCollection;
use App\Http\Resources\v1\experience\ItenaryResource;
use App\Models\experience\Itenary;

class ItenaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new ItenaryFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new ItenaryCollection(Itenary::paginate());
        } else {
            $itenary = Itenary::where($filterItems)->paginate(5)->withQueryString();

            return new ItenaryCollection($itenary);
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
    public function store(StoreItenaryRequest $request)
    {
        try {
            $data = $request->validated();

            $lastOrder = Itenary::where('exps_id', $data->exps_id)
                ->max('sort_order') ?? 0;

            foreach ($data->itineraries as $itinerary) {

              $period = Itenary::create([
                    'exps_id' => $data->exps_id,
                    'title' => $itinerary['title'] ?? null,
                    'period' => $itinerary['period'] ?? null,
                    'description' => $itinerary['description'] ?? null,
                    'sort_order' => ++$lastOrder,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Experience Itenary created successfully',
                'data' => $period,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create experience Itenary',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Itenary $itenary)
    {
        return new ItenaryResource($itenary);
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
        try {
            $data = $request->validated();

            $itenary->update([
                'exps_id' => $data['exps_id'],
                'title' => $data['title'],
                'period' => $data['period'],
                'description' => $data['description'] ?? $itenary->description,
                'sort_order' => $data['sort_order'] ?? $itenary->sort_order,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Experience Itenary updated successfully',
                'data' => $itenary->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update experience Itenary',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itenary $itenary)
    {
        try {
            $itenary->delete();

            return response()->json([
                'status' => true,
                'message' => 'Itenary Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Itenary',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
