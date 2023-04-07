<x-layout>
    <h1 class="text-center mt-5 pt-5">Annunci da revisionare</h1>

    <div class="container fluid">
        <div class="row">
            <div class="col-12">

                @if ($ad_da_revisionare)
                   <p class="text-center">Ecco le Annunci Da revisionare</p>
                @else
                   <p class="text-center">Non Ci sono Annunci Da revisionare</p>   
                @endif

            </div>
        </div>
    </div>

    @if (session('message'))
      <div class="alert alert-success">
           {{ session('message') }}
       </div>
   @endif

    <div class="container fluid">
        <div class="row">
            <div class="col-12">

                @if($ad_da_revisionare)

                      <p class="text-center">{{$ad_da_revisionare->title}}</p>

                      <p class="text-center" >{{$ad_da_revisionare->price}}</p>
                      
                      <p class="text-center">{{$ad_da_revisionare->description}}</p>

                   {{-- carousello inzio  --}}
                <div id="carouselExample" class="carousel slide">

                   <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://picsum.photos/100" class="d-block w-100 " alt="...">
                       </div>
                         
                    <div class="carousel-item">
                        <img src="https://picsum.photos/100" class="d-block w-100 " alt="...">
                    </div>

                     <div class="carousel-item">
                         <img src="https://picsum.photos/100" class="d-block w-100" alt="...">
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

                   {{-- carousello fine  --}}

                   {{-- form inzio  --}}
                   <form method="POST"  action="{{route('revisor.accept_ad',['ad'=>$ad_da_revisionare])}}">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Acceta</button> 
                   </form>

                   <form method="POST"  action="{{route('revisor.reject_ad',['ad'=>$ad_da_revisionare])}}">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Rifiuta</button> 
                   </form>


                   {{-- form fine  --}}
                @endif
                
            </div>
        </div>
    </div>
</x-layout>