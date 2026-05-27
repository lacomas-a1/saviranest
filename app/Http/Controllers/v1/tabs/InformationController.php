<?php

namespace App\Http\Controllers\v1\tabs;

use App\Filters\v1\accomodation\InformationFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\tabs\StoreInformationRequest;
use App\Http\Requests\v1\tabs\UpdateInformationRequest;
use App\Http\Resources\v1\tabs\InformationCollection;
use App\Http\Resources\v1\tabs\InformationResource;
use App\Models\tabs\Information;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new InformationFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new InformationCollection(Information::paginate());
        } else {
            $infos = Information::where($filterItems)->paginate(5)->withQueryString();

            return new InformationCollection($infos);
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
    public function store(StoreInformationRequest $request)
    {
        try {
            $data = $request->validated();

            $lastOrder = Information::where('exps_id', $data->exps_id)
                ->max('sort_order') ?? 0;

            foreach ($data->informations as $information) {

                $item = Information::create([
                    'exps_id' => $data->exps_id,
                    'title' => $information['title'],

                    'description' => ! empty($information['description'])
                        ? explode("\n", $information['description'])
                        : null,

                    'sort_order' => ++$lastOrder,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Item created successfully',
                'data' => $item,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create item',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        return new InformationResource($information);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationRequest $request, Information $information)
    {
        try {
            $data = $request->validated();

            $information->update([
                'title' => $data['title'],
                'description' => $data['description'] ?? $information->description,
                // 'description' => $data['description'] ?? $information->description,
                'exps_id' => $data['exps_id'] ?? $information->exps_id,
                'stay_id' => $data['stay_id'] ?? $information->stay_id,
                'sort_order' => $data['sort_order'] ?? $information->sort_order,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Item updated successfully',
                'data' => $information->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update item',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        try {
            $information->delete();

            return response()->json([
                'status' => true,
                'message' => 'Information Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Information',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
