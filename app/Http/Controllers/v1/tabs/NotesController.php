<?php

namespace App\Http\Controllers\v1\tabs;

use App\Filters\v1\accomodation\NotesFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\tabs\StoreNotesRequest;
use App\Http\Requests\v1\tabs\UpdateNotesRequest;
use App\Http\Resources\v1\tabs\NotesCollection;
use App\Http\Resources\v1\tabs\NotesResource;
use App\Models\tabs\Notes;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new NotesFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new NotesCollection(Notes::paginate());
        } else {
            $notes = Notes::where($filterItems)->paginate(5)->withQueryString();

            return new NotesCollection($notes);
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
    public function store(StoreNotesRequest $request)
    {
        try {
            $data = $request->validated();

            // Auto sort order per experience
            $lastOrder = Notes::where('exps_id', $data['exps_id'])
                ->max('sort_order') ?? 0;

            foreach ($request->notes as $note) {

                $section = Notes::create([
                    'exps_id' => $data['exps_id'],
                    'title' => $note['title'] ?? null,
                    'description' => $note['description'] ?? null,
                    'sort_order' => ++$lastOrder,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Section created successfully',
                'data' => $section,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create section',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Notes $notes)
    {
        return new NotesResource($notes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notes $notes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotesRequest $request, Notes $notes)
    {
        try {
            $data = $request->validated();

            $notes->update([
                'title' => $data['title'],
                'description' => $data['description'] ?? $notes->description,
                // 'description' => $data['description'] ?? $notes->description,
                'exps_id' => $data['exps_id'],
                'sort_order' => $data['sort_order'] ?? $notes->sort_order,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Section updated successfully',
                'data' => $notes->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update section',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $notes)
    {
        try {
            $notes->delete();

            return response()->json([
                'status' => true,
                'message' => 'Note Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Notes',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
