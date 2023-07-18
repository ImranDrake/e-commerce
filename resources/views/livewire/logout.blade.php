<div>
     <button style="background-color: grey; cursor: pointer; height:35px; width:130px;"> Hello {{auth()->user()['name']}} ! </button>
     <button style="background-color: skyblue; cursor: pointer; height:35px; width:130px;" wire:click='logout'> Logout </button>
</div>
