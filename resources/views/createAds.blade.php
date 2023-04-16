<x-layout>
<div>
<div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="row">


        <div class="col-12 ">
            <section class="p-5 d-flex justify-content-center " style="font-size:1.2rem; margin-top:5rem"><a class="text-secondary" style="text-decoration: none" href="{{ route('homePage') }}">Home</a><span class="mx-3 text-secondary">></span><p class="m-0 p-0 text-dark">Inserisci annuncio</p></section>
        <livewire:create-ad-form />


        </div>
    </div>
</div>
</div>
</x-layout>
