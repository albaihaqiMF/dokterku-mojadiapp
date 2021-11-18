<div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
    <div class="intro-x flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Daftar User
        </h2>
    </div>
    <div class="mt-5">
        @forelse ($data as $item)
        <div class="intro-x">
            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                    <img alt="Tinker Tailwind HTML Admin Template" src="https://ui-avatars.com/api/?name={{ $item->name }}">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium">{{ $item->name }}</div>
                    <div class="text-gray-600 text-xs mt-0.5">{{ date('d M Y', strtotime($item->created_at)) }}</div>
                </div>
                <div class="text-theme-20">{{ $item->role->name }}</div>
            </div>
        </div>
        @empty
        <div class="intro-x">
            <div class="flex justify-center">
                Data Kosong
            </div>
        </div>
        @endforelse

        <a href="" class="intro-y w-full block text-center rounded-md py-3 border border-dotted border-theme-32 dark:border-dark-5 text-theme-33 dark:text-gray-600">View More</a>
    </div>
</div>
