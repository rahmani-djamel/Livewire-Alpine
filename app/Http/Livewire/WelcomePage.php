<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class WelcomePage extends Component
{
    public $name;
    public $email;
    public $phone;
    public $package;


    protected $rules = [
        "name" => "required|min:6",
        "email" => "required|email|unique:users",
        "phone" => "required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9",
        "package" => "required",
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'package' => $this->package,
            'password' => Hash::make($this->phone),
        ];
        $data = $this->validate();
        User::create($data);
    }

    public function render()
    {
        return view('livewire.welcome-page');
    }
}
