<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center">
            @if($category->ads)
            <div class="col-12 col-md-6 d-flex flex-column  justify-content-evenly  align-items-center">
                <h1>Tutti gli annunci della categoria {{ $category->name }}</h1>
                <section class="d-flex justify-content-evenly w-100">
                @foreach ($category->ads as $ad)

                <div class="card" style="width: 18rem; height:fit-content">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$ad->title}}</h5>
                      {{-- <p class="card-text">{{$ad->price}}</p>
                      <p class="card-text">{{$ad->description}}</p>
                      <p class="card-text">{{$ad->category->name}}</p> --}}
                      <a href="{{route('detailAd' , compact('ad'))}}" class="btn btn-primary">Dettagli</a>
                    </div>
                  </div>
                @endforeach
            </section>
            </div>
            @else
            <div class="container-fluid">
                <div class="row vh-100">
                    <div class="col-12  d-flex justify-content-center align-items-center">
                        <h1 class="text-center display-1">Non ci sono Annunci Da revisionare</h1>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>
</x-layout>