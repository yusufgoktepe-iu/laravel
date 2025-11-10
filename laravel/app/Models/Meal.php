<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'type',
        'eaten_at',
    ];

    /**
     * Bir Öğün sadece bir Müşteriye aittir. (1-N Ters)
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Bir Öğün birden çok Yiyecekten oluşur. (N-N)
     */
    public function foods(): BelongsToMany
    {
        // Pivot tablonun adını ve sütunlarını belirtiyoruz
        return $this->belongsToMany(Food::class, 'food_meal')
                    ->withPivot('amount'); // Aradaki 'amount' sütununu da getirmesi için
    }
}