<x-layout>

    <div class="fixed inset-0 bg-gray-900 opacity-90"></div>

    <div class="fixed inset-0 h-48 max-w-sm p-4 m-auto bg-white rounded-md shadow-md">
        <div class="flex flex-col justify-between h-full">
            <header>
                <h3 class="font-bold text-large">Are You Sure?</h3>
            </header>
            <main>
                <p>If you proceed, your account will be delted entirely.</p>
            </main>
            <footer>
                <button
                    class="px-4 py-2 mr-2 text-xs uppercase transition-all duration-200 bg-gray-400 rounded-md text-whire hover:bg-gray-500">Cancle</button>
                <button
                    class="px-4 py-2 text-xs uppercase transition-all duration-200 bg-blue-400 rounded-md text-whire hover:bg-blue-500">Continue</button>
            </footer>
        </div>
    </div>
</x-layout>