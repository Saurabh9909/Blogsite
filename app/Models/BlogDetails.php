<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        'blog_title',
        'user_id',
        'blog_details',
        'blog_type_id',
        'blog_poster',
    ];

    public function blogType()
    {
        return $this->belongsTo(BlogType::class,'blog_type_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
