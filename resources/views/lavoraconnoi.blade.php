<x-layout>
    <h1 class="text-center mt-5 pt-5">Lavora Con Noi</h1>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 shadow ">
                {{-- inzio form  --}}
                <form>
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                {{-- fine form  --}}
            </div>
        </div>
    </div>
</x-layout>