<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Label extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function post()
    {
        //kebanyak relasion
        return $this->hasMany(Post::class);
    }
}
