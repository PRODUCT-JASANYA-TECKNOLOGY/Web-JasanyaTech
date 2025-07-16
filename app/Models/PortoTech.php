<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortoTech extends Model
{
    use HasFactory;
    protected $table = 'porto_tech';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'portofolio_id',
        'technology_id',
    ];
    
    public function portofolio(): BelongsTo
    {
        return $this->belongsTo(Portofolio::class, 'portofolio_id');
    }

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class, 'technology_id');
    }
}
