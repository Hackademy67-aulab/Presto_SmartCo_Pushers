<x-layout>

    <link rel="stylesheet" href="/detailad.css">


    @if (session('message'))
    <div class="w-100 d-flex justify-content-center  slide-out-top">
        <div class="alert alert-info text-center px-5 shadow" style="margin-top:10rem; width:fit-content; border-radius:10px; position:absolute; color:#999">{{ session('message') }}</div>
    </div>
    @endif

    @if (!$ad_da_revisionare)
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12  d-flex justify-content-center align-items-center">
                <h1 class="text-center display-1">Non ci sono annunci da revisionare</h1>
                @if($ad_da_reRevisionare)
                <form  method="POST" class="mt-3" action="{{route('revisor.returnToRevision',['ad'=>$ad_da_reRevisionare])}}">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn text-white bg-primary text-emphasis-danger">Annulla l'ultima operazione</button>
                </form>
            @endif
            </div>
        </div>
    </div>
    @else


    <div class="container fluid ">
        <div class="row " style="height: 90vh">
            <div class="col-12 d-flex flex-column align-items-center ">

                @if($ad_da_revisionare)

                <div class = "card-wrapper d-flex flex-column">
                    <h1 class="mb-5 w-100">Ecco gli annunci da revisionare</h1>
                    <div class = "card w-100" style="border: 0px; border-radius: 0px">
                        <!-- card left -->
                        <div class = "product-imgs">
                            <div class = "img-display">
                                <div class = "img-showcase">
                                    <img src = "https://picsum.photos/200" alt = "shoe image">
                                    <img src = "https://picsum.photos/201" alt = "shoe image">
                                    <img src = "https://picsum.photos/202" alt = "shoe image">
                                    <img src = "https://picsum.photos/203" alt = "shoe image">
                                </div>
                            </div>
                            <div class = "img-select">
                                <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                        <img src = "https://picsum.photos/200" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "2">
                                        <img src = "https://picsum.photos/201" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "3">
                                        <img src = "https://picsum.photos/202" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "4">
                                        <img src = "https://picsum.photos/203" alt = "shoe image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- card right -->
                        <div class = "product-content">
                            <h2 class = "product-title">{{ $ad_da_revisionare->title }}</h2>
                            <p  class = "product-link">{{ $ad_da_revisionare->category->name }}</p>


                            <div class = "product-price">
                                <p class = "new-price mb-5">Price: <span>${{ $ad_da_revisionare->price }}</span></p>
                            </div>

                            <div class = "product-detail">
                                <h2 class="m-0 p-0">about this item: </h2>
                                <p class="m-0 p-0 mb-5">{{ $ad_da_revisionare->description }}</p>

                                <p class="m-0 p-0 mb-5">Created by {{ $ad_da_revisionare->user->name }}</p>


                                <section class="d-flex">
                                    <form class="me-3" method="POST"  action="{{route('revisor.accept_ad',['ad'=>$ad_da_revisionare])}}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">Accetta</button>
                                    </form>

                                    <form method="POST"  action="{{route('revisor.reject_ad',['ad'=>$ad_da_revisionare])}}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn text-white bg-danger text-emphasis-danger">Rifiuta</button>
                                    </form>


                                </section>
                                @if($ad_da_reRevisionare->is_revisor_by == Auth::user()->id)
                                <form  method="POST" class="mt-3" action="{{route('revisor.returnToRevision',['ad'=>$ad_da_reRevisionare])}}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn text-white bg-primary text-emphasis-danger">Annulla l'ultima operazione</button>
                                </form>
                            @endif
                            </div>
                        </div>
                    </div>



                </div>

                {{-- carousello fine  --}}

                {{-- form inzio  --}}



                {{-- form fine  --}}
                @endif

            </div>
        </div>
    </div>
</div>
@endif

<script src="/detailad.js"></script>
</x-layout>