{{-- <div id="body2">
  <section class="p-5 d-flex justify-content-center " style="font-size:1.2rem; margin-top:5rem"><a class="text-secondary" style="text-decoration: none" href="{{ route('homePage') }}">Home</a><span class="mx-3 text-secondary">></span><p class="m-0 p-0 text-dark">Tutti gli annunci</p></section>
<div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
          <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
          <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
          <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
        </div>
      </div>
      <div class = "img-select">
        <div class = "img-item">
          <a href = "#" data-id = "1">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "2">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "4">
            <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image">
          </a>
        </div>
      </div>
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">nike shoes</h2>
      <a href = "#" class = "product-link">visit nike store</a>
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class = "product-price">
        <p class = "last-price">Old Price: <span>$257.00</span></p>
        <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
      </div>

      <div class = "product-detail">
        <h2>about this item: </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
        <ul>
          <li>Color: <span>Black</span></li>
          <li>Available: <span>in stock</span></li>
          <li>Category: <span>Shoes</span></li>
          <li>Shipping Area: <span>All over the world</span></li>
          <li>Shipping Fee: <span>Free</span></li>
        </ul>
      </div>

      <div class = "purchase-info">
        <input type = "number" min = "0" value = "1">
        <button type = "button" class = "btn">
          Add to Cart <i class = "fas fa-shopping-cart"></i>
        </button>
        <button type = "button" class = "btn">Compare</button>
      </div>

      <div class = "social-links">
        <p>Share At: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-twitter"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-pinterest"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<script src="/detailad.js"></script> --}}


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
    @livewireStyles
    <link rel="stylesheet" href="/detailad.css">
  </head>
  <body class="fade-in" id="body2">

    <x-navbar/>

    <div id="body2" style="height: 350vh">
  <section class="p-5 d-flex justify-content-center " style="font-size:1.2rem; margin-top:5rem"><a class="text-secondary" style="text-decoration: none" href="{{ route('homePage') }}">Home</a><span class="mx-3 text-secondary">></span><a class="text-secondary" style="text-decoration: none" href="{{ route('showad') }}">Tutti gli articoli</a><span class="mx-3 text-secondary">></span><p class="m-0 p-0 text-dark">{{ $ad->title }}</p></section>
<div class = "card-wrapper h-100" style="position: relative; top:7vh">
  <div class = "card " style="height:fit-content">
    <!-- card left -->
    <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar" navigation="true">
      @if($ad->images)
          @foreach($ad->images as $image)

            <swiper-slide><img src="{{$image->getUrl(350,400)}}" alt="" ></swiper-slide>


          <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

          @endforeach
      @endif
    </swiper-container>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">{{ $ad->title }}</h2>
      <a href = "#" class = "product-link">{{ $ad->category->name }}</a>
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class = "product-price">
        <p class = "new-price">Price: <span>${{ $ad->price }}</span></p>
      </div>

      <div class = "product-detail">
        <h2>about this item: </h2>
        <p>{{ $ad->description }}</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque harum, voluptatibus odit sapiente voluptates quam aspernatur perferendis explicabo. Temporibus iste dolorum fuga dignissimos delectus beatae corrupti porro a voluptatem nisi.</p>
        <ul>
          <li>Color: <span>/</span></li>
          <li>Available: <span>Available</span></li>
          <li>Category: <span>{{ $ad->category->name }}</span></li>
          <li>Shipping Area: <span>All over the world</span></li>
          <li>Shipping Fee: <span>Free</span></li>
        </ul>
      </div>

      <div class = "purchase-info">
        <button type = "button" class = "btn">
          Add to Cart <i class = "fas fa-shopping-cart"></i>
        </button>
      </div>

      <div class = "social-links">
        <p class="m-0 p-0">Share At: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-twitter"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-pinterest"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<script src="/detailad.js"></script>






  @livewireScripts()
</body>
</html>
