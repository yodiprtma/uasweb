<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','makanan_id', 'jumlah'];

    protected $table = 'pesanan';

    public function makanan(): BelongsTo
    {
        return $this->belongsTo(makanan::class, 'makanan_id', 'id');
    }

    
    
}