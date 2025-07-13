<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleTeam extends Model
{
    use HasFactory;
    protected $table = 'role_team';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'role_id',
        'team_id',
    ];
    
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
