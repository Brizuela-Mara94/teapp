<x-event-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rosa overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-custom-rosa border-b border-gray-200">
                    {{ $slot }}
                    @if (isset($links))
                        <div class="mt-4">
                            {{ $links }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-event-layout>
