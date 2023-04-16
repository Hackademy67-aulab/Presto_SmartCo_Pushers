
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

    @livewireStyles

  </head>
  <body class="fade-in" id="body2">

    <x-navbar/>


<div class=" showadbg">
  <section class="p-5 d-flex justify-content-center " style="font-size:1.2rem; margin-top:5rem;"><a class="text-secondary" style="text-decoration: none" href="{{ route('homePage') }}">Home</a><span class="mx-3 text-secondary">></span><p class="m-0 p-0 text-dark">{{ $category->name }}</p></section>

<section class="d-flex justify-content-center">
      <section class="container bg d-flex  flex-wrap d-flex justify-content-center align-items-center">
    @if($category->ads)
    @foreach ($category->ads as $ad)
    <div class="card2">
        <div class="image-container w-100" style="height: 85%;">
          @if($ad->images)
          <img src="{{$ad->images->first()->getUrl(350,400)}}" class="image w-100" style="height:25rem">
          @endif
        <div class="card-body">
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
        <p class="m-0 p-3 text-center text-secondary">{{ $ad->title }}</p>
        </div>
      </div>
      </div>

      @endforeach
      @else

                <h2 class="text-center display-1">Non sono presenti annunci</h1>

    @endif



    </section>
    </section>

</div>






  @livewireScripts()
</body>
</html>
