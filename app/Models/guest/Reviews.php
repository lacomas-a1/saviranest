<?php

namespace App\Models\guest;

use App\Models\accomodation\Stays;
use App\Models\experience\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    /** @use HasFactory<\Database\Factories\Guest\ReviewsFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

     protected $fillable = [
        'reviewer_name',
        'reviewer_email',
        'rating',
        'review',
        'reply',
        'admin_name',
        'is_approved',
        'stay_id',
        'exps_id',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
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

    public function stay()
    {
        return $this->belongsTo(Stays::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
