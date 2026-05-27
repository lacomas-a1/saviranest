<?php

namespace App\Models\guest;

use App\Models\business\Business;
use Database\Factories\Guest\GuestsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    /** @use HasFactory<GuestsFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'stays',
        'experiences',
        'gender',
        'nationality',
        'country',
        'city',
        'location',
        'address',
        'business_id',
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
}
