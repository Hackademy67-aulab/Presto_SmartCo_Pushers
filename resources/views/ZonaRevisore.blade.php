<x-layout>


    @if (!$ad_da_revisionare)
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12  d-flex justify-content-center align-items-center">
                <h1 class="text-center display-1">Non ci sono annunci da revisionare</h1>
                @if ($ad_da_reRevisionare)
                    <form method="POST" class="mt-3"
                        action="{{ route('revisor.returnToRevision', ['ad' => $ad_da_reRevisionare]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn text-white bg-primary text-emphasis-danger"
                            style="position:absolute; top: 3.5vh; left:2vw">Annulla l'ultima operazione</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@else

<section class="vh-100 vw-100 d-flex justify-content-center align-items-center containeraggiungiannuncio">
<div class="container  d-flex align-items-center bg-white" >
    <div class="row shadow" style="height:50vh">
        <div class="col-4 d-flex justify-content-center align-items-center">
            <section class="">
            <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar"
                navigation="true">
                @if ($ad_da_revisionare->images)
                    @foreach ($ad_da_revisionare->images as $image)
                        <swiper-slide><img src="{{ $image->getUrl(350, 400) }}" alt=""></swiper-slide>

                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                    @endforeach
                @endif
            </swiper-container>
        </section>
        </div>
        <div class="col-8 d-flex flex-column justify-content-evenly">
            <section>
            <h2 class="product-title">{{ $ad_da_revisionare->title }}</h2>
                <a href="#" class="product-link mt-3">{{ $ad_da_revisionare->category->name }}</a>
                </section>
                <section>
                <h5>About this item:</h5>
                    <p>{{ $ad_da_revisionare->description }}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illo inventore quae pariatur earum quod aliquam, harum ut dignissimos quia veritatis illum autem voluptate molestias iusto! Maiores sunt dolor corporis!</p>
                </section>
                @if ($ad_da_revisionare->images)
                            @foreach ($ad_da_revisionare->images as $image)
                            <section>
                                <h3>Tags</h3>
                                <div class="">
                                  {{-- @dd(json_decode($image->labels)) --}}
                                  <section class="d-flex">
                                    @if ($image->labels)
                                        @foreach (json_decode($image->labels) as $label)
                                            <p class="m-0 p-0">{{ $label }}, </p>
                                        @endforeach
                                    @endif
                                  </section>
                                </div>
                            </section>
                                <section>
                                    <h4>Revisione Immagini</h4>

                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                        <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                        <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                        <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                        <p>Contenuto ammiccante: <span class="{{ $image->racy }}"></span></p>
                    </section>
                    @endforeach
                    @endif
                    <section class="d-flex">
                        <form class="me-3" method="POST" action="{{ route('revisor.accept_ad', ['ad' => $ad_da_revisionare]) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Accetta</button>
                        </form>

                        <form method="POST" action="{{ route('revisor.reject_ad', ['ad' => $ad_da_revisionare]) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn text-white bg-danger text-emphasis-danger">Rifiuta</button>
                        </form>

                    </section>

                        @if ($ad_da_reRevisionare)
                            @if ($ad_da_reRevisionare->is_revisor_by == Auth::user()->id)
                                <form method="POST" class="mt-3"
                                    action="{{ route('revisor.returnToRevision', ['ad' => $ad_da_reRevisionare]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn text-white bg-primary text-emphasis-danger"
                                        style="position:absolute; top: 3vh; left:2vw">Annulla l'ultima operazione</button>
                                </form>
                            @endif
                        @endif

                    </div>




        </div>
    </div>
</div>
</section>
@endif
</x-layout>