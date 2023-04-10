<x-layout>
    <div class="container-fluid  vh-100 mt-5 pt-5">
    <div class="row justify-content-center align-items-center  h-100">
        <div class="col-12 col-lg-5 d-flex flex-wrap justify-content-evenly align-items-center">
        @forelse ($ads as $ad)
                <div class="card p-3" style="width: fit-content">
                    <section class="w-100 d-flex justify-content-center">
                        <img src="https://picsum.photos/200" style=" border-radius: 15px; width:15rem">
                    </section>
                    <h3 class="text-center my-5 fw-bold my-3 text-decoration-underline text-dark">{{$ad->title}}</h3>
                    <p class="pspecial card-text fw-bold m-0 p-0 text-dark">{{$ad->price}}</p>
                    <a href="{{route('detailAd' , compact('ad'))}}" class="pspecial text-dark">Dettagli</a>
                    <hr style="color: white" class="bg-white">
                    <p class="pspecial">Created by <span class="text-decoration-underline text-dark">{{$ad->user->name}}</span></p>
                </div>

        @empty
    </div>
        <p>Non ci sono annunci</p>
        @endforelse
    </div>
</x-layout>