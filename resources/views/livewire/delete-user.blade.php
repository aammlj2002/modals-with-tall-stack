<div>
    <div class="p-5 mx-10 bg-blue-200">
        <form method="POST">
            <p>Are you sure to delete you account?</p>
            <x-button wire:click="showModal()" class="bg-blue-400 hover:bg-blue500">Yes, Delete it</x-button>
        </form>
    </div>
    @if ($show)
    <x-comfirmation-modal wire:model.defer='show'>
        <x-slot name="title">
            <h3 class="font-bold text-large">Are You Sure?</h3>
        </x-slot>
        <x-slot name="body">
            <p>If you proceed, your account will be delted entirely.</p>
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="hideModal()" class="bg-gray-400 hover:bg-gray-500">Cancle</x-button>
            <x-button wire:click="delete()" class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-comfirmation-modal>
    @endif
</div>