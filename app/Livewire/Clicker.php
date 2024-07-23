<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

    #[Rule('required|min:2|max:50')]
    public $name='';
    #[Rule('required|min:5|email|max:255|unique:users')]
    public $email='';
    #[Rule('required|min:2')]
    public $password='';

    public function createNewUser(){
        $validated = $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
        $this->reset(['name','email','password']);
        request()->session()->flash('success','User Created Successfully!');
    }
    public function handleClick(){
        dump('clicked');
    }
    public function render()
    {
        $title="'this is title var'";
        $users=User::paginate(3);
        return view('livewire.clicker',[
            'title'=>$title,
            'users'=>$users
        ]);
    }
}
