<x-layout>


    <x-slot name=title>HomePage</x-slot>

    @if (session('message'))
    <div class="w-100 d-flex justify-content-center  slide-out-top">
        <div class="alert alert-info text-center px-5 shadow" style="margin-top:15rem; width:fit-content; border-radius:10px; position:absolute; color:#999">{{ session('message') }}</div>
      </div>
    @endif


    {{-- header --}}
    <header class="bgheader d-flex flex-column align-items-center justify-content-center text-white">
        <section class="title text-center">
            <img src="/imgblade/logoscritta.png" style="height: 100px" alt="">
            <h1 class="mt-5" >GET  STARTED  YOUR  SHOPPING</h1>
        </section>
    </header>
    {{-- fine header --}}

    <main>

        {{-- sezione1 --}}
        <div class="container shadow-lg p-5 my-5 reveal fade-bottom" style="height: fit-content;">
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
        <section class="d-flex align-items-center flex-column mt-5 mb-5 reveal fade-bottom">
            <h1 style="margin-top:5.5rem">Latest product</h1>
            <p style="color:#999">Drag the cards to move them</p>
        </section>

        {{-- carousel --}}
        <div class="container bg-white reveal fade-bottom">
            <div class="card-carousel bg-white d-flex justify-content-center">
                @foreach ($ads as $ad)
                <div class="card">
                    <div class="image-container w-100" style="height: 85%;">
                        <img src="https://picsum.photos/200" alt="" class="image w-100 h-100">
                        <div class="middle">
                            <p class="pdetail">
                                <a href="{{ route('detailAd', compact('ad')) }}">
                                    details
                                    <svg viewBox="0 0 70 36">
                                        <path d="M6.9739 30.8153H63.0244C65.5269 30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598 11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153 54.5169 -6.68469 23.489 9.31527" />
                                    </svg>
                                </a>
                            </p>
                        </div>
                    </div>
                    <section class="d-flex align-items-end justify-content-center" style="height: 15%"><p>{{ $ad->title }}</p></section>
                </div>
                @endforeach
            </div>
        </div>
        {{-- fine carousell --}}

        {{-- button view all --}}
        <section class="d-flex justify-content-center mt-5 pt-3 reveal fade-bottom">
            <a href="{{ route('showad') }}">
                <div id="container">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">VIEW ALL</span>
                    </button>
                </div>
            </a>
        </section>
        {{--fine button view all --}}
        {{-- fine sezione2 --}}

        <div class="container-fluid reveal fade-bottom" style="margin-top:10rem">
            <div class="row justify-content-center p" style="height: 100vh">
                @foreach($categories as $category)
                    <div class="col-2 d-flex justify-content-center align-items-center" style="background: linear-gradient(90deg, rgba(37,94,224,0) 0%, rgba(0, 0, 0, 0.761) 0%), url('{{ Storage::url("{$category->img}") }}'); background-size: cover; background-repeat: no-repeat; background-position:center; width:30rem">
                        <div class="wrapper">
                            <h3 align="center"><a class="effect-underline text-uppercase" href="{{ route('categoryAds', compact('category')) }}" style="text-decoration:none">{{ $category->name }}</a><h1>
                          </div>

                    </div>
                @endforeach

                </div>
            </div>

            <div class="container-fluid">
                <div class="row sezione3 d-flex justify-content-center secondhand">
                    <div class="col-5 text-end d-flex flex-column justify-content-center align-items-end reveal fade-left">
                        <h2 class=" display-2 text-uppercase fw-bold ">Second hand effect</h2>
                        <h3 class=" display-5 text-uppercase fw-bold ">Comprare e vendere l'usato <br> aiuta l'ambiente</h3>
                        <h5 class="fw-light">Riutilizzare accessori di elettronica permette di risparmiare tonnellate e tonnellate di <br> anidride carbonica ogni anno. Un aiuto al portafoglio e al pianeta.</span></h5>
                    </div>
                    <div class="col-5">
                    </div>
                </div>
            </div>
            {{-- fine sezione4 --}}



            {{-- popup lavora con noi --}}
            <div class="container-fluid p-5 slide-in-bottom me-5 mb-5 shadow glassbtn" style="width: fit-content; border: 0.1px #C8C8C9 solid; border-radius: 20px;"  id="containerrichiestarevisore">

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