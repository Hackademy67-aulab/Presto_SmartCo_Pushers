<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'description',
        'user_id',
        'images'
    ];

    public function user(){

        return $this-> belongsTo(User::class);

    }

    
    public function category(){

        return $this-> belongsTo(Category::class);

    }
}
