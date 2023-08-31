<div class="w-[25%] rounded-sm border bg-white">
    <div><img src="assets/images/{{ $img1 }}" alt="card-image" class="w-full h-[200px]"></div>
    <div class="p-5">
        <span>{{ $span }}</span>
        <h3 class="text-2xl font-semibold mb-3">{{ $title }}</h3>
        <p class="mb-5">{{ $p }}</p>

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="assets/images/{{ $img2 }}" alt="card-image" class="w-8 h-8 rounded-full">
                <span>{{ $span2 }}</span>
            </div>

            <div>
                <p class="text-sm text-zinc-400">{{ $p2 }}</p>
            </div>
        </div>
    </div>
</div>
