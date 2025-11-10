<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'duration_minutes',
    ];

    /**
     * Bir Aktivite sadece bir Müşteriye aittir. (1-N Ters)
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Bir Aktivite birden çok Egzersizden oluşur. (N-N)
     */
    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class, 'activity_exercise')
                    ->withPivot('sets', 'reps'); // Pivot'taki set/rep bilgilerini de getir
    }
}