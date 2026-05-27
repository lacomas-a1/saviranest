<?php

namespace App\Models\transaction;

use App\Models\book\Booking;
use App\Models\business\Business;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    /** @use HasFactory<\Database\Factories\Transaction\TransactionsFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'book_ref',
        'amount',
        'status',
        'transaction_id',
        'guest_name',
        'payment_method',
        'payment_date',
        'booking_id',
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

    /**
     * Transaction belongs to a booking
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

     public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
