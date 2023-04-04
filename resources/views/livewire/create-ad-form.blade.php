<div>
    <form wire:submit.prevent="store" class="p-5 shadow">

                
    <div class="form-group">
        <label for="exampleInputTitle">Titolo</label>
        <input wire:model.lazy="title" type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
        @error('title') <span class="error">{{$message}}</span> @enderror
    </div>


    <div class="form-group">
        <label for="exampleInputPrice">Prezzo</label>
        <input wire:model.lazy="price" type="text" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp">
        @error('price') <span class="error">{{$message}}</span> @enderror
    </div>


    <div class="form-group">
        <label for="exampleInputDescription">Descrizione</label>
        <textarea wire:model.lazy="description" class="form-control" id="exampleInputDescription" rows="3" aria-describedby="descriptionHelp"></textarea>
        @error('description') <span class="error">{{$message}}</span> @enderror
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>