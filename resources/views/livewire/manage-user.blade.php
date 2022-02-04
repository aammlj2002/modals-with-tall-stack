<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$user->name}}</div>
                                        <div class="text-sm text-gray-500">{{$user->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <x-button wire:click="showDeleteModal({{$user->id}})"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    Delete
                                </x-button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($deleteUserModal)
    <x-comfirmation-modal wire:model.defer='deleteUserModal'>
        <x-slot name="title">
            <h3 class="font-bold text-large">Delete {{$currentUser->name}}</h3>
        </x-slot>
        <x-slot name="body">
            <p>If you proceed, your account will be delted entirely.</p>
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="hideDeleteModal()" class="bg-gray-400 hover:bg-gray-500">Cancle</x-button>
            <x-button wire:click="delete()" class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-comfirmation-modal>
    @endif
</div>