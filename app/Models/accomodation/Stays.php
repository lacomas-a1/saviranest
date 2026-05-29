<?php

namespace App\Models\accomodation;

use App\Models\business\Business;
use App\Models\guest\Reviews;
use App\Models\tabs\Gallery;
use Database\Factories\Accomodation\StaysFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stays extends Model
{
    /** @use HasFactory<StaysFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'category',
        'location',
        'image_url',
        'excerpt',
        'description',
        'price',
        'currency',
        'rate',
        'contact',
        'email',
        'is_available',
        'is_featured',
        'is_popular',
        'business_id',
        'rating',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'is_featured' => 'boolean',
        'is_popular' => 'boolean',
        'price' => 'decimal:2',
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

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function rooms()
    {
        return $this->hasMany(Rooms::class);
    }

    public function amenities()
    {
        return $this->hasMany(Amenity::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
