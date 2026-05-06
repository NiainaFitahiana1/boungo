<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdImage extends Model
{
    use HasFactory;

    protected $table = 'ads_images';

    protected $fillable = ['ads_id', 'url'];

    public function ad(): BelongsTo
    {
        return $this->belongsTo(Ad::class, 'ads_id');
    }
}
