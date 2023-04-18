<div>

  <div class="container w-50 inserisciannunciocontainer" style="position: relative; top:10vh; ">
    <div class="row justify-content-center shadow-lg inserisciannunciorow"  style="height:70vh">
      <div class="col-5 inserisciannuncio ">

      </div>
      <div class="col-12 col-md-7 p-5 p-md-0">
        <form wire:submit.prevent="store" class="h-100 p-0 p-md-5 d-flex flex-column justify-content-center">
          <h2 class="mb-4">Inserisci il tuo annuncio</h2>

          <div class="form-group">
              <input placeholder="Titolo" wire:model.lazy="title" type="text" class="form-control  mb-2" id="exampleInputTitle" aria-describedby="titleHelp" style="border: 1px solid #78c96a">
              @error('title') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div>


          <div class="form-group my-4">
              <input placeholder="Prezzo"  wire:model.lazy="price" type="text" class="form-control  mb-2" id="exampleInputPrice" aria-describedby="priceHelp" style="border: 1px solid #78c96a">
              @error('price') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div>


          <div class="form-group mb-3">
              <textarea placeholder="Descrizione"  wire:model.lazy="description" class="form-control  mb-2" id="exampleInputDescription" rows="3" aria-describedby="descriptionHelp" style="border: 1px solid #78c96a"></textarea>
              @error('description') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div>

          {{-- <div class="form-group">
              <label for="exampleInputPrice">Immagine</label>
              <input wire:model.lazy="temporary_images" name="images" multiple type="file" class="form-control  mb-2" id="exampleInputPrice" aria-describedby="priceHelp">
              @error('temporary_images') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div> --}}

          <div class="mb-3">
              <label for="formFile" class="form-label">Inserisci immagine</label>
              <input wire:model="images" multiple class="form-control  mb-2" type="file" id="formFile" accept="image/jpg" style="border: 1px solid #78c96a">
              @error('images') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div>

          @if(!empty($images))
          <div class="row">
              <div class="col-12">
                  <p>Foto preview</p>
                  <div class="row">
                      <div class="col-12 d-flex flex-wrap justify-content-evenly">
                      @foreach($images as $key=>$image)

                          <section class="d-flex flex-column">
                          <img src="{{$image->temporaryUrl()}}" style="height: 150px">
                          <button type="button" wire:click='removeImage({{$key}})'class=" alert alert-danger py-2 px-4 text-white shadow" style="border-radius:0px; box-shadow:0px 0px 0px 0px;      -webkit-box-shadow: 0px 0px 0px 0px">Cancella</button>
                          </section>

                      @endforeach
                  </div>
                  </div>
              </div>
          </div>
          @endif

          <div class="form-group my-4">
          <select wire:model.defer="category" class="form-select mb-2" aria-label="Default select example" style="border: 1px solid #78c96a">
              <option selected>Scegli la categoria</option>
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            @error('category') <span class="error alert alert-danger p-1">{{$message}}</span> @enderror
          </div>


          <button type="submit" class="py-3 px-4 text-white shadow" style="border-radius:0px; background-color: #78c96a; box-shadow:0px 0px 0px 0px;      -webkit-box-shadow: 0px 0px 0px 0px">SUBMIT</button>
          </form>
      </div>
    </div>
  </div>

</div>
