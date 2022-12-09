<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticles extends Model
{
    use HasFactory;

    protected $table = 'category_articles';
    protected $primaryKey = 'id';
    protected $fillable = ['category_name'];

    public function articles(){

        return $this->hasMany('App\Models\Articles');
    	
    }
}
