<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        'images' =>'required',
        // 'images.*' =>'image|max:1024',
        'images.*' =>'mimes:jpg,jpeg,webp,png|max:1024',
        'temporary_images.*' =>'required|image|max:1024'
    ];

    protected $messages =[
        'images.required' => 'L\'immagine è richiesta',
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
        'images.mimes'=> 'immagine devvono essere immagini',
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
                    // $ad->images()->create(['path'=>$image->store('images', 'public')]);
                    $newFileName="ads/{$ad->id}";
                    $newImage = $ad->images()->create(['path'=>$image->store($newFileName , 'public')]);

                    dispatch(new ResizeImage($newImage->path , 350 , 400));
                    dispatch(new GoogleVisionSafeSearch($newImage->id));
                    dispatch(new GoogleVisionLabelImage($newImage->id));
          }

          File::deleteDirectory(storage_path('/app/livewire-tmp'));

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
