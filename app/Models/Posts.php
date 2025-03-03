<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        
    ];

    // Relación inversa con usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
