<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'portofolio';
    protected $guarded = ['id'];

    protected $casts = [
        'image' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
