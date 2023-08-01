<nav class="bg-gradient-to-r from-blue-400 to-pink-400">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">ConnectFriend</span>
        </a>

        <div class="flex md:order-2">
            {{-- Kalo blm auth check (blm login) --}}
            @if (!auth()->check())
                <a href="/login">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOG OUT</button>
                </a>
            @else
            {{-- Kalo udh login --}}
                <a href="/logout">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGOUT</button>
                </a>
            @endif


        </div>

    </div>
  </nav>
