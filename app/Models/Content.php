<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    #one to one
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
