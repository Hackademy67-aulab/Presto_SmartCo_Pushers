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

    public static function  contaAnnunciDaRevisionare(){
        return Ad::where('is_accepted', null)->count();
    }

    public static function  secisonoannuncidarevisionare(){
        return Ad::where('is_accepted', null);
    }

    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }


}
