<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortoCategory extends Model
{
    use HasFactory;
    protected $table = 'porto_category';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'portofolio_id',
        'category_id',
    ];
    
    public function portofolio(): BelongsTo
    {
        return $this->belongsTo(Portofolio::class, 'portofolio_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
