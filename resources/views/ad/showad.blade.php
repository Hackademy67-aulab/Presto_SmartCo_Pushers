<x-layout>
    <div class="row justify-content-center  " style="height:40rem">
        @forelse ($ads as $ad)
        <div class="col-12 col-lg-2  d-flex justify-content-between" style="position: relative; top:-10rem">
                <div class="card p-5">
                    <section class="w-100 d-flex justify-content-center">
                        <img src="https://picsum.photos/200" style=" border-radius: 15px; width:30rem">
                    </section>
                    <h3 class="text-center my-5 fw-bold my-3 text-decoration-underline text-dark">{{$ad->title}}</h3>
                    <p class="pspecial card-text fw-bold m-0 p-0 text-dark">{{$ad->price}}</p>
                    <a href="{{route('detailAd' , compact('ad'))}}" class="pspecial text-dark">Dettagli</a>
                    <hr style="color: white" class="bg-white">
                    <p class="pspecial">Created by <span class="text-decoration-underline text-dark">{{$ad->user->name}}</span></p>
                </div>
            </div>
        @empty
        <p>Non ci sono annunci</p>
        @endforelse
</x-layout>