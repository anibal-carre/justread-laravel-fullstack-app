<header class="bg-white">
    <nav class="w-full h-[80px] flex items-center justify-center px-[60px] border-zinc-300 gap-5">

        <div class="w-[30%] flex">
            <a class="flex" href="{{ url('/') }}">
                <h1 class="text-2xl font-[800]">JUSTREAD<span class="text-green-700">.</span></h1><span
                    class="text-sm font-semibold text-zinc-600 self-start">WP</span>
            </a>
        </div>
        <ul class="w-[70%] flex justify-start gap-6 font-semibold text-gray-500">
            <li class=" cursor-pointer"><a href="{{ url('/about') }}">ABOUT</a></li>
            <li class=" cursor-pointer"><a href="{{ url('/categories') }}">CATEGORIES</a></li>
            <li class=" cursor-pointer"><a href="{{ url('/readability') }}">READABILITY</a></li>
            <li class=" cursor-pointer"><a href="{{ url('/contact') }}">CONTACT</a></li>
        </ul>
    </nav>
</header>
