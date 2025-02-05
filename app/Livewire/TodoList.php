<?php

namespace App\Livewire;

use App\Models\Todo;
use Exception;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    #[Rule('required|min:3|max:50')]
    public $name;

    public $search;
    public $editingTodoID;
    #[Rule('required|min:3|max:50')]
    public $editingTodoName;
    public function create(){
        // dd("create");
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
        session()->flash('success','Saved.');
        $this->resetPage();
        // dd("create");

    }
    public function toggle($todoID){
        $todo = Todo::find($todoID);
        $todo->completed = !$todo->completed;
        $todo->save();
    }
    public function edit($todoID){
        $this->editingTodoID = $todoID;
        $this->editingTodoName = Todo::find($todoID)->name;

    }
    public function cancel(){
        $this->reset('editingTodoID','editingTodoName');
    }
    public function update(){
        $this->validateOnly('editingTodoName');
        Todo::find($this->editingTodoID)->update([
            'name'=>$this->editingTodoName
        ]);
        $this->cancel();
    }
    public function delete($todoID){
        // try
        try{
            Todo::findOrFail($todoID)->delete();
        }catch(Exception $e){
            session()->flash('error','Failed to delete todo!.');
            return;
        }
        // $todo->delete();
    }
    public function render()
    {
        return view('livewire.todo-list',[
            'todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(5)
        ]);
    }
}
