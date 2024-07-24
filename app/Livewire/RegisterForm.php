<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class RegisterForm extends Component
{
    use WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $name='';
    #[Rule('required|min:5|email|max:255|unique:users')]
    public $email='';
    #[Rule('required|min:2')]
    public $password='';
    #[Rule('nullable|sometimes|iamge|max:1024')]
    public $image;

    public function create(){
        $validated = $this->validate();
        if($this->image){
            $validated['image'] = $this->image->store('uploads','public');
        }
        User::create($validated);
        $this->reset('name','email','password','image');
        session()->flash('success','User Created!');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
