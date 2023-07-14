  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
      <script src="https://cdn.tailwindcss.com"></script> 
</head>


    <title>Fasion Store</title>
    @livewireStyles
    <!-- Fonts -->

    <!-- Styles -->
    <style>
     
    </style>
  </head>

  <body>
    <livewire:scripts />
<div class="body">
  <div x-data='{
            open: false,
                lgopen: false
              }'>
       {{-- Header Div--}}
      <div class="nav-align mt-50"  style="margin: 10px;" >
        <img src="logo.svg" alt="" class="icon">
        <h2 class="w-50 py-2 ml-20"> FAITHFUL <strong>BRAND</strong> </h2>
        
        @guest
        <div class=justify-content-end>
        <button style="background-color: #008CBA; cursor: pointer; height:35px; width:130px;" @click="lgopen = !lgopen"> Login </button>
        <button style="background-color: #008CBA; cursor: pointer; height:35px; width:130px;" @click="open = !open"> Register </button>
       </div>
        @endguest
        

        @auth
          @livewire('logout')
        @endauth
        
      </div>

       <div>
        @livewire('login-register')
        @livewire('loginpage')
      </div>

        
        
      </div>
  </div>

       
    {{-- TABS DIV --}}
<section x-data='{
            tab: 0
              }' >
    <!-- <img src="{{ asset('images/product.png') }}" alt="tag"> -->
    <ul class="border-solid border-2">
      <li><a @click="tab=1" class="active border-solid border-2 cursor-pointer bg-grey-400">MEN'S</a></li>
      <li><a @click="tab=2" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">KID'S</a></li>
      <li><a @click="tab=3" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">SPORTSWEAR</a></li>
      <li><a @click="" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">DRESSES</a></li>
      <li><a @click="tab=4" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">HOME</a></li>
      <li><a @click="" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">ACCESSORIES</a></li>
      <li><a @click="" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">SLEEPWEAR</a></li>
      <li><a @click="tab=5" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">WOMEN'S</a></li>
      <li>
        <div class="search-container">
          <form action="">
            <input type="text" placeholder="SEARCH" name="search" style="height: 42px; margin-top: 7px;">
            <button type="submit"><img width="15" height="10" src="search.svg" alt="img-missing" class="icon"></button>
          </form>
        </div>
      </li>
      <li>
      <div class="search-container">
        <form action="">
          <li><a href="#magcn" style="    width: 100 px;">CART</a></li>
          <button type="submit"><img width="15" height="10" src="cart.svg" alt="img-missing" class="icon"></button>
        </form>
      </div>
      </li>
      <!-- <li><a href="#magcn">magicon</a></li> -->
    </ul>
    <br> <br>


    <div style="display:flex">
      <!-- PRODUCT Mens (comments) -> (mens) --> 
                  @livewire('comments')
      <!-- PRODUCT Kids -->
                  @livewire('kids')
      <!-- PRODUCT SportsWear -->
                  @livewire('sports-wear')
    </div>
    
    <div style="display:flex">
      <!-- PRODUCT HomeAssceories -->
                  @livewire('home-accessories')
      <!-- PRODUCT Womens -->
                  @livewire('womens')
    </div>

</section>

   {{-- @livewireScripts --}}
   <br><br><br>
   <hr>
  <p id="year">@year@</p>
  </body>
  <script>
   let year = document.getElementById('year');
   year.innerHTML = new Date();

  </html>