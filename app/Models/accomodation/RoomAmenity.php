<?php

namespace App\Models\accomodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAmenity extends Model
{
    /** @use HasFactory<\Database\Factories\Accomodation\RoomAmenityFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'icon',
        'description',
        'is_active',
        'sort_order',
        'room_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot() :void
    {
        parent::boot();

        static::creating(function ($model){
            if(empty($model->id)){
                $model->id = self::generateRandomID();
            }
        });
    } 

    private static function generateRandomID(){
        return bin2hex(random_bytes(6));
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
