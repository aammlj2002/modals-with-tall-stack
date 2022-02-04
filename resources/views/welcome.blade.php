<x-layout>
    <div class="p-5 mx-10 bg-blue-200">
        <form id="user-delete-form" method="POST" x-data @submit.prevent="location.hash = '#user-delete-model'"
            action="/">
            @csrf
            <p>Are you sure to delete you account?</p>
            <x-button class="bg-blue-400 hover:bg-blue500">Yes, Delete it</x-button>
        </form>
    </div>
    <x-comfirmation-model name="user-delete-model">
        <x-slot name="title">
            <h3 class="font-bold text-large">Are You Sure?</h3>
        </x-slot>
        <x-slot name="body">
            <p>If you proceed, your account will be delted entirely.</p>
        </x-slot>
        <x-slot name="footer">
            <a href="#">cancle</a>
            {{-- <x-button class="bg-gray-400 hover:bg-gray-500">Cancle</x-button> --}}
            <x-button @click="document.querySelector('#user-delete-form').submit()"
                class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-comfirmation-model>
</x-layout>