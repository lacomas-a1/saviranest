<?php

namespace App\Http\Controllers\v1\host;

use App\Filters\v1\accomodation\RoleFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\host\StoreRoleRequest;
use App\Http\Requests\v1\host\UpdateRoleRequest;
use App\Http\Resources\v1\host\RoleCollection;
use App\Http\Resources\v1\host\RoleResource;
use App\Models\business\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
        $filter = new RoleFilter;
        $filterItems = $filter->transform($request);

        if (count($filterItems) == 0) {
            return new RoleCollection(Role::paginate());
        } else {
            $roles = Role::where($filterItems)->paginate(5)->withQueryString();

            return new RoleCollection($roles);
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
    public function store(StoreRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return new RoleResource($role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try {
            $role->delete();

            return response()->json([
                'status' => true,
                'message' => 'Role Deleted successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to Delete Role',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
