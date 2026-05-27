<?php

namespace App\Models\book;

use App\Models\accomodation\Stays;
use App\Models\business\Business;
use App\Models\experience\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\Book\BookingFactory> */
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'book_ref',
        'amount',
        'room_type',
        'status',
        'ndays',
        'checkin',
        'checkout',
        'prefered_time',
        'adult_no',
        'child_no',
        'guest_name',
        'guest_email',
        'guest_phone',
        'guest_request',
        'stay_id',
        'exps_id',
        'business_id',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
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
        return $this->belongsTo(Stays::class, 'stay_id');
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'exps_id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
