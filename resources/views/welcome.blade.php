<x-layout>



    <x-slot name=title>HomePage</x-slot>

    @if (session('message'))
    <div class="w-100 d-flex justify-content-center  slide-out-top">
        <div class="alert alert-info text-center px-5 shadow" style="margin-top:15rem; width:fit-content; border-radius:10px; position:absolute; color:#999">{{ session('message') }}</div>
    </div>
    @endif


    {{-- header --}}
    <header class="bgheader d-flex flex-column align-items-center justify-content- text-white">
        <section class="title text-center d-flex align-items-center justify-content-center  h-100" >
            <h1 class="mt-5 w- text-center mb-5 pb-5"  >{{__('ui.welcome')}}</h1>
        </section>
    </header>
    {{-- fine header --}}

    <main>

        {{-- sezione1 --}}
        <div class="container  p-5 my-2 my-md-5 reveal fade-bottom" style="height: fit-content;">
            <div class="row  p-5 shadow-lg">
                <div class="toglibordo col-md-3 col-12 pb-md-0 pb-4 mb-5 mb-md-0 text-center d-flex flex-column justify-content-center align-items-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-truck-fast fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Free Delivery</h5>
                    <p style="color:#777777" class="m-0 p-0">Free Shipping on all order</p>
                </div>
                <div class="toglibordo col-md-3 col-12 mb-5 mb-md-0 pb-md-0 pb-4 text-center d-flex flex-column justify-content-center align-items-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-clock-rotate-left fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Return Policy</h5>
                    <p style="color:#777777" class="m-0 p-0">Security in the return of orders</p>
                </div>
                <div class="toglibordo col-md-3 col-12 mb-5 mb-md-0 pb-md-0 pb-4 text-center d-flex flex-column justify-content-center align-items-center" style="border-right:1px solid #dfdfdf">
                    <i class="fa-solid fa-headset fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">24/7 Support</h5>
                    <p style="color:#777777" class="m-0 p-0">Full assistance</p>
                </div>
                <div class="toglibordo2 col-md-3 col-12 mb-md-0 text-center d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-solid fa-money-check fa-2x mb-3" style="color: #000000;"></i>
                    <h5 class="m-0 p-0" style="font-size: 1.2rem">Secure Payment</h5>
                    <p style="color:#777777" class="m-0 p-0">Transaction security</p>
                </div>
            </div>
        </div>

        {{-- fine sezione1 --}}

        {{-- sezione2 --}}
        <section class="d-flex align-items-center flex-column mt-2 mt-md-5 mb-5 reveal fade-bottom">
            <h1 class="h1sezione2" style="margin-top:5.5rem">Latest product</h1>
            <p style="color:#999">Drag the cards to move them</p>
        </section>

        {{-- carousel pc--}}
        <div class="sezion2productpc container bg-white reveal fade-bottom">
            <div class="card-carousel bg-white d-flex justify-content-center">
                @foreach ($ads as $ad)
                <div class="card">
                    <div class="image-container w-100" style="height: 85%;">
                        @if($ad->images)
                        <img src="{{$ad->images->first()->getUrl(350,400)}}" alt="">
                        @else
                        <img src="https://picsum.photos/200" alt="">
                        @endif
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
        {{-- fine carousell pc--}}
        {{-- carousell sezione2 smartphone --}}
        <section class="w-100 d-flex flex-column align-items-center carousellsezione2smartphone">
        @foreach ($ads as $ad)
                <div class="card mb-5" >
                    <div class="image-container w-100 d-flex justify-content-center" style="height: 85%;">
                        @if($ad->images)
                        <img class="imgproductsm" src="{{$ad->images->first()->getUrl(350,400)}}" alt="">
                        @else
                        <img src="https://picsum.photos/200" alt="">
                        @endif
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
                    <section class="d-flex align-items-end justify-content-center" style="height: 15%"><p class="m-0 p-3">{{ $ad->title }}</p></section>
                </div>
                @endforeach
            </section>
        {{-- carousell sezione2 smartphone --}}

        {{-- button view all --}}
        <section class="d-flex justify-content-center mb-5 mb-md-5 mt-md-5 mt-0 pt-3 reveal fade-bottom">
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

        {{-- sezione3 categories pc--}}
        <div class="categoriespc swiper-container2 reveal fade-bottom" style="margin-top: 13rem">
            <div class="swiper-wrapper">
              <div class="swiper-slide2">
                <div class="container-general2 w-100">
                  <div class="gallery-wrap wrap-effect-1 ">
                    @foreach($categories as $category)
                        <div class="carouselimg item d-flex align-items-center justify-content-center"  style="background: linear-gradient(90deg, rgba(37,94,224,0) 0%, rgba(0, 0, 0, 0.863) 0%), url('{{ Storage::url("{$category->img}") }}');background-size: cover; background-repeat: no-repeat; background-position:center; ">
                            <ul>
                                <li style="list-style: none;"><a class="acarousell text-white text-uppercase text-center" href="{{ route('categoryAds', compact('category')) }}" style="text-decoration:none;">{{ $category->name }}</a></li>
                              </ul>


                        </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{-- fine sezione3 categories pc--}}
        {{-- sezione3 categories smartphone--}}
        <div class="container-fluid categoriesmartphone">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-12">
                    <div class="carouselimg2 item d-flex align-items-center justify-content-center"  style="background: linear-gradient(90deg, rgba(37,94,224,0) 0%, rgba(0, 0, 0, 0.863) 0%), url('{{ Storage::url("{$category->img}") }}');background-size: cover; background-repeat: no-repeat; background-position:center; ">
                        <ul>
                            <li><a class="acarousell text-white text-uppercase" href="{{ route('categoryAds', compact('category')) }}" style="text-decoration:none;">{{ $category->name }}</a></li>
                        </ul>


                    </div>
                </div>
                @endforeach
                </div>
        </div>
        {{-- fine sezione3 categories smartphone--}}

            @if (Auth::check() && Auth::user()->is_revisor == 1)
            {{-- popup lavora con noi --}}
            <div class="container-fluid p-5 slide-in-bottom me-5 mb-5 shadow glassbtn" style="visibility:hidden; width: fit-content; border: 0.1px #C8C8C9 solid; border-radius: 20px;"  id="containerrichiestarevisore">

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
            @else
            <div class="container-fluid p-5 slide-in-bottom me-5 mb-5 shadow glassbtn" style=" width: fit-content; border: 0.1px #C8C8C9 solid; border-radius: 20px;"  id="containerrichiestarevisore">

                <p class="m-0 p-0 text-center">Ei, vuoi entrare a far parte <br> del nostro team?</p>
                <hr class="my-5">
                <p class="mb-5  mx-0 p-0 text-center">Clicca qui sotto </p>

                <a href="javascript:;" class="m-0 p-0" style="text-decoration: none; color:#000000">
                    <div class="container-fluid d-flex justify-content-center " id="bottonerichiestarevisore">
                        <button class="expand" id="btn">
                            Invia la richiesta
                            <span class="expand-icon expand-hover">
                                <svg class="first" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 32 32" version="1.1">
                                    <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z" />
                                </svg>
                                <span class="loader"></span>
                                <svg class="second" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 5L8 15l-5-4" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </a>
            </div>
            @endif


            <div class="container-fluid my-5 py-5 feedbacksm">
                <div class="row">
                    <div class="col-12 text-center ">
                        <h3 class="fw-bold">Some Features that Made us Unique</h3>
                        <p style="color:#777777 !important">Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class=" col-2 feedback text-center d-flex flex-column align-items-center" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">Elia Mattini</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                    <div class="col-2  feedback text-center d-flex flex-column align-items-center mx-5" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">William Motta</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                    <div class="col-2  feedback text-center d-flex flex-column align-items-center" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">Alessio Pepe</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row justify-content-center mt-5" >
                    <div class="col-2  feedback text-center d-flex flex-column align-items-center" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">Pierpaolo Cassano</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                    <div class="col-2  feedback text-center d-flex flex-column align-items-center mx-5" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">Giacinto Pascazio</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                    <div class="col-2  feedback text-center d-flex flex-column align-items-center" style="background: #F9F9FF; border-radius: 10px">
                        <section class="w-75 p-4 ">
                            <h5 class="fw-bolder mb-4">Walter Terlizzi</h5>
                             <p class="m-0 p-0" style="color:#777777 !important">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, eius. Accusantium vero rerum laborum architecto quod. </p>
                             <div class="star mt-3">
                                <span class="fa fa-star checked" style="color:#FFA500"></span>
                                <span class="fa fa-star checked"style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#FFA500"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                                <span class="fa fa-star" style="color:#777777"></span>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        			<!-- start footer Area -->
			<footer class="footer-area section-gap mt-md-0 mt-5 ">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6 class="text-white">About Us</h6>
								<p style="color:#777777">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p style="color:#777777">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem tempore voluptatem similique animi blanditiis et sint dolor sunt doloremque quis dolore, temporibus ullam tempora officia maiores ipsa veniam provident!
								</p>

							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6 class="text-white">Newsletter</h6>
								<p style="color:#777777">Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6 class="text-white">Follow Us</h6>
								<p style="color:#777777">Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa-brands fa-facebook fa-2x" style="color: #ffffff;"></i></a>
									<a href="#"><i class="fa-brands fa-google-plus-g fa-2x mx-3" style="color: #ffffff;"></i></a>
									<a href="#"><i class="fa-brands fa-twitter fa-2x me-3" style="color: #ffffff;"></i></a>
									<a href="#"><i class="fa-brands fa-linkedin-in fa-2x" style="color: #ffffff;"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

        @auth
        <script type="text/javascript">
            const btn = document.querySelector("#btn");
            const btnText = document.querySelector("#btnText");

            btn.onclick = () => {
                btnText.innerHTML = "Grazie!";
                btn.classList.add("grazie");
            };

            document.querySelector("button.expand").addEventListener(
            "click",
            function (e) {
                e.preventDefault();
                e.stopPropagation();
                const button = e.currentTarget;
                button.classList.add("loading");
                button.disabled = true;
                setTimeout(() => {
                    button.classList.add("loaded");
                    setTimeout(() => {
                        button.classList.add("finished");
                        setTimeout(() => {
                            button.classList.remove("finished");
                            button.classList.remove("loaded");
                            button.classList.remove("loading");
                            button.disabled = false;
                        }, 1500);
                    }, 700);
                }, 1500);
            },
            false
            );

        </script>
        @endauth

        {{-- fine popup Lavora con noi --}}


        <style>
            button.expand {
	--button-height: 48px;
	overflow: hidden;
	outline: none;
	background-color: #1f2024;
	border-radius: 10px;
	padding: 12px 25px;
	font-size: 1.1em;
	border: none;
	color: white;
	font-family: "Nunito", sans-serif;
	cursor: pointer;
	position: relative;
	transition: padding 0.3s;
}

