<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <section x-data='{
            cat: 0
              }' >
    <!-- <img src="{{ asset('images/product.png') }}" alt="tag"> -->
    @foreach($categorys as $category) 
    <ul class="border-solid ">
      <li><a @click= "cat = {{$category->id}} ;" :style=" cat == {{$category->id}} ? 'color: white; background-color: black;' : 'border-color: grey;'" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">{{$category->product_category}}</a></li>
    @endforeach
    <li>
        <div class="search-container">
          <form action="">
            <input type="text" placeholder="SEARCH" name="search" style="height: 42px; margin-top: 7px;" wire:model="search"> 
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
</div>
