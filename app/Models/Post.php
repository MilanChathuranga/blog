<?php

namespace App\Models;

use App\Models\Scopes\PostActiveScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'parent_id',
        'title',
        'meta_title',
        'image_path',
        'slug',
        'summary',
        'published',
        'content',
        'published_at',
    ];

//  this method for Local Scope where get details about author_id equals to 2
    public function scopeAuthor($query)
    {
        $query->where('author_id', 2);
    }

//  this method for Local Scope where get details about unpublished post
    public function scopeDeactive($query)
    {
        $query->where('published', 0);
    }

//  this method for Global Scope
    protected static function booted()
    {
        static::addGlobalScope(new PostActiveScope);
//        Can use this format without create Scope class

//        static::addGlobalScope('active', function (Builder $builder) {
//            $builder->where('published', '=', 1);
//        });
    }

//    Mutator - set mutator to post title
    protected function title(): Attribute
    {
        return Attribute::make(
//            set title uppercase when get post title
            get: fn($value) => strtoupper($value),

//            set title lowercase when get post title
            set: fn($value) => strtolower($value),
        );
    }


//    date casting
    protected $casts = [
        'tags' => 'array',

        'created_at' => 'datetime:Y-m-d',
    ];
}
