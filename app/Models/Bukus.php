<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bukus extends Model
{
    //
    protected $guarded = [];

    public function kategori(): BelongsTo 
    {
        return $this->belongsTo (Kategori::class);
    }
    public function penerbit (): BelongsTo
    {
        return $this->belongsTo (Penerbit::class);
    }
}
