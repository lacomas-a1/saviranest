<?php

namespace App\Http\Controllers\v1\experience;

use App\Filters\v1\accomodation\ExperienceFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\experience\StoreExperienceRequest;
use App\Http\Requests\v1\experience\UpdateExperienceRequest;
use App\Http\Resources\v1\experience\ExperienceCollection;
use App\Http\Resources\v1\experience\ExperienceResource;
use App\Models\experience\Experience;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new ExperienceFilter;

        $filterItems = $filter->transform($request);

        $experience = Experience::where($filterItems)->with(['itenaries', 'galleries', 'highlights'])->paginate(5)->withQueryString();

        return new ExperienceCollection($experience);
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
    public function store(StoreExperienceRequest $request)
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
                    'experience',
                    $imageName,
                    'public'
                );
            }

            $experience = Experience::create([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'category' => $data['category'],
                'location' => $data['location'],
                'meeting_point' => $data['meeting_point'] ?? null,
                'image_url' => $imagePath,
                'excerpt' => $data['excerpt'] ?? null,
                'description' => $data['description'] ?? null,
                'period' => $data['period'] ?? null,
                'duration' => $data['duration'] ?? null,
                'max_guests' => $data['max_guests'],
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate'] ?? 0,
                'contact' => $data['contact'] ?? null,
                'email' => $data['email'] ?? null,
                'is_active' => $data['is_active'] ?? true,
                'is_available' => $data['is_available'] ?? true,
                'is_featured' => $data['is_featured'] ?? false,
                'is_popular' => $data['is_popular'] ?? false,
                'rating' => $data['rating'] ?? 0,
                'business_id' => $user->business_id,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Experience created successfully',
                'data' => $experience,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create experience',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        $experience->load(['itenaries', 'galleries', 'highlights']);

        return new ExperienceResource($experience);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        try {
            $data = $request->validated();

            $experience->update([
                'title' => $data['title'],
                'slug' => $data['slug'] ?? Str::slug($data['title']),
                'category' => $data['category'],
                'location' => $data['location'],
                'meeting_point' => $data['meeting_point'] ?? $experience->meeting_point,
                'image_url' => $data['image_url'] ?? $experience->image_url,
                'excerpt' => $data['excerpt'] ?? $experience->excerpt,
                'description' => $data['description'] ?? $experience->description,
                'period' => $data['period'] ?? $experience->period,
                'duration' => $data['duration'] ?? $experience->duration,
                'max_guests' => $data['max_guests'],
                'price' => $data['price'],
                'currency' => $data['currency'],
                'rate' => $data['rate'] ?? $experience->rate,
                'contact' => $data['contact'] ?? $experience->contact,
                'email' => $data['email'] ?? $experience->email,
                'is_active' => $data['is_active'] ?? $experience->is_active,
                'is_available' => $data['is_available'] ?? $experience->is_available,
                'is_featured' => $data['is_featured'] ?? $experience->is_featured,
                'is_popular' => $data['is_popular'] ?? $experience->is_popular,
                'rating' => $data['rating'] ?? $experience->rating,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Experience updated successfully',
                'data' => $experience->fresh(),
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update experience',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        try {
            $experience->delete();

            return response()->json([
                'status' => true,
                'message' => 'Experience Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Experience',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
