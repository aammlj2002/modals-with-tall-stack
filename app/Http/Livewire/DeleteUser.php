<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $show=false;
    public function showModal(){
        $this->show = true;
    }
    public function hideModal(){
        $this->show = false;
    }
    public function delete()
    {
        dd("delete");
    }
    public function render()
    {
        return view('livewire.delete-user');
    }
}
