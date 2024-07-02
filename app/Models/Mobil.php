<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['mobil'];
    protected $primaryKey = 'id';
    protected $isiaku = ['id', 'user_id', 'nopolisi', 'merk', 'jenis', 'kapasitas', 'harga', 'foto'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
