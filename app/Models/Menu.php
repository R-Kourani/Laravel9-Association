<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    #one to one relation
    public function contents()
    {
        return $this->hasOne(Content::class);
    }
    #one to many inverse
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
    #one to many
    public function children()
    {
        return $this->hasMany(Menu::class,'parent_id');
    }
}
