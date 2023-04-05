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
        <div class="container-fluid reveal fade-bottom">
            <div class="row justify-content-center align-items-center" style="height: 40rem">
                <div class="col-12 col-lg-3 d-flex flex-column me-5 pe-3">
                    <p>BRAND NEW APP TO BLOW YOUR MIND</p>
                    <h3>We’ve made a life that will change you</h3>
                    <p>We are here to listen from you deliver exellence</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <button class="px-5 py-2 mt-2" style="width: fit-content">GET STARTED NOW</button>
                </div>
                <div class="col-12 col-lg-3 video-bg d-flex justify-content-center align-items-center">
                    <a href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img src="/imgblade/play-icon.png" alt="" ></a>
                </div>
            </div>
        </div>
        {{-- fine sezione1 --}}

        {{-- sezione2 --}}
        <div class="container-fluid bg-section2 d-flex flex-column justify-content-center">
            <section class="reveal fade-bottom">

                <div class="row mt-3" style="margin-bottom: 5rem ">
                    <div class="col-12 text-center">
                        <h2 class="fw-bold">Top Courses That are open for Students</h2>
                        <p class="pspecial">Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-2  d-flex flex-column  justify-content-center">
                        <i class="fa-solid fa-headphones-simple fa-2x" style="color: #3496EE;"></i>
                        <h4 class="my-3">Hight Performance</h3>
                        <p class="fw-light pspecial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis totam ea asperiores autem aliquid nesciunt ullam perspiciatis sint excepturi, similique quo est, amet aspernatur ut aut eius labore sunt debitis.</p>

                        <i class="fa-solid fa-mobile-screen-button fa-2x mt-5" style="color: #3496EE;"></i>
                        <h4 class="my-3">Hight Performance</h3>
                        <p class="fw-light pspecial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis totam ea asperiores autem aliquid nesciunt ullam perspiciatis sint excepturi, similique quo est, amet aspernatur ut aut eius labore sunt debitis.</p>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-center align-items-center ">
                        <img src="/imgblade/airpod.png" style="height:40rem"  alt="">
                    </div>
                    <div class="col-lg-2  d-flex flex-column justify-content-center  text-end">
                        <i class="fa-solid fa-print fa-2x" style="color: #3496EE;"></i>
                        <h4 class="my-3">Hight Performance</h3>
                        <p class="fw-light pspecial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis totam ea asperiores autem aliquid nesciunt ullam perspiciatis sint excepturi, similique quo est, amet aspernatur ut aut eius labore sunt debitis.</p>

                        <i class="fa-regular fa-eye fa-2x  mt-5" style="color: #3496EE;"></i>
                        <h4 class="my-3">Hight Performance</h3>
                        <p class="fw-light pspecial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis totam ea asperiores autem aliquid nesciunt ullam perspiciatis sint excepturi, similique quo est, amet aspernatur ut aut eius labore sunt debitis.</p>
                    </div>
                </div>

            </section>
        </div>
        {{-- fine sezione2 --}}

        {{-- sezione3 --}}
            <div class="container">
                <div class="row d-flex justify-content-center text-center my-5 py-5">
                    <div class="col-md-8 pb-40 header-text">
                        <h2 class="text-dark">Some Features that Made us Unique</h2>
                        <p class="pspecial">Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
                <div class="row mb-5 pb-5">
                    <div class="col-lg-4 col-md-6 reveal fade-left">
                        <div class="single-service">
                            <h4>Expert Technicians</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 reveal fade-bottom">
                        <div class="single-service">
                            <h4></span>Professional Service</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service reveal fade-right">
                            <h4></span>Great Support</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 reveal fade-left">
                        <div class="single-service">
                            <h4></span>Technical Skills</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 reveal fade-bottom">
                        <div class="single-service">
                            <h4></span>Highly Recomended</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 reveal fade-right">
                        <div class="single-service">
                            <h4></span>Positive Reviews</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                </div>
            </div>
        {{-- fine sezione3 --}}

        {{-- sezione4 --}}
        <div class="container-fluid yourproduct d-flex flex-column justify-content-evenly">
            <div class="row justify-content-center reveal fade-bottom">
                <div class="col-12">
                    <h2 class="text-white text-center fw-bold display-5">Your product</h2>
                </div>
            </div>
            <div class="row justify-content-center reveal fade-bottom" style="height:30rem">
                @foreach ($ads as $ad)
                <div class="col-12 col-lg-2  d-flex justify-content-between">
                        <div class="card p-5">
                            <section class="w-100 d-flex justify-content-center">
                                <img src="https://picsum.photos/200" style=" border-radius: 15px; width:10rem">
                            </section>
                            <h3 class="text-center my-5 fw-bold my-3 text-decoration-underline text-white">{{$ad->title}}</h3>
                            <p class="pspecial card-text fw-bold m-0 p-0">{{$ad->description}}</p>
                            <a href="{{route('detailAd' , compact('ad'))}}" class="pspecial">Dettagli</a>
                            <hr style="color: white" class="bg-white">
                            <p class="pspecial">Created by <span class="text-decoration-underline text-white">{{$ad->user->name}}</span></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- fine sezione4 --}}


    </main>




</x-layout>