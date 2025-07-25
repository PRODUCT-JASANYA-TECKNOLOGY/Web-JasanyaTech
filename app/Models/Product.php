<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'product';
    protected $guarded = ['id'];

    protected $casts = [
        'image' => 'array'
    ];
    
    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }
}
