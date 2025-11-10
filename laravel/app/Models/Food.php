<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;
    
    // food tablosunun adı 'foods' değil 'food' olduğu için
    // Laravel'e bunu belirtmemiz gerekiyor
    protected $table = 'food';

    protected $fillable = [
        'name',
        'calories_per_100g',
    ];

    /**
     * Bir Yiyecek birden çok Öğünde bulunabilir. (N-N Ters)
     */
    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(Meal::class, 'food_meal')
                    ->withPivot('amount');
    }
}