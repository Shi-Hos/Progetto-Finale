<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['author' , 'title', 'subtitle', 'body' , 'img', 'user_id', 'category_id', 'is_accepted'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray(){
        return [
        'id' => $this->id,
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'category_id' => $this->category,

        ];
    }  
}