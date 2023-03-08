<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];

    protected $primaryKey = 'id';

    public $timestamps = false;
    public function category()
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }
}
