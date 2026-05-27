<?php

namespace App\Models\experience;

use App\Models\experience\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itenary extends Model
{
    /** @use HasFactory<\Database\Factories\Tabs\ItenaryFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'exps_id',
        'title',
        'period',
        'description',
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
        return $this->belongsTo(Experience::class);
    }
}
