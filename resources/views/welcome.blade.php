<x-layout>
    <x-slot name=title>HomePage</x-slot>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <header class="bgheader d-flex flex-column align-items-center justify-content-center text-white">
        <section class="title text-center">
            <h3 class="h5 fw-light">NOW YOU CAN FEEL THE HEAT</h3>
            <h1 class="fw-bold display-1">Smart New Future</h1>
            <button class="px-5 py-2 mt-2">BUY NOW</button>
        </section>

   </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                @foreach ($ads as $ad)

                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$ad->title}}</h5>
                      <p class="card-text">{{$ad->price}}</p>
                      <p class="card-text">{{$ad->description}}</p>
                      <p class="card-text">{{$ad->category->name}}</p>
                      <a href="{{route('detailAd' , compact('ad'))}}" class="btn btn-primary">Dettagli</a>
                    </div>
                  </div>
                    
                @endforeach
            </div>
        </div>
    </div>

 

    </x-layout>