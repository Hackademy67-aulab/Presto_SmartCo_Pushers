<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAdForm extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $description;
    public $category;
    public $images = [];
    public $temporary_images;
    public $image;

    protected $rules= [
        'title' => 'required|min:6',
        'price' => 'required|min:1',
        'description' =>'required|min:10',
        'category' =>'required',
        'images.*' =>'image|max:1024',
        'temporary_images.*' =>'required|image|max:1024'
    ];

    protected $messages =[
        'title.required' => 'Il titolo è richiesto',
        'title.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'price.min' => 'Il prezzo deve essere di almeno 1 cifra',
        'description.required'  => 'La descrizione è richiesta',
        'description.min'=> 'La descrizione deve essere di almeno 6 caratteri',
        'category.required'  => 'La categoria è richiesta',
        'temporary_images.required'=> 'La immagine è richiesta',
        'temporary_images.*.image'=> 'i file devono essere Immagini',
        'temporary_images.*.max'=> 'La immagine deve essere dei massimo 1mb',
        'images.image'=> 'immagine devvono essere immagini',
        'images.max'=> 'La immagine deve essere dei massimo 1mb',
        // 'images.required'  => 'La immagine è richiesta',
        // 'images.mimes'  => 'La immagine deve essere dei formati jpeg,png,jpg,gif',


    ];

    public function updateImages(){
        if($this->validate([
            'temporary_images.*'=> 'image|max:1024'
        ])){
            foreach($this->images as $image){
                dd($image);
                $this->images[]=$image;
            }
        }

    }

    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
            
        }

    }

    

    public function store()
    {
        $this->validate();

        $category=Category::find($this->category);

        $ad= $category->ads()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            // 'images'=>$this->images,
            'user_id'=>Auth::user()->id,
        ]);
        if(count($this->images)){

            foreach ($this->images as $image) {
                    $ad->images()->create(['path'=>$image->store('images', 'public')]);
          }
      }

        // foreach ($this->images as $image) {
        //     $image->store('public/image');
        // }

        $this->reset();
        return redirect(route('homePage'))->with('message', 'Annuncio creato con successo!');


    }



    public function render()
    {
        return view('livewire.create-ad-form');
    }



    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

}
