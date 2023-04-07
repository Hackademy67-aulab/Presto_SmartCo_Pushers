  <nav class="navbar navbar-expand-lg d-flex justify-content-center slide-in-top fixed-top">
    <div class="container-fluid navbarwidth">
      <img src="/imgblade/logoscritta.png" alt="logo" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav w-100 d-flex justify-content-end ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('homePage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Features</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            Categorie
            </a>

            <ul class="dropdown-menu text-white" >
            @foreach($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryAds', compact('category'))}}">{{$category->name}}</a></li>
            @endforeach
            </ul>

          </li>
          @auth

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('createAds')}}">Aggiungi annuncio</a>
          </li>



          @endauth
          @auth
          @if (Auth::user()->is_revisor == 1)
            <li class="nav-item">
              <a class="nav-link text-white  {{(App\Models\Ad::contaAnnunciDaRevisionare()) ? 'vibrate-1' : ''}}" href="{{ route('zona_revisore')}}">Zona revisore <span class="p-0 alert alert-danger" style="position: relative; bottom:15px; display: inline; font-size:13px">{{App\Models\Ad::contaAnnunciDaRevisionare()}}</span></a>
            </li>

          @endif
          @endauth
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('becomeRevisor')}}">Lavora con noi</a>
          </li>

          <li class="nav-item dropdown">
            @auth
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao {{ Auth::user()->name }}</a>
            <ul class="dropdown-menu text-white" >
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();
                document.querySelector('#form-logout').submit();">Logout</a></li>
                <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>

            @else
            <a class="nav-link text-white" href="{{ route('register') }}" >Ciao, accedi</a>


              @endguest

            </ul>

          </li>

        </ul>
      </div>
    </div>
  </nav>