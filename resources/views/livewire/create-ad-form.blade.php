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

    {{-- <div class="form-group">
        <label for="exampleInputPrice">Immagine</label>
        <input wire:model.lazy="temporary_images" name="images" multiple type="file" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp">
        @error('temporary_images') <span class="error">{{$message}}</span> @enderror
    </div> --}}

    <div class="mb-3">
        <label for="formFile" class="form-label">Inserisci immagine</label>
        <input wire:model="images" multiple class="form-control" type="file" id="formFile" accept="image/jpg,image/jpng,image/webp">
        @error('images') <span class="error">{{$message}}</span> @enderror
    </div>

    @if(!empty($images))
    <div class="row">
        <div class="col-12">
            <p>Foto preview</p>
            <div class="row">
                @foreach($images as $key=>$image)
                <div class="col-12">
                    {{$image}}
                    <!-- <div style="background-image:url({{$image->temporaryUrl()}})"></div> -->
                    <img src="{{$image->temporaryUrl()}}">
                    <button type="button" wire:click='removeImage({{$key}})'>Cancella</button>
                </div>
                @endforeach
            </div>
        </div>
    </div>  
    @endif

    <div class="form-group my-4">
    <select wire:model.defer="category" class="form-select" aria-label="Default select example">
        <option selected>Scegli la categoria</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      @error('category') <span class="error">{{$message}}</span> @enderror
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>