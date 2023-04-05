<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAdForm extends Component
{
    public $title;
    public $price;
    public $description;
    public $category;

    protected $rules= [
        'title' => 'required|min:6',
        'price' => 'required|min:1',
        'description' =>'required|min:10'
    ];

    protected $messages =[
        'title.required' => 'Il titolo è richiesto',
        'title.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'price.min' => 'Il prezzo deve essere di almeno 1 cifra',
        'description.required'  => 'La descrizione è richiesta',
        'description.min'=> 'La descrizione deve essere di almeno 6 caratteri',
    ];

    public function store()
    {
        $this->validate();

        $category=Category::find($this->category);
        $category->ads()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'user_id'=>Auth::user()->id
        ]);

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
