<x-layout>

    <x-comfirmation-model>
        <x-slot name="title">
            <h3 class="font-bold text-large">Are You Sure?</h3>
        </x-slot>
        <x-slot name="body">
            <p>If you proceed, your account will be delted entirely.</p>
        </x-slot>
        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:bg-gray-500">Cancle</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-comfirmation-model>
</x-layout>