.expand-icon {
	--icon-size: 10px;
	height: 100%;
	position: absolute;
	top: 0;
	right: 0;
	height: var(--button-height);
	width: var(--button-height);
	border-left: 1px solid #eee;
	display: flex;
	justify-content: center;
	align-items: center;
	transform: translateX(calc(var(--button-height) + 1px));
	transition: transform 0.3s;
}

.expand-icon > svg {
	height: var(--icon-size);
	width: var(--icon-size);
	transform: scale(1.5);
	transition: transform 0.3s;
}

.expand-icon > svg.second {
	display: none;
	transform: scale(0) translateY(50px);
	transition: transform 0.3s;
}

button.expand:hover,
button.expand.loading {
	padding-right: calc(25px + var(--button-height));
}

button.expand:hover > .expand-icon,
button.expand.loading > .expand-icon {
	transform: translateX(0);
	transition: transform 0.3s 0.05s;
}

button.expand.loading > .expand-icon > svg {
	transform: scale(0);
}

@keyframes rotate {
	0% {
		transform: scale(0.3) rotateZ(0deg);
	}
	100% {
		transform: scale(0.3) rotateZ(360deg);
	}
}

.loader {
	--loader-size: 52px;
	height: var(--loader-size);
	width: var(--loader-size);
	border: 4px solid white;
	border-left-color: transparent;
	border-right-color: transparent;
	background-color: transparent;
	border-radius: 50%;
	animation: rotate 1.5s linear infinite;
	position: absolute;
	right: 0;
	opacity: 0;
	pointer-events: none;
	transition: opacity 1s 0.3s;
}

button.expand.loading > span > span.loader {
	opacity: 1;
}

button.expand.loaded > span > span.loader {
	opacity: 0 !important;
}

button.expand.loaded > .expand-icon > svg.first {
	display: none;
}

button.expand.loaded > .expand-icon > svg.second {
	display: block;
}

button.expand.finished > .expand-icon > svg.second {
	transform: scale(1.5) translateY(0px);
}
        </style>

    </x-layout>