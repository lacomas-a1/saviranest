<?php

namespace App\Http\Controllers\v1\tabs;

use App\Filters\v1\accomodation\GalleryFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\tabs\StoreGalleryRequest;
use App\Http\Requests\v1\tabs\UpdateGalleryRequest;
use App\Http\Resources\v1\tabs\GalleryCollection;
use App\Http\Resources\v1\tabs\GalleryResource;
use App\Models\tabs\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new GalleryFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new GalleryCollection(Gallery::paginate());
        } else {
            $gallery = Gallery::where($filterItems)->paginate(5)->withQueryString();

            return new GalleryCollection($gallery);
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
    public function store(StoreGalleryRequest $request)
    {
        try {
            $uploaded = [];

            $lastOrder = Gallery::where('stay_id', $request->stay_id)
                ->orWhere('exps_id', $request->exps_id)
                ->max('sort_order') ?? 0;

            foreach ($request->file('images') as $index => $file) {

                $path = $file->store('uploads/gallery', 'public');

                $uploaded[] = Gallery::create([
                    'image_url' => $path,
                    'stay_id' => $request->stay_id,
                    'exps_id' => $request->exps_id,
                    'sort_order' => $lastOrder + $index + 1,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Images uploaded successfully',
                'data' => $uploaded,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Image upload failed',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return new GalleryResource($gallery);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/gallery', 'public');
            $gallery->image_url = $path;
        }

        if ($request->has('sort_order')) {
            $gallery->sort_order = $request->sort_order;
        }

        $gallery->save();

        return response()->json([
            'status' => true,
            'message' => 'Image updated successfully',
            'data' => $gallery,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        try {
            $gallery->delete();

            return response()->json([
                'status' => true,
                'message' => 'Image Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Image',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
