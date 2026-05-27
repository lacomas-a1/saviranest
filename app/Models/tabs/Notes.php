<?php

namespace App\Models\tabs;

use App\Models\experience\Experience;
use Database\Factories\Tabs\NotesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    /** @use HasFactory<NotesFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'description',
        'exps_id',
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
}
