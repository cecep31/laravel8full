<?php

namespace App\Models;

use App\Models\Label;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //boleh di isi
    // protected $fillable = ['title','body'];
    //yg ngak boleh di isi
    protected $guarded = ['id'];
    public function label()
    {
        //ke satu relashionship
        return $this->belongsTo(Label::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
