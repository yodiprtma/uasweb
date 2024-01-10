<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class makanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','harga', 'jenismakanan_id'];
    protected $table = 'makanan';

    public function jenismakanan(): BelongsTo
    {
        return $this->belongsTo(jenismakanan::class, 'jenismakanan_id', 'id');
    }
}
