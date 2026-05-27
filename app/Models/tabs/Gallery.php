<?php

namespace App\Models\tabs;

use App\Models\accomodation\Stays;
use App\Models\experience\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /** @use HasFactory<\Database\Factories\Tabs\GalleryFactory> */
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'galleries';

    protected $fillable = [
        'image_url',
        'exps_id',
        'stay_id',
        'sort_order',
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

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'exps_id');
    }

    public function stay()
    {
        return $this->belongsTo(Stays::class, 'stay_id');
    }
}
