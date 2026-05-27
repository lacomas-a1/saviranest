<?php

namespace App\Models\experience;

use App\Models\business\Business;
use App\Models\guest\Reviews;
use App\Models\tabs\Gallery;
use App\Models\tabs\Highlight;
use Database\Factories\Experience\ExperienceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<ExperienceFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'location',
        'meeting_point',
        'image_url',
        'excerpt',
        'description',
        'period',
        'duration',
        'max_guests',
        'price',
        'currency',
        'rate',
        'contact',
        'email',
        'is_active',
        'business_id',
        'rating',
        'is_available',
        'is_featured',
        'is_popular',
    ];

    protected $casts = [
        'is_active' => 'boolean',
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

    public function itenaries()
    {
        return $this->hasMany(Itenary::class);
    }

    public function highlights()
    {
        return $this->hasMany(Highlight::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
