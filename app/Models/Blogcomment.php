<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcomment extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blogcomment()
    {
        return $this->hasMany(Blogcomment::class, 'blog_id', 'id');
    }
}
