<x-layout>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            {{-- <div class="col-12 ">
                <h1 class="card-title text-center">{{$ad->title}}</h1>
            </div> --}}
            <div class="col-5 d-flex-justify-content-center">

                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{Storage::url($ad->image)}}" class="card-img-top" alt="..."> --}}

                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/201" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/202" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    <div class="card-body">

                      <p class="card-text">{{$ad->price}}</p>
                      <p class="card-text">{{$ad->description}}</p>
                      <p class="card-text">{{$ad->category->name}}</p>
                      <a href="#" class="btn btn-primary">Modifica</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>