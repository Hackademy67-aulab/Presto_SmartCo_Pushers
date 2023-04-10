<x-layout>
  <link rel="stylesheet" href="/detailad.css">
  <div class="container">
  <a href="{{ route('homePage') }}" style="text-decoration: none">HOME</a>
  <a href="{{ route('showad') }}" style="text-decoration: none">TUTTI GLI ANNUNCI</a>
  <a href="" style="text-decoration: none">{{ $ad->title }}</a>
  </div>

  <div class = "card-wrapper d-flex flex-column">
    <h1 class="mb-5">Product details</h1>
    <div class = "card w-100" style="border: 0px; border-radius: 0px">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "https://picsum.photos/200" alt = "shoe image">
            <img src = "https://picsum.photos/201" alt = "shoe image">
            <img src = "https://picsum.photos/202" alt = "shoe image">
            <img src = "https://picsum.photos/203" alt = "shoe image">
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "https://picsum.photos/200" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "https://picsum.photos/201" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "https://picsum.photos/202" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "https://picsum.photos/203" alt = "shoe image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">{{ $ad->title }}</h2>
        <a href = "#" class = "product-link">{{ $ad->category->name }}</a>


        <div class = "product-price">
          <p class = "new-price mb-5">Price: <span>${{ $ad->price }}</span></p>
        </div>

        <div class = "product-detail">
          <h2>about this item: </h2>
          <p>{{ $ad->description }}</p>

          <ul>
            <li>Available: <span>in stock</span></li>
            <li>Category: <span>{{ $ad->category->name }}</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul>
        </div>

        <div class = "purchase-info">
          <button type = "button" class = "btn">
            Add to Cart <i class = "fas fa-shopping-cart"></i>
          </button>
        </div>

        <div class = "social-links">
          <p class="m-0 p-0 me-3">Share At: </p>
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
  <script src="/detailad.js"></script>
</x-layout>