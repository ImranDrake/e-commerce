<div>
   {{-- Login --}}

      <div x-show="lgopen"
                class="fixed flex justify-center times-center left-0 right-0 bottom-0 top-0  bg-black/75" x-transition
                x-cloak>
                <div class="w-1/2 bg-white-500">
                    <form action="" wire:submit.prevent='login'>
                        <div class="container " @click.outside="lgopen = false">
                            <h1 class="px-4 py-2 text-lg font-semibold gb-grey-100">Login</h1>
                              <div class="text-red-500 bg-grey-300">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success" x-transition>
                                            {{ session('message') }}
                                        </div>
                                    @endif
                              </div>

                            <hr>
                            <div class="p-4">
                                <label for="email"><b>Email</b></label><br>
                                <input type="email" class="inputreg" placeholder="Enter Email" name="email" id="emaild"
                                    wire:model="loginform.emailid">
                                    @error('loginform.emailid')
                                    <span class='text-red-500 text-xs'>{{$message}}</span>
                                    @enderror

                                <label for="psw"><b>Password</b></label>
                                <input type="password" class="inputreg" placeholder="Enter Password" name="pswd"
                                    id="pswd" wire:model="loginform.password" >
                                    @error('loginform.password')
                                    <span class='text-red-500 text-xs'>{{$message}}</span>
                                    @enderror
                                <hr>

                                <div style="justify-content: space-between; display: flex">
                                    <button type="submit"
                                        style="background-color: #008CBA; cursor: pointer; height:35px; width:130px;">Login</button>
                                    <button type="" class="registerbtn bg-grey-300 rounded"
                                        style="background-color:slategrey" @click="lgopen = false">Cancel</button>
                                </div>
                            </div>

                    </form>
                </div>
              </div>

</div>
