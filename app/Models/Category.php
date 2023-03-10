<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'meta_title',
        'slug',
        'content',
    ];

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

}
