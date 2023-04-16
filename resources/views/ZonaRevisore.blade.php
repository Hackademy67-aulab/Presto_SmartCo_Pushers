<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/imgblade/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;800;900&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
<style>
      swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</style>
    @livewireStyles
    <link rel="stylesheet" href="/detailad.css">
  </head>
  <body class="fade-in" id="body2">

    <x-navbar/>

    <div id="body2">
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
                        <button type="submit" class="btn text-white bg-primary text-emphasis-danger" style="position:absolute; top: 3.5vh; left:2vw">Annulla l'ultima operazione</button>
                    </form>
                @endif
                </div>
            </div>
        </div>
        @else
<div class = "card-wrapper h-100 d-flex flex-column" style="position: relative; top:27vh">
  <div class = "card ">
    <!-- card left -->
            <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar" navigation="true">
            @if($ad_da_revisionare->images)
                @foreach($ad_da_revisionare->images as $image)

                  <swiper-slide><img src="{{$image->getUrl(350,400)}}" alt=""></swiper-slide>


                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

                @endforeach
            @endif
          </swiper-container>


    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">{{ $ad_da_revisionare->title }}</h2>
      <a href = "#" class = "product-link mt-3">{{ $ad_da_revisionare->category->name }}</a>


      <div class = "product-price">
        <p class = "new-price">Price: <span>${{ $ad_da_revisionare->price }}</span></p>
      </div>

      <div class = "product-detail text-end mt-5 pt-5">
        <h2>about this item: </h2>
        <p>{{ $ad_da_revisionare->description }}</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque harum, voluptatibus odit sapiente voluptates quam aspernatur perferendis explicabo. Temporibus iste dolorum fuga dignissimos delectus beatae corrupti porro a voluptatem nisi.</p>

      </div>




    </div>
  </div>
</div>
<section class="accettarifiuta d-flex justify-content-evenly" style="margin-top:25rem">
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

    @if($ad_da_reRevisionare)
    @if($ad_da_reRevisionare->is_revisor_by == Auth::user()->id)
                                    <form  method="POST" class="mt-3" action="{{route('revisor.returnToRevision',['ad'=>$ad_da_reRevisionare])}}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn text-white bg-primary text-emphasis-danger" style="position:absolute; top: 3vh; left:2vw">Annulla l'ultima operazione</button>
                                    </form>
                                @endif
                                @endif
                            @endif
</div>

</div>
<script src="/detailad.js"></script>






  @livewireScripts()
</body>
</html>
