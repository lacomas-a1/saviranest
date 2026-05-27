<?php

namespace App\Models\accomodation;

use Database\Factories\Accomodation\RoomsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    /** @use HasFactory<RoomsFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'room_type',
        'description',
        'image_url',
        'price',
        'currency',
        'rate',
        'is_available',
        'stay_id',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'price' => 'decimal:2',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = self::generateRandomID();
            }
        });
    }

    private static function generateRandomID()
    {
        return bin2hex(random_bytes(6));
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function stay()
    {
        return $this->belongsTo(Stays::class);
    }

    public function roomAmenities()
    {
        return $this->hasMany(RoomAmenity::class);
    }
}
