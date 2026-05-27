<?php

namespace App\Http\Controllers\v1\book;

use App\Filters\v1\accomodation\BookFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\book\StoreBookingRequest;
use App\Http\Requests\v1\book\UpdateBookingRequest;
use App\Http\Resources\v1\book\BookCollection;
use App\Http\Resources\v1\book\BookResource;
use App\Models\book\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new BookFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new BookCollection(Booking::paginate());
        } else {
            $booking = Booking::where($filterItems)->paginate(5)->withQueryString();

            return new BookCollection($booking);
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
    public function store(StoreBookingRequest $request)
    {
        try {
        $user = auth()->user();
        $data = $request->validated();

        $booking = Booking::create([
            'book_ref' => 'BK-' . strtoupper(uniqid()),
            'amount' => $data['amount'],
            'room_type' => $data['room_type'],
            'status' => $data['status'] ?? 'pending',
            'ndays' => $data['ndays'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'prefered_time' => $data['prefered_time'] ?? null,
            'adult_no' => $data['adult_no'],
            'child_no' => $data['child_no'] ?? 0,
            'guest_name' => $data['guest_name'],
            'guest_email' => $data['guest_email'] ?? null,
            'guest_phone' => $data['guest_phone'],
            'guest_request' => $data['guest_request'] ?? null,
            'stay_id' => $data['stay_id'] ?? null,
            'exps_id' => $data['exps_id'] ?? null,
            'business_id' => $user->business_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Booking created successfully',
            'data' => $booking,
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to create booking',
            'error' => $e->getMessage(),
        ], 500);
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return new BookResource($booking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        try {
        $data = $request->validated();

        $booking->update([
            'room_type' => $data['room_type'],
            'amount' => $data['amount'],
            'status' => $data['status'] ?? $booking->status,
            'ndays' => $data['ndays'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'prefered_time' => $data['prefered_time'] ?? $booking->prefered_time,
            'adult_no' => $data['adult_no'],
            'child_no' => $data['child_no'] ?? $booking->child_no,
            'guest_name' => $data['guest_name'],
            'guest_email' => $data['guest_email'] ?? $booking->guest_email,
            'guest_phone' => $data['guest_phone'],
            'guest_request' => $data['guest_request'] ?? $booking->guest_request,
            'stay_id' => $data['stay_id'] ?? $booking->stay_id,
            'exps_id' => $data['exps_id'] ?? $booking->exps_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Booking updated successfully',
            'data' => $booking->fresh(),
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Failed to update booking',
            'error' => $e->getMessage(),
        ], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        try {
            $booking->delete();

            return response()->json([
                'status' => true,
                'message' => 'Booking Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Book',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
