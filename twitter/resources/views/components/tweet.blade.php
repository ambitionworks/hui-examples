@inject('faker', 'faker')
<x-hui-row class="px-4 py-2 space-x-4 hover:bg-gray-700">
    <x-hui-col class="flex-none">
        <x-avatar bg="bg-gray-900" />
    </x-hui-col>
    <x-hui-col class="flex-grow space-y-1">
        <x-hui-row>
            <x-hui-col class="flex-grow">
                <x-hui-text span size="sm" class="text-gray-300">
                    <x-hui-text span b class="text-gray-50">{{ $faker->name }}</x-hui-text>
                    {{ '@'.$faker->username }} &middot; {{ rand(1, 20) }}m
                </x-hui-text>
            </x-hui-col>
            <x-hui-col>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
            </x-hui-col>
        </x-hui-row>
        <x-hui-row>
            <x-hui-text size="sm mt-1">
                {{ $faker->realText(140) }}
            </x-hui-text>
        </x-hui-row>
        <x-hui-row class="w-8/12 justify-between">
            <x-hui-col class="group hover:text-blue-600">
                <x-hui-row class="space-x-1">
                    <x-hui-col class="rounded-full p-1 group-hover:bg-blue-600 group-hover:bg-opacity-25">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </x-hui-col>
                    <x-hui-col class="justify-center">
                        <x-hui-text span size="xs">{{ rand(0, 255) }}</x-hui-text>
                    </x-hui-col>
                </x-hui-row>
            </x-hui-col>
            <x-hui-col class="group hover:text-green-600">
                <x-hui-row class="space-x-1">
                    <x-hui-col class="rounded-full p-1 group-hover:bg-green-600 group-hover:bg-opacity-25">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </x-hui-col>
                    <x-hui-col class="justify-center">
                        <x-hui-text span size="xs">{{ rand(0, 255) }}</x-hui-text>
                    </x-hui-col>
                </x-hui-row>
            </x-hui-col>
            <x-hui-col class="group hover:text-pink-600">
                <x-hui-row class="space-x-1">
                    <x-hui-col class="rounded-full p-1 group-hover:bg-pink-600 group-hover:bg-opacity-25">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </x-hui-col>
                    <x-hui-col class="justify-center">
                        <x-hui-text span size="xs">{{ rand(0, 255) }}</x-hui-text>
                    </x-hui-col>
                </x-hui-row>
            </x-hui-col>
            <x-hui-col class="group hover:text-blue-600">
                <x-hui-row class="space-x-1">
                    <x-hui-col class="rounded-full p-1 group-hover:bg-blue-600 group-hover:bg-opacity-25">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                        </svg>
                    </x-hui-col>
                </x-hui-row>
            </x-hui-col>
        </x-hui-row>
    </x-hui-col>
</x-hui-row>