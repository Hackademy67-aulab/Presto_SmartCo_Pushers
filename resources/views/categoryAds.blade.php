<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>I nostri Annunci</h1>
            </div>
            <div class="col-12 col-md-4">
                @foreach ($category->ads as $ad)
                
                <div class="card" style="width: 18rem;">
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
            </div>
        </div>
    </div>
</x-layout>