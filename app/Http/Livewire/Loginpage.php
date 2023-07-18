<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Loginpage extends Component
{

    public $loginform = [
        'email' => '',
        'password' => ''
    ];

    public function login() {
       //dd($this->loginform);
        $this->validate([
            'loginform.email' => 'required|email',
            'loginform.password' => 'required',
            //dd($this->loginform)
        ]);
      
        if (Auth::attempt(['email' => $this->loginform['email'], 'password' => $this->loginform['password']])) {
            return redirect()->to('/');
          }
          else {
              return session()->flash('message', 'User Not Registered, Please confirm login Credentials');;
          }
        // Auth::attempt($this->loginform);
        // return redirect('/');
    }
    public function render()
    {
        return view('livewire.loginpage');
    }
}
