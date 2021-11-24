<?php

namespace App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
//    protected $fillable = [
//        'title',
//        'content',
//        'is_feature'
//    ];
    public function comments(){
        return $this->Many(Comment::class);
    }
}
