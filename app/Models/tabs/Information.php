<?php

namespace App\Models\tabs;

use App\Models\accomodation\Stays;
use App\Models\experience\Experience;
use Database\Factories\Tabs\InformationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    /** @use HasFactory<InformationFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'description',
        'exps_id',
        'stay_id',
        'sort_order',
    ];

    protected $casts = [
        'description' => 'array',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = self::generateRandomID();
            }
        });
    }

    private static function generateRandomID()
    {
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
