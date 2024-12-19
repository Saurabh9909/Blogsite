<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogType extends Model
{
    use HasFactory;

    protected $table = "blogs_type";

    protected $fillable = [
        'blog_type',
    ];

    public function blogDetails()
    {
        return $this->hasOne(BlogDetails::class,'blog_type');
    }
}
