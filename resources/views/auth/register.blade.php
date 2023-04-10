<x-layout>
  <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="/register.css">
  <x-slot name=title>{{Route::currentRouteName()}}</x-slot>

  @if (Session::has('lavoraConNoi'))
  <div class="w-100 d-flex justify-content-center ">
    <div class="alert alert-info text-center px-5 shadow" style="margin-top:15rem; width:fit-content; border-radius:10px; position:absolute; color:#999">{{ Session::get('lavoraConNoi') }}</div>
  </div>
  @endif

  <section class="bg-body">

  <div class="" >
    <div class="body " style="background-image:url(/imgblade/oooscillate.jpg); background-repeat:no-repeat; background-position-x:center; background-size:100%">
    <div class="veen">
      <div class="login-btn splits">
        <p style="color:#999">Already an user?</p>
        <button class="active" style="color:#999">Login</button>
      </div>
      <div class="rgstr-btn splits ">
        <p style="color:#999">Don't have an account?</p>
        <button style="color:#999">Register</button>
      </div>
      <div class="wrapper " >
        <form class="" id="login" tabindex="500" method="POST" action="{{ route('login') }}">
          @csrf
          <h3>Login</h3>
          <div class="mail">
            <input type="mail" name="email">
            <label>Mail</label>
          </div>

          <div class="passwd">
            <input type="password" name="password">
            <label>Password</label>
          </div>

          <div class="submit">
            <button  type="submit" class="dark" id=login2>Login</button>
          </div>
        </form>

        <form id="register" tabindex="502" method="POST" action="{{ route('register') }}">
          @csrf
          <h3>Register</h3>
          <div class="name ">
            <input type="text" name="name">
            <label>Nome e cognome</label>
          </div>
          <div class="mail">
            <input type="mail" name="email">
            <label>Mail</label>
          </div>

          <div class="passwd">
            <input type="password" name="password">
            <label>Password</label>
          </div>

          <div class="passwdregister">
            <input type="password" name="password_confirmation">
            <label>Conferma password</label>
          </div>

          <div class="submit">
            <button type="submit" class="dark">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
  <script src="/register.js"></script>
  <style type="text/css">
    .site-link{
      padding: 5px 15px;
      position: fixed;
      z-index: 99999;
      background: #fff;
      box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
      right: 30px;
      bottom: 30px;
      border-radius: 10px;
    }
    .site-link img{
      width: 30px;
      height: 30px;
    }
  </style>
</x-layout>