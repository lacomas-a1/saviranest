<?php

namespace App\Http\Controllers\v1\accomodation;

use App\Filters\v1\accomodation\StaysFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\accomodation\StoreStaysRequest;
use App\Http\Requests\v1\accomodation\UpdateStaysRequest;
use App\Http\Resources\v1\accomodation\StayCollection;
use App\Http\Resources\v1\accomodation\StayResource;
use App\Models\accomodation\Stays;
use Illuminate\Support\Str;

class StaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new StaysFilter;

        $filterItems = $filter->transform($request);

        $stay = Stays::where($filterItems)->with(['rooms', 'amenities'])->paginate(5)->withQueryString();

        return new StayCollection($stay);
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
    public function store(StoreStaysRequest $request)
    {
        try {
            $user = auth()->user();
            $data = $request->validated();

            $imagePath = null;

            // upload image
            if ($request->hasFile('image_url')) {

                $image = $request->file('image_url');

                // generate unique image name
                $imageName = time().'_'.Str::random(10).'.'.$image->getClientOriginalExtension();

                // store in storage/app/public/stays
                $imagePath = $image->storeAs(
                    'stays',
                    $imageName,
                    'public'
                );
            }

            $listing = Stays::create([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'category' => $data['category'],
                'location' => $data['location'],
                'image_url' => $imagePath,
                'excerpt' => $data['excerpt'] ?? null,
                'description' => $data['description'] ?? null,
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate_type'],
                'contact' => $data['contact'] ?? null,
                'email' => $data['email'] ?? null,
                'is_available' => $data['is_available'] ?? true,
                'is_featured' => $data['is_featured'] ?? false,
                'is_popular' => $data['is_popular'] ?? false,
                'rating' => $data['rating'] ?? 0,
                'business_id' => $user->business_id,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Listing created successfully',
                'data' => $listing,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create listing',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Stays $stays)
    {
        $stays->load(['rooms', 'amenities']);

        return new StayResource($stays);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stays $stays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaysRequest $request, Stays $stays)
    {
        try {
            $data = $request->validated();

            $stays->update([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'category' => $data['category'],
                'location' => $data['location'],
                'image_url' => $data['image_url'] ?? $stays->image_url,
                'excerpt' => $data['excerpt'] ?? $stays->excerpt,
                'description' => $data['description'] ?? $stays->description,
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate_type'] ?? $stays->rate,
                'contact' => $data['contact'] ?? $stays->contact,
                'email' => $data['email'] ?? $stays->email,
                'is_available' => $data['is_available'] ?? $stays->is_available,
                'is_featured' => $data['is_featured'] ?? $stays->is_featured,
                'is_popular' => $data['is_popular'] ?? $stays->is_popular,
                'rating' => $data['rating'] ?? $stays->rating,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Listing updated successfully',
                'data' => $stays->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update listing',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stays $stays)
    {
        try {
            $stays->delete();

            return response()->json([
                'status' => true,
                'message' => 'Stay Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Stay',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
