<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'article', 'date','img'];

    public function CategoryArticles()
    {
        return $this->belongsTo('App\Models\CategoryArticles','category','id');
    }

    
}
