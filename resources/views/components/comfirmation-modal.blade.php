<div {{$attributes}} x-data="{show: @entangle($attributes->wire('model'))}" x-show="show"
    @keydown.escape.window="show=false">
    <div x-on:click="show=false" class="fixed inset-0 bg-gray-900 opacity-90"></div>

    <div class="fixed inset-0 h-48 max-w-sm p-4 m-auto bg-white rounded-md shadow-md">
        <div class="flex flex-col justify-between h-full">
            <header>
                {{$title}}
            </header>
            <main>
                {{$body}}
            </main>
            <footer>
                {{$footer}}
            </footer>
        </div>
    </div>
</div>