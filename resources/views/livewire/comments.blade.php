       {{-- <div style="justify-content: center;">
                <div>
                <p> If you look to others for fulfillment, you will never truly be fulfilled. </p>
                </div>
                <form wire:submit.prevent='addComment'>
                    <input type="text" wire:model.lazy="initialcomment"> <button type="submit">Add</button>
                </form> 

                @foreach($comments as $comment)
                <div style="width: 15%; height: 100px;">
                    <div style="justify-content: space-between; display: flex"><span>{{$comment['Author']}}</span> <span >{{$comment['created_at']}}</span></div><br>
                    <div>{{$comment['body']}}</div>
                </div>
                @endforeach
        </div> --}}
<div x-show="tab == 1" x-clock>
 {{-- @foreach($price1 as $amnt)
    <div>
     {{$amnt->price_models}} 
    </div>    
@endforeach     --}}
    {{-- <div>
     {{$price1}} 
    </div>  --}}
    <div class="" x-data="{ 
                activeTab: '39',
                sizePrice: {{$price1}},
                sizes: {'39': '0', '40' : '1', '41': '2', '42': '3'}, 
                price : 1200,
                current_size:39,
                ind: 0
                
                }">
            <div>
            <div>
                <span>
                {{--  --}}
                <img src="product.png" alt="img-missing" class="images">
                <div class="card1">
                   {{-- <template x-for="(size, index) in sizes"> --}}
                    <span style="margin-top: 10px; margin-left: 15px;" x-text="sizePrice[sizes[current_size]].price_models"></span>
                   {{-- <template> --}}
                    <div style="text-align: right; display: flex; gap: 14px; margin-right: 10px;">
                    <img class="bagimg" src="bag.svg" alt='img-missing'>
                    
                    <p style="cursor: pointer;margin-top: 10px;">Add Cart</p>
                    </div>
                </div>
                </span>
            </div>

            <div>
                <span>

                <div class="card2">
                    <span style="margin-top: 17px; margin-left: 0px;">Product 1 &nbsp; </span>
                </div>
            </div>
            </span>
            </div>
            <div class="card3">
            <div>
                <p>SIZE</p>
                <div class="card5">
                <template x-for="(size, index) in sizes">
                    <div class="size" x-text="index" @click= "activeTab = size; current_size=index;" :style="activeTab == size ? 'color: white; background-color: black;' : 'border-color: grey;' "> </div>
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

