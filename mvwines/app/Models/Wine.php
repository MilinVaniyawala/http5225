<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wine extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'type_id',
        'vineyard_id',
        'rating',
        'price',
        'image',
    ];

    public function vineyard(): BelongsTo
    {
        return $this->belongsTo(Vineyard::class);
    }

    public function winetype(): BelongsTo
    {
        return $this->belongsTo(Winetype::class, 'type_id');
    }
}
