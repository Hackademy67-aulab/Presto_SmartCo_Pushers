<x-layout>


    <x-slot name=title>HomePage</x-slot>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    {{-- header --}}
    <header class="bgheader d-flex flex-column align-items-center justify-content-center text-white">
        <section class="title text-center">
            <h3 class="h5 fw-light">NOW YOU CAN FEEL THE HEAT</h3>
            <h1 class="fw-bold display-1 ">Smart New Future</h1>
            <button class="px-5 py-2 mt-2">BY NOW</button>
        </section>
    </header>
    {{-- fine header --}}

    <main>

        {{-- sezione1 --}}
        <div class="container shadow-lg p-5 my-5" style="height: fit-content;">
            <div class="row">
                <div class="col-3 text-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-truck-fast fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Free Delivery</h5>
                    <p style="color:#777777" class="m-0 p-0">Free Shipping on all order</p>
                </div>
                <div class="col-3 text-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-clock-rotate-left fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Return Policy</h5>
                    <p style="color:#777777" class="m-0 p-0">Security in the return of orders</p>
                </div>
                <div class="col-3 text-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-headset fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">24/7 Support</h5>
                    <p style="color:#777777" class="m-0 p-0">Full assistance</p>
                </div>
                <div class="col-3 text-center">
                    <i class="fa-solid fa-money-check fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Secure Payment</h5>
                    <p style="color:#777777" class="m-0 p-0">Transaction security</p>
                </div>
            </div>
        </div>
        {{-- fine sezione1 --}}

        {{-- sezione2 --}}
        {{-- <div class="container-fluid yourproduct d-flex flex-column justify-content-evenly">
            <div class="row justify-content-center reveal ">
                <div class="col-12">
                    <h2 class="text-white text-center fw-bold display-5" style="margin-bottom:12rem">Your product</h2>
                </div>
            </div>
            <div class="row justify-content-center  " style="height:40rem">
                @foreach ($ads as $ad)
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
                @endforeach
            </div>
        </div> --}}
    <section class="d-flex align-items-center flex-column mt-5 mb-5">
        <h1 class="mt-5">Latest product</h1>
        <p style="color:#999">Drag the cards to move them</p>
    </section>
    {{-- --}}
    <div class="container bg-white">
      <div class="card-carousel bg-white d-flex justify-content-center">
        @foreach ($ads as $ad)
        <div class="card">
            <div class="image-container w-100" style="height: 85%;">
                <img src="https://picsum.photos/200" alt="Avatar" class="image w-100 h-100">
                <div class="middle">
                    <a href="{{ route('detailAd', compact('ad')) }}" class="text py-2" style="text-decoration: none; border-bottom:1px solid rgba(36, 36, 36, 0.752);  color:rgba(36, 36, 36, 0.752)">Details</a>
                </div>
            </div>
            <section class="d-flex align-items-end justify-content-center" style="height: 15%"><p>{{ $ad->title }}</p></section>
        </div>
        @endforeach
      </div>
    </div>
    <div class="w-100 mt-5 pt-3 d-flex justify-content-center"><button class="py-3 px-5 bg-light "><a class="text-dark fw-bold" href="" style="text-decoration: none;">VIEW ALL</a></button></div>
{{-- fine sezione2 --}}



{{-- popup lavora con noi --}}
<div class="container-fluid p-5 slide-in-bottom me-5 mb-5" style="width: fit-content; border: 0.1px #C8C8C9 solid; border-radius: 20px;"  id="containerrichiestarevisore">

    <p class="m-0 p-0 text-center">Ei, vuoi entrare a far parte <br> del nostro team?</p>
    <hr class="my-5">
    <p class="mb-5  mx-0 p-0 text-center">Clicca qui sotto </p>

    <a href="javascript:;" class="m-0 p-0" style="text-decoration: none; color:#000000">
        <div class="container-fluid d-flex justify-content-center " id="bottonerichiestarevisore">
            <button id="btn" class="p-3">
                <p id="btnText" class="py-0 my-0">Invia la richiesta</p>
            </button>
        </div>
    </a>
</div>
{{-- fine popup Lavora con noi --}}


</main>

@auth
<script type="text/javascript">
    const btn = document.querySelector("#btn");
    const btnText = document.querySelector("#btnText");

    btn.onclick = () => {
        btnText.innerHTML = "Grazie!";
        btn.classList.add("grazie");
    };
</script>
@endauth

{{-- fine popup Lavora con noi --}}


</x-layout>