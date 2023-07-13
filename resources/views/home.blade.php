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
              
        <div class="nav-align"  style="margin-bottom: 5px;" >
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

       
    
    <!-- <img src="{{ asset('images/product.png') }}" alt="tag"> -->
    <ul class="border-solid border-2">
      <li><a class="active border-solid border-2" href="#mens">MEN'S</a></li>
      <li><a class="active border-solid border-2" href="#kids">KID'S</a></li>
      <li><a class="active border-solid border-2" href="#sportsware">SPORTSWEAR</a></li>
      <li><a class="active border-solid border-2" href="#dresses">DRESSES</a></li>
      <li><a class="active border-solid border-2" href="#home">HOME</a></li>
      <li><a class="active border-solid border-2" href="#sportsware">ACCESSORIES</a></li>
      <li><a class="active border-solid border-2" href="#sleepwear">SLEEPWEAR</a></li>
      <li><a class="active border-solid border-2" href="#womens">WOMEN'S</a></li>
      <li>
        <div class="search-container">
          <form action="">
            <input type="text" placeholder="SEARCH" name="search" style="height: 42px; margin-top: 7px;">
            <button type="submit"><img width="15" height="10" src="search.svg" alt="img-missing" class="icon"></button>
          </form>
        </div>
      </li>
      <div class="search-container">
        <form action="">
          <li><a href="#magcn" style="    width: 100 px;">CART</a></li>
          <button type="submit"><img width="15" height="10" src="cart.svg" alt="img-missing" class="icon"></button>
        </form>
      </div>
      <!-- <li><a href="#magcn">magicon</a></li> -->
    </ul>
    <br> <br>
    <div style="display:flex">
      <!-- Product 1-->
                  @livewire('comments') 
      <!-- PRODUCT 2 -->




    {{-- <div class="" x-data="{ 
              activeTab: '39',
              sizes: {'39': '1200', '40' : '1400', '41': '1600', '42': '1800'},
              price : 1200,
              current_size:39
              }">
        <div>
          <div>
            <span>
              <img src="product.png" alt="img-missing" class="images">
              <div class="card1">
                <span style="margin-top: 17px; margin-left: 20px;" x-text="sizes[current_size]"> </span>
                <div style="text-align: right; display: flex; gap: 14px;">
                  <img src="bag.svg" alt='img-missing'>
                  <p style="cursor: pointer;">Add Cart</p>
                </div>
              </div>
            </span>
          </div>

          <div>
            <span>

              <div class="card2">
                <span style="margin-top: 17px; margin-left: 0px;">Product 2 &nbsp; </span>
              </div>
          </div>
          </span>
        </div>
        <div class="card3">
          <div>
            <p>SIZE</p>
            <div class="card5">
              <template x-for="(size, index) in sizes">
                <div class="size" x-text="index" @click= "activeTab = size; current_size=index" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
              </template>
                
            </div>
          </div>
          <div>
            <p>COLOR</p>
            <div class="card5" x-data="{ choosen: 0 }">
              
              <div class="colore" style="background-color:#5F9EA0; " @click= "choosen = 1" :style="choosen == 1 ? 'border-color: black; background-color:#5F9EA0; border-width: thick' : 'border-color: grey; background-color:#5F9EA0; ' "></div>
              <div class="colore" style="background-color:#8B4513;" @click= "choosen = 2" :style="choosen == 2 ? 'border-color: black; background-color:#8B4513; border-width: thick' : 'border-color: grey; background-color:#8B4513; ' "></div>
              <div class="colore" style="background-color:#778899;" @click= "choosen = 3" :style="choosen == 3 ? 'border-color: black; background-color:#778899; border-width: thick' : 'border-color: grey; background-color:#778899; ' "></div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- PRODUCT 3 -->
     <div class="" x-data="{ 
              activeTab: '39',
              sizes: {'39': '1200', '40' : '1400', '41': '1600', '42': '1800'},
              price : 1200,
              current_size:39
              }">
        <div>
          <div>
            <span>
              <img src="product.png" alt="img-missing" class="images">
              <div class="card1">
                <span style="margin-top: 17px; margin-left: 20px;" x-text="sizes[current_size]"> </span>
                <div style="text-align: right; display: flex; gap: 14px;">
                  <img src="bag.svg" alt='img-missing'>
                  <p style="cursor: pointer;">Add Cart</p>
                </div>
              </div>
            </span>
          </div>

          <div>
            <span>

              <div class="card2">
                <span style="margin-top: 17px; margin-left: 0px;">Product 3 &nbsp; </span>
              </div>
          </div>
          </span>
        </div>
        <div class="card3">
          <div>
            <p>SIZE</p>
            <div class="card5">
              <template x-for="(size, index) in sizes">
                <div class="size" x-text="index" @click= "activeTab = size; current_size=index" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
              </template>
                
            </div>
          </div>
          <div>
            <p>COLOR</p>
            <div class="card5" x-data="{ choosen: 0 }">
              
              <div class="colore" style="background-color:#5F9EA0; " @click= "choosen = 1" :style="choosen == 1 ? 'border-color: black; background-color:#5F9EA0; border-width: thick' : 'border-color: grey; background-color:#5F9EA0; ' "></div>
              <div class="colore" style="background-color:#8B4513;" @click= "choosen = 2" :style="choosen == 2 ? 'border-color: black; background-color:#8B4513; border-width: thick' : 'border-color: grey; background-color:#8B4513; ' "></div>
              <div class="colore" style="background-color:#778899;" @click= "choosen = 3" :style="choosen == 3 ? 'border-color: black; background-color:#778899; border-width: thick' : 'border-color: grey; background-color:#778899; ' "></div>
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- NEXT SET -->

    <div style="display:flex">
        <!-- Product 4-->
      <div class="" x-data="{ 
              activeTab: '39',
              sizes: {'39': '1200', '40' : '1400', '41': '1600', '42': '1800'},
              price : 1200,
              current_size:39
              }">
        <div>
          <div>
            <span>
              <img src="product.png" alt="img-missing" class="images">
              <div class="card1">
                <span style="margin-top: 17px; margin-left: 20px;" x-text="sizes[current_size]"> </span>
                <div style="text-align: right; display: flex; gap: 14px;">
                  <img src="bag.svg" alt='img-missing'>
                  <p style="cursor: pointer;">Add Cart</p>
                </div>
              </div>
            </span>
          </div>

          <div>
            <span>

              <div class="card2">
                <span style="margin-top: 17px; margin-left: 0px;">Product 4 &nbsp; </span>
              </div>
          </div>
          </span>
        </div>
        <div class="card3">
          <div>
            <p>SIZE</p>
            <div class="card5">
              <template x-for="(size, index) in sizes">
                <div class="size" x-text="index" @click= "activeTab = size; current_size=index" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
              </template>
                
            </div>
          </div>
          <div>
            <p>COLOR</p>
            <div class="card5" x-data="{ choosen: 0 }">
              
              <div class="colore" style="background-color:#5F9EA0; " @click= "choosen = 1" :style="choosen == 1 ? 'border-color: black; background-color:#5F9EA0; border-width: thick' : 'border-color: grey; background-color:#5F9EA0; ' "></div>
              <div class="colore" style="background-color:#8B4513;" @click= "choosen = 2" :style="choosen == 2 ? 'border-color: black; background-color:#8B4513; border-width: thick' : 'border-color: grey; background-color:#8B4513; ' "></div>
              <div class="colore" style="background-color:#778899;" @click= "choosen = 3" :style="choosen == 3 ? 'border-color: black; background-color:#778899; border-width: thick' : 'border-color: grey; background-color:#778899; ' "></div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- PRODUCT 5 -->
      <div class="" x-data="{ 
              activeTab: '39',
              sizes: {'39': '1200', '40' : '1400', '41': '1600', '42': '1800'},
              price : 1200,
              current_size:39
              }">
        <div>
          <div>
            <span>
              <img src="product.png" alt="img-missing" class="images">
              <div class="card1">
                <span style="margin-top: 17px; margin-left: 20px;" x-text="sizes[current_size]"> </span>
                <div style="text-align: right; display: flex; gap: 14px;">
                  <img src="bag.svg" alt='img-missing'>
                  <p style="cursor: pointer;">Add Cart</p>
                </div>
              </div>
            </span>
          </div>

          <div>
            <span>

              <div class="card2">
                <span style="margin-top: 17px; margin-left: 0px;">Product 5 &nbsp; </span>
              </div>
          </div>
          </span>
        </div>
        <div class="card3">
          <div>
            <p>SIZE</p>
            <div class="card5">
              <template x-for="(size, index) in sizes">
                <div class="size" x-text="index" @click= "activeTab = size; current_size=index" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
              </template>
                
            </div>
          </div>
          <div>
            <p>COLOR</p>
            <div class="card5" x-data="{ choosen: 0 }">
              
              <div class="colore" style="background-color:#5F9EA0; " @click= "choosen = 1" :style="choosen == 1 ? 'border-color: black; background-color:#5F9EA0; border-width: thick' : 'border-color: grey; background-color:#5F9EA0; ' "></div>
              <div class="colore" style="background-color:#8B4513;" @click= "choosen = 2" :style="choosen == 2 ? 'border-color: black; background-color:#8B4513; border-width: thick' : 'border-color: grey; background-color:#8B4513; ' "></div>
              <div class="colore" style="background-color:#778899;" @click= "choosen = 3" :style="choosen == 3 ? 'border-color: black; background-color:#778899; border-width: thick' : 'border-color: grey; background-color:#778899; ' "></div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- PRODUCT 6 -->
      <div class="" x-data="{ 
              activeTab: '39',
              sizes: {'39': '1200', '40' : '1400', '41': '1600', '42': '1800'},
              price : 1200,
              current_size:39
              }">
        <div>
          <div>
            <span>
              <img src="product.png" alt="img-missing" class="images">
              <div class="card1">
                <span style="margin-top: 17px; margin-left: 20px;" x-text="sizes[current_size]"> </span>
                <div style="text-align: right; display: flex; gap: 14px;">
                  <img src="bag.svg" alt='img-missing'>
                  <p style="cursor: pointer;">Add Cart</p>
                </div>
              </div>
            </span>
          </div>

          <div>
            <span>

              <div class="card2">
                <span style="margin-top: 17px; margin-left: 0px;">Product 6 &nbsp; </span>
              </div>
          </div>
          </span>
        </div>
        <div class="card3">
          <div>
            <p>SIZE</p>
            <div class="card5">
              <template x-for="(size, index) in sizes">
                <div class="size" x-text="index" @click= "activeTab = size; current_size=index" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
              </template>
                
            </div>
          </div>
          <div>
            <p>COLOR</p>
            <div class="card5" x-data="{ choosen: 0 }">
              
              <div class="colore" style="background-color:#5F9EA0; " @click= "choosen = 1" :style="choosen == 1 ? 'border-color: black; background-color:#5F9EA0; border-width: thick' : 'border-color: grey; background-color:#5F9EA0; ' "></div>
              <div class="colore" style="background-color:#8B4513;" @click= "choosen = 2" :style="choosen == 2 ? 'border-color: black; background-color:#8B4513; border-width: thick' : 'border-color: grey; background-color:#8B4513; ' "></div>
              <div class="colore" style="background-color:#778899;" @click= "choosen = 3" :style="choosen == 3 ? 'border-color: black; background-color:#778899; border-width: thick' : 'border-color: grey; background-color:#778899; ' "></div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="content">
  <img src="product.png" alt="img-missing" class="images">
  <img src="product.png" alt="img-missing" class="images">
  <img src="product.png" alt="img-missing" class="images">
  </div> -->
    @livewireScripts --}}
  <p id="year">@year@</p>
  </body>
  <script>
   let year = document.getElementById('year');
   year.innerHTML = new Date();

  </html>