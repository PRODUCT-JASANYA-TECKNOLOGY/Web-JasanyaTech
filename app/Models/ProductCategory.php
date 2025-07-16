<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'product_id',
        'category_id',
    ];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
