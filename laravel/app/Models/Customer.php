<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    // 'name', 'email' gibi sütunları toplu atama (Mass Assignment) için korumaya al
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
    ];

    /**
     * Bir Müşterinin birden çok öğünü vardır. (1-N)
     */
    public function meals(): HasMany
    {
        return $this->hasMany(Meal::class);
    }

    /**
     * Bir Müşterinin birden çok aktivitesi vardır. (1-N)
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}