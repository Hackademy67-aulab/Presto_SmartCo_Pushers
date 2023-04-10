<nav class="navbar navbar-expand-lg d-flex justify-content-center slide-in-top fixed-top bg-dark">
  <div class="container-fluid navbarwidth">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav d-flex justify-content-center " style="width: fit-content">



        <li class="nav-item">
          <a class=" p-3 nav-link active text-white" style="font-size:1.5rem" aria-current="page" href="{{route('homePage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class=" p-3 nav-link text-white" style="font-size:1.5rem" href="{{ route('showad') }}">Tutti gli annunci</a>
        </li>



        <li class="nav-item">
          <a class=" p-3 nav-link text-white" style="font-size:1.5rem" href="{{route('createAds')}}">Aggiungi annuncio</a>
        </li>


        @auth
        @if (Auth::user()->is_revisor == 1)
          <li class="nav-item">
            <a style=" font-size:1.5rem" class=" p-3 nav-link text-white  {{(App\Models\Ad::contaAnnunciDaRevisionare()) ? 'vibrate-1' : ''}}" href="{{ route('zona_revisore')}}">Zona revisore <span class="p-0 alert alert-danger" style="position: relative; bottom:15px; display: inline; font-size:13px">{{App\Models\Ad::contaAnnunciDaRevisionare()}}</span></a>
          </li>

        @endif
        @endauth


        <li class="nav-item dropdown">
          @auth
          <a style="font-size:1.5rem" class="  p-3 nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao {{ Auth::user()->name }}</a>
          <ul class="dropdown-menu text-white" >
            <li><a style=" p-3 font-size:1.5rem" class="dropdown-item" href="#" onclick="event.preventDefault();
              document.querySelector('#form-logout').submit();">Logout</a></li>
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>

          @else
          <a style="  font-size:1.5rem" class="p-3 nav-link text-white" href="{{ route('register') }}" >Ciao, accedi</a>


            @endguest

          </ul>

        </li>

        <form class=" p-3 d-flex" style="width: fit-content" role="search" method="GET" action="{{ route('searchAd') }}">
          <input  name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </ul>
    </div>
  </div>
</nav>