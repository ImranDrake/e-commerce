<div> 
      <section x-data='{
            cat: 0
              }' >
    <!-- <img src="{{ asset('images/product.png') }}" alt="tag"> -->
    <ul class="border-solid ">
    @foreach($categorys as $category) 
      <li><a @click= "cat = {{$category->id}} ;" :style=" cat == {{$category->id}} ? 'color: white; background-color: black;' : 'border-color: grey;'" class="cursor-pointer border-solid border-2 bg-grey-200 hover:bg-grey-300">{{$category->product_category}}</a></li>
    @endforeach
    <li>
        <div class="search-container">
          <form wire.submit.prevent="">
            <input type="text" placeholder="SEARCH" name="search" style="height: 42px; margin-top: 7px;" wire:model="search"> 
            <button type="submit"><img width="15" height="10" src="search.svg" alt="img-missing" class="icon"></button>
          </form>
        </div>
        {{$search}}
       
      </li>
      <li>
      <div class="search-container">
        <form action="">
          <li><a href="#magcn" style="width: 100 px;">CART <sup>({{$cartItem}})</sup></a></li>
          <button type="submit"><img width="15" height="10" src="cart.svg" alt="img-missing" class="icon"></button>
        </form>
      </div>
      </li>
      <!-- <li><a href="#magcn">magicon</a></li> -->
    </ul>
    <br> <br>

    

<div  x-clock class="grid grid-cols-3">

 @foreach($products as $item)

    <div class="" x-data="{ 
                sizePrice: {{$price1}},
                current_size:39,
                ind: 0,
                size:1,
                color:1,
                price:' ',
                change(){
                fetch(`http://localhost:8000/a/{{$item->id}}/${this.color}/${this.size}`)
                .then(data => data.json())
                .then(data => {
                    this.price=data['0']['price_models']
                        })
                    }
                }" 
                x-effect="change">
                
            <div>
            <div>
                <span>
                {{--  --}}
                <img src="{{$item->image}}" alt="img-missing" class="images">
                <div class="card1">
                   {{-- <template x-for="(size, index) in sizes"> --}}
                    <span style="margin-top: 10px; margin-left: 15px;" x-text=" 'Rs. ' + price "></span>
                   {{-- <template> --}}
                    <div style="text-align: right; display: flex; gap: 14px; margin-right: 10px;">
                    <img class="bagimg" src="bag.svg" alt='img-missing'>
                    
                    <p style="cursor: pointer;margin-top: 10px;" wire:click.prevent='addToCart({{$item->id}})'>Add Cart</p>
                    </div>
                </div>
                </span>
            </div>

            <div>
                <span>

                <div class="card2">
                 {{-- @foreach($products as $product)  --}}
                 {{-- @dd($product->product) --}}
                    <span style="margin-top: 12px; margin-left: 0px;">{{$item->product}} &nbsp; </span>
                    {{-- @endforeach  --}}
                </div>
            </div>
            </span>
            </div>
            <div class="card3">
            <div>
                <p>SIZE</p>
                <div class="card5">

                    @foreach($sizes as $size) 
                     <div class="size"  @click= "size = {{$size->id}} ;"  @click= "size = {{$size->id}} ;" :style=" size == {{$size->id}} ? 'color: white; background-color: black;' : 'border-color: grey;'">{{$size->size}}</div>
                    @endforeach 
                </div>
            </div>
           
            <div>
                <p>COLOR</p>
                <div class="card5">
        @foreach($colors as $color) 
                
                <div name='color' class="colore" style="background-color:{{$color->color}};" @click= "color = {{$color->id}}" :style="color == {{$color->id}} ? 'border-color: black; background-color:{{$color->color}}; border-width: thick' : 'border-color: grey; background-color:{{$color->color}};'">
                </div>
                
        {{-- {{$color->color}} --}}
        @endforeach
                
                </div>
            </div>
            </div>
        </div>
    @endforeach
    
</div>
</div>

