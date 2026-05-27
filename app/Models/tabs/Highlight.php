<?php

namespace App\Models\tabs;

use App\Models\accomodation\Rooms;
use App\Models\accomodation\Stays;
use App\Models\experience\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    /** @use HasFactory<\Database\Factories\Tabs\HighlightFactory> */
    use HasFactory;
    
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'icon',
        'description',
        'is_active',
        'sort_order',
        'exps_id',
        'stay_id',
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

    public function stays()
    {
        return $this->belongsTo(Stays::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
