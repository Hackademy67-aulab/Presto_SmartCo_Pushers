<x-layout>

    <h1 class="text-center mt-5">Registrati</h1>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

     <form method="POST" action="{{route('register')}}">

        @csrf

        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Nome Cognome</label>
            <input name="name" type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp">
          </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Conferma password</label>
            <input name="password_confirmation"  type="password" class="form-control" id="exampleInputPassword1">
          </div>
  

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


            </div>
        </div>
    </div>

    
</x-layout>