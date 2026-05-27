<?php

namespace App\Http\Controllers\v1\guest;

use App\Filters\v1\accomodation\ReviewFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\guest\StoreReviewsRequest;
use App\Http\Requests\v1\guest\UpdateReviewsRequest;
use App\Http\Resources\v1\guest\ReviewCollection;
use App\Http\Resources\v1\guest\ReviewResource;
use App\Models\guest\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new ReviewFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new ReviewCollection(Reviews::paginate());
        } else {
            $review = Reviews::where($filterItems)->paginate(5)->withQueryString();

            return new ReviewCollection($review);
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
    public function store(StoreReviewsRequest $request)
    {
        try {
        $data = $request->validated();

        $review = Reviews::create([
            'reviewer_name' => $data['reviewer_name'],
            'reviewer_email' => $data['reviewer_email'] ?? null,
            'rating' => $data['rating'],
            'review' => $data['review'],
            'reply' => $data['reply'] ?? null,
            'admin_name' => $data['admin_name'] ?? null,
            'is_approved' => $data['is_approved'] ?? false,
            'stay_id' => $data['stay_id'] ?? null,
            'exps_id' => $data['exps_id'] ?? null,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Review created successfully',
            'data' => $review,
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to create review',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        return new ReviewResource($reviews);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewsRequest $request, Reviews $reviews)
    {
        try {
        $data = $request->validated();

        $reviews->update([
            'reviewer_name' => $data['reviewer_name'],
            'reviewer_email' => $data['reviewer_email'] ?? $reviews->reviewer_email,
            'rating' => $data['rating'],
            'review' => $data['review'],
            'reply' => $data['reply'] ?? $reviews->reply,
            'admin_name' => $data['admin_name'] ?? $reviews->admin_name,
            'is_approved' => $data['is_approved'] ?? $reviews->is_approved,
            'stay_id' => $data['stay_id'] ?? $reviews->stay_id,
            'exps_id' => $data['exps_id'] ?? $reviews->exps_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Review updated successfully',
            'data' => $reviews->fresh(),
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to update review',
            'error' => $e->getMessage(),
        ], 500);
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        try {
            $reviews->delete();

            return response()->json([
                'status' => true,
                'message' => 'Review Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Review',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
