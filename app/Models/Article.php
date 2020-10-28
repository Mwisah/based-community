<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Article extends Model
{
    use HasFactory;
    use HasTrixRichText;

    protected $fillable = ['title', 'body', 'category_id', 'active', 'article-trixFields', 'attachment-article-trixFields'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}