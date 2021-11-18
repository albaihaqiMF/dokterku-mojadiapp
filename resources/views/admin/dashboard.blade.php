<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                @livewire('general-report')
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
                @livewire('doctor-list')
        </div>
    </div>
</x-app-layout>
