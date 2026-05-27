<?php

namespace App\Models\accomodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    /** @use HasFactory<\Database\Factories\Accomodation\AmenityFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'icon',
        'description',
        'stay_id',
        'is_active',
        'sort_order',
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

    public function stays()
    {
        return $this->belongsTo(Stays::class);
    }
}
