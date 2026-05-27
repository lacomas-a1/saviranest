<?php

namespace App\Http\Controllers\v1\host;

use App\Filters\v1\accomodation\BusinessFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\host\StoreBusinessRequest;
use App\Http\Requests\v1\host\UpdateBusinessRequest;
use App\Http\Resources\v1\host\BusinessCollection;
use App\Http\Resources\v1\host\BusinessResource;
use App\Models\business\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new BusinessFilter;

        $filterItems = $filter->transform($request);

        $business = Business::where($filterItems)->with(['itenaries', 'galleries', 'highlights'])->paginate(5)->withQueryString();

        return new BusinessCollection($business);
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
    public function store(StoreBusinessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        $business->load('users');

        return new BusinessResource($business);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusinessRequest $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        try {
            $business->delete();

            return response()->json([
                'status' => true,
                'message' => 'Business Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Business',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function businessSetup()
    {
        $seo = [
            'title' => 'SaviraNest Admin | Business Setup',
            'image' => asset('assets/image/favicon.ico'),
            'type' => 'website',
        ];

        return view('auth.business', compact('seo'));
    }

    public function storeSetup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'telephone' => 'required',
        ]);

        $user = auth()->user();

        if (! $user) {
            return redirect()->route('login')
                ->with('error', 'Please login first.');
        }

        $business = Business::create([
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->telephone,
            'email' => $user->email,
        ]);

        $user->update([
            'business_id' => $business->id,
        ]);

        // return redirect()->route('dashboard');
        return redirect()->route('dashboard')
            ->with('success', 'Business created successfully.');
    }
}
