<?php

namespace App\Models\business;

use App\Models\auth\User;
use Database\Factories\Business\BusinessFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /** @use HasFactory<BusinessFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'location',
        'email',
        'phone',
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

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
