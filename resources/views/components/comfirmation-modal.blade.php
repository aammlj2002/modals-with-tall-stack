<div {{$attributes}} x-data="{show: @entangle($attributes->wire('model'))}" x-show="show"
    @keydown.escape.window="show=false">
    <div x-on:click="show=false" class="fixed inset-0 bg-gray-900 opacity-90"></div>

    <div class="fixed inset-0 h-fit max-w-sm m-auto bg-white rounded-md shadow-md" x-show="show" x-transition>
        <div class="flex flex-col justify-between h-full">
            <header class="pt-4 px-4">
                {{$title}}
            </header>
            <main class="p-4">
                {{$body}}
            </main>
            <footer class="p-4 bg-gray-300 rounded-b-md flex justify-end">
                {{$footer}}
            </footer>
        </div>
    </div>
</div>