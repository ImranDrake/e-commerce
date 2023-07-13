<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginRegister extends Component
{
    public $form = [
        'name' => '',
        'emailid' => '',
        'password' => '',
        'confirmpassword' => ''
    ];

    public function submit() {
        $this->validate([
            'form.name' => 'required',
            'form.emailid' => 'required',
            'form.password' => 'required',
            'form.confirmpassword' => 'required|same:form.password'
        ]);
        UserModel::create($this->form);
        // dd($this->form);
        return redirect('/');
    }

    

    public function render()
    {
        return view('livewire.login-register');
    }

    
}
