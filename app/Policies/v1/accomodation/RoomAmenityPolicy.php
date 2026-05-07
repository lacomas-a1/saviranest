<?php

namespace App\Policies\v1\accomodation;

use App\Models\auth\User;
use App\Models\accomodation\RoomAmenity;
use Illuminate\Auth\Access\Response;

class RoomAmenityPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RoomAmenity $roomAmenity): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RoomAmenity $roomAmenity): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RoomAmenity $roomAmenity): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, RoomAmenity $roomAmenity): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, RoomAmenity $roomAmenity): bool
    {
        return false;
    }
}
