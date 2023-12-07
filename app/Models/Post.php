<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'user_id',
        "title",
        'content',
        'slug',
        'featured_image',
        'is_featured',
        'is_published'
    ];
    public function user()
    {
    return $this->belongsTo('app\Models\User');
    }
}