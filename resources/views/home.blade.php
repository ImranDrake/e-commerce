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
        <a href='/'><img src="logo.svg" alt="" class="icon" ></a>
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
<section >
    <!-- <img src="{{ asset('images/product.png') }}" alt="tag"> -->
    <hr>
      {{-- @livewire('categorys') --}}
    <hr>
    <div style="display:flex">
      <!-- PRODUCT Mens (comments) -> (mens) --> 
                  @livewire('comments')
      <!-- PRODUCT Kids -->
                  {{-- @livewire('kids') --}}
      <!-- PRODUCT SportsWear -->
                  {{-- @livewire('sports-wear') --}}
    </div>
    
    <div style="display:flex">
      <!-- PRODUCT HomeAssceories -->
                  {{-- @livewire('home-accessories') --}}
      <!-- PRODUCT Womens -->
                  {{-- @livewire('womens') --}}
    </div>

</section>

   @livewireScripts
   <br><br><br>
   <hr>
  <p style="text-align: end;" id="year">@year@</p>
  </body>
  <script>
   let year = document.getElementById('year');
   year.innerHTML = new Date();
   </script>

  </html>