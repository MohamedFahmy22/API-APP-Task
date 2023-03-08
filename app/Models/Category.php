<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categoies';
    protected $guarded = [];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function posts()
    {
       return $this->hasMany(Post::class);
    }
    public function carousel()
    {
       return $this->hasMany(Carousel::class,'category_id','id');
    }


}
