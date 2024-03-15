<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'enabled',
        'published_at',
        'created_at',
        'updated_at',
        'user_id',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
