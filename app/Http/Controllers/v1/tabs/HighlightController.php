<?php

namespace App\Http\Controllers\v1\tabs;

use App\Filters\v1\tabs\HighlightFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\tabs\StoreHighlightRequest;
use App\Http\Requests\v1\tabs\UpdateHighlightRequest;
use App\Http\Resources\v1\tabs\HighlightsCollection;
use App\Http\Resources\v1\tabs\HighlightsResource;
use App\Models\tabs\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index($request)
    // {
    //     $filter = new HighlightFilter;
    //     $filterItems = $filter->transform($request);

    //     if (count($filterItems) == 0) {
    //         return new HighlightsCollection(Highlight::paginate());
    //     } else {
    //         $highlights = Highlight::where($filterItems)->paginate(5)->withQueryString();

    //         return new HighlightsCollection($highlights);
    //     }
    // }
    public function index(Request $request)
    {
        $filter = new HighlightFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new HighlightsCollection(Highlight::paginate());
        }

        $highlights = Highlight::where($filterItems)
            ->paginate(5)
            ->withQueryString();

        return new HighlightsCollection($highlights);
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
        try {
            $data = $request->validated();

            // Auto sort per parent type
            $query = Highlight::query();

            if (! empty($data['stay_id'])) {
                $query->where('stay_id', $data['stay_id']);
            }

            if (! empty($data['exps_id'])) {
                $query->where('exps_id', $data['exps_id']);
            }

            if (! empty($data['room_id'])) {
                $query->where('room_id', $data['room_id']);
            }

            $lastOrder = $query->max('sort_order') ?? 0;

            if (! empty($data['highlights'])) {
                foreach ($data['highlights'] as $highlight) {
                    $feature = Highlight::create([
                        'title' => $highlight['title'] ?? null,
                        'icon' => $highlight['icon'] ?? null,
                        'description' => $highlight['description'] ?? null,
                        'sort_order' => ++$lastOrder,
                        'is_active' => true,
                        'stay_id' => $data['stay_id'] ?? null,
                        'exps_id' => $data['exps_id'] ?? null,
                        'room_id' => $data['room_id'] ?? null,
                    ]);
                }
            }

            // foreach ($data->highlights as $highlight) {

            //     $feature = Highlight::create([
            //         'title' => $highlight['title'] ?? null,
            //         'icon' => $highlight['icon'] ?? null,
            //         'description' => $highlight['description'] ?? null,
            //         'sort_order' => ++$lastOrder,
            //         'is_active' => $data['is_active'] ?? true,
            //         'stay_id' => $data['stay_id'] ?? null,
            //         'exps_id' => $data['exps_id'] ?? null,
            //         'room_id' => $data['room_id'] ?? null,
            //     ]);
            // }

            return response()->json([
                'status' => true,
                'message' => 'Feature created successfully',
                'data' => $feature,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create feature',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Highlight $highlight)
    {
        return new HighlightsResource($highlight);
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
        try {
            $data = $request->validated();

            $highlight->update([
                'title' => $data['title'],
                'icon' => $data['icon'],
                'description' => $data['description'] ?? $highlight->description,
                'is_active' => $data['is_active'] ?? $highlight->is_active,
                'sort_order' => $data['sort_order'] ?? $highlight->sort_order,
                'stay_id' => $data['stay_id'] ?? $highlight->stay_id,
                'exps_id' => $data['exps_id'] ?? $highlight->exps_id,
                'room_id' => $data['room_id'] ?? $highlight->room_id,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Feature updated successfully',
                'data' => $highlight->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update feature',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Highlight $highlight)
    {
        try {
            $highlight->delete();

            return response()->json([
                'status' => true,
                'message' => 'Highlight Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Highlight',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
