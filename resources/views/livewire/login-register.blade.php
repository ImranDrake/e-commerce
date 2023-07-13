 {{-- REGISTRATION --}}

    <div x-show="open" class="fixed flex justify-center times-center left-0 right-0 bottom-0 top-0 bg-black/75 z-50 isolate" x-transition x-cloak>
      <div class="w-1/2 bg-white-500">
        <form action="" wire:submit.prevent='submit'>
          <div class="container " @click.outside="open = false" >
            <h1 class="px-4 py-2 text-lg font-semibold gb-grey-100">Register</h1>
        
            <hr>
          <div class="p-4">
            <label for="name"><b>Username</b></label><br>
            <input type="text" class="inputreg" placeholder="Enter Name" name="name" id="name" wire:model="form.name"><br>
             @error('form.name')
            <span class='text-red-500 text-xs'>{{$message}}</span>
            @enderror
            <label for="email"><b>Email</b></label><br>
            <input type="text" class="inputreg" placeholder="Enter Email" name="emailid" id="emailid" wire:model="form.emailid"><br>
            @error('form.emailid')
            <span class='text-red-500 text-xs'>{{$message}}</span>
            @enderror
            <label for="psw"><b>Password</b></label>
            <input type="password" class="inputreg" placeholder="Enter Password" name="psw" id="psw" wire:model="form.password"><br>
            @error('form.password')
            <span class='text-red-500 text-xs'>{{$message}}</span>
            @enderror

            <label for="pswrep"><b>Confirm Password</b></label>
            <input type="password" class="inputreg" placeholder="Repeat Password" name="pswrep" id="pswrep" wire:model="form.confirmpassword">
            <hr>

            <div style="justify-content: space-between; display: flex">
                <button type="submit"  style="background-color: #008CBA; cursor: pointer; height:35px; width:130px;">Register</button>
                <button type="" class="registerbtn bg-grey-300 rounded" style="background-color:slategrey" @click="open = false">Cancel</button>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
      
       