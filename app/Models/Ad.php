<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ad extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'title',
        'price',
        'description',
        'user_id',
        'images',
        'is_revisor_by'
    ];

    // creato da
    public function user(){
        return $this-> belongsTo(User::class);
    }

    // revisionato da
    public function isrevisorby(){
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

    public function revisorby($id){
        $this->is_revisor_by=$id;
        $this->save();
        return true;
    }

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $category,
        ];
        return $array;
    }


}
