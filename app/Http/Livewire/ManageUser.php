<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUser extends Component
{
    public $deleteUserModal=false;
    public $currentUser;
    public function showDeleteModal(User $user){
        $this->currentUser = $user;
        $this->deleteUserModal = true;
    }
    public function hideDeleteModal(){
        $this->deleteUserModal = false;
    }
    public function delete()
    {
        $this->currentUser->delete();
        $this->hideDeleteModal();
    }
    public function render()
    {
        return view('livewire.manage-user',[
            "users"=>User::all()
        ]);
    }
}
