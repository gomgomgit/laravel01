<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    public function category()
    {
    	// return $this->belongsTo('\App\Models\Category');


    	return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'created_by');
    }

}
