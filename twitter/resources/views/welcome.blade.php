@php
    $placeholder = function ($content) {
        return '<div class="w-full px-2 py-1 rounded bg-blue-700 text-white"> '.$content.' </div>';
    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            [x-cloak] { display: none; }
        </style>
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased bg-gray-800 text-gray-50">
        <x-hui-page size="xl" class="sm:px-8">
            <x-hui-row class="h-full min-h-screen divide-x divide-gray-600 flex">
                <x-hui-col class="flex-grow" size=2>
                    <x-hui-row class="mb-4 pl-2">
                        <x-hui-button class="rounded-full border-0 p-2 hover:bg-gray-700">
                            <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </x-hui-button>
                    </x-hui-row>
                    <x-hui-col class="flex-grow">
                        <x-hui-list class="space-y-2">
                            <x-hui-list.item class="inline-flex group align-middle rounded-full px-4 py-2 hover:bg-gray-700">
                                <svg class="inline-block mr-2 h-8 w-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <x-hui-text class="text-blue-600 mt-1" span b>Home</x-hui-text>
                            </x-hui-list.item>
                            <x-hui-list.item class="inline-flex group align-middle rounded-full px-4 py-2 hover:bg-gray-700">
                                <svg class="inline-block mr-2 h-8 w-8 group-hover:text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                </svg>
                                <x-hui-text class="group-hover:text-blue-600 mt-1" span b>Explore</x-hui-text>
                            </x-hui-list.item>
                            <x-hui-list.item class="inline-flex group align-middle rounded-full px-4 py-2 hover:bg-gray-700">
                                <svg class="inline-block mr-2 h-8 w-8 group-hover:text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <x-hui-text class="group-hover:text-blue-600 mt-1" span b>Notifications</x-hui-text>
                            </x-hui-list.item>
                            <x-hui-list.item class="inline-flex group align-middle rounded-full px-4 py-2 hover:bg-gray-700">
                                <svg class="inline-block mr-2 h-8 w-8 group-hover:text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <x-hui-text class="group-hover:text-blue-600 mt-1" span b>Messages</x-hui-text>
                            </x-hui-list.item>
                        </x-hui-list>
                        <x-hui-button class="m-2 rounded-full bg-blue-700 border-blue-700 hover:text-gray-50">Tweet</x-hui-button>
                    </x-hui-col>
                    <x-hui-row class="mb-4">
                        <x-hui-popover position="tc">
                            <x-slot name="handle">
                                <x-hui-row class="space-x-2 text-sm">
                                    <div class="flex items-center text-gray-400 justify-center bg-gray-700 h-12 w-12 rounded-full">
                                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <x-hui-text b>Example User</x-hui-text>
                                        <x-hui-text class="text-gray-300">@user</x-hui-text>
                                    </div>
                                </x-hui-row>
                            </x-slot>
                            <x-hui-list class="bg-gray-900 rounded-lg w-64 text-sm shadow-lg">
                                <x-hui-list.item class="p-4 hover:bg-gray-600 rounded-t-lg">
                                    <x-hui-row class="space-x-2 text-sm">
                                        <div class="flex items-center text-gray-400 justify-center bg-gray-800 h-12 w-12 rounded-full">
                                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <div class="flex-grow">
                                            <x-hui-text b>Example User</x-hui-text>
                                            <x-hui-text class="text-gray-300">@user</x-hui-text>
                                        </div>
                                        <div class="flex items-center text-blue-500">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </x-hui-row>
                                </x-hui-list.item>
                                <x-hui-divider class="border-gray-800" space=0 />
                                <x-hui-list.item class="p-4 hover:bg-gray-600">Add another account</x-hui-list.item>
                                <x-hui-divider class="border-gray-800" space=0 />
                                <x-hui-list.item class="p-4 hover:bg-gray-600 rounded-b-lg">Logout <x-hui-text span b>@user</x-hui-text></x-hui-list.item>
                            </x-hui-list>
                        </x-hui-popover>
                    </x-hui-row>
                </x-hui-col>
                <x-hui-col class="flex-grow" size=6></x-hui-col>
                <x-hui-col class="flex-grow p-4 px-6 space-y-4" size=4>
                    <x-hui-popover contentClass="w-full">
                        <x-slot name="handle">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center ml-3">
                                    <svg class="h-6 w-6 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input type="text" class="bg-gray-900 p-3 pl-12 rounded-full text-gray-200 w-full">
                            </div>
                        </x-slot>
                        <x-hui-list class="bg-gray-900 rounded-lg shadow-xl">
                            <x-hui-list.item class="px-3 py-2">
                                <x-hui-row>
                                    <x-hui-text size="lg" b class="flex-grow">Recent</x-hui-text>
                                    <x-hui-text size="sm" class="text-blue-500">Clear all</x-hui-text>
                                </x-hui-row>
                            </x-hui-list.item>
                            <x-hui-divider class="border-gray-600" space=0 />
                            <x-hui-list.item class="px-3 py-2 hover:bg-gray-800">
                                <x-hui-row>
                                    <x-hui-col class="items-center justify-center text-gray-400 bg-gray-800 h-10 w-10 rounded-full mr-2">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </x-hui-col>
                                    <x-hui-text size="sm" class="flex-grow flex flex-col justify-center">A Search</x-hui-text>
                                    <x-hui-col class="justify-center">
                                        <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </x-hui-col>
                                </x-hui-row>
                            </x-hui-list.item>
                            <x-hui-divider class="border-gray-600" space=0 />
                            <x-hui-list.item class="px-3 py-2 hover:bg-gray-800">
                                <x-hui-row>
                                    <x-hui-col class="items-center justify-center text-gray-400 bg-gray-800 h-10 w-10 rounded-full mr-2">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </x-hui-col>
                                    <x-hui-text size="sm" class="flex-grow flex flex-col justify-center">Another search</x-hui-text>
                                    <x-hui-col class="justify-center">
                                        <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </x-hui-col>
                                </x-hui-row>
                            </x-hui-list.item>
                            <x-hui-divider class="border-gray-600" space=0 />
                            <x-hui-list.item class="px-3 py-2 hover:bg-gray-800 rounded-b-lg">
                                <x-hui-row>
                                    <x-hui-col class="items-center justify-center text-gray-400 bg-gray-800 h-10 w-10 rounded-full mr-2">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </x-hui-col>
                                    <x-hui-text size="sm" class="flex-grow flex flex-col justify-center">One more</x-hui-text>
                                    <x-hui-col class="justify-center">
                                        <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </x-hui-col>
                                </x-hui-row>
                            </x-hui-list.item>
                        </x-hui-list>
                    </x-hui-popover>
                    <x-hui-list class="bg-gray-700 rounded-xl">
                        <x-hui-list.item class="py-2 px-3">
                            <x-hui-text h2 class="font-bold text-base">What's Happening</x-hui-text>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="py-2 px-3 hover:bg-gray-600 transition">
                            <x-hui-row>
                                <x-hui-col size=9>
                                    <x-hui-text size="sm" class="text-gray-400">World News &middot; 5 hours ago</x-hui-text>
                                    <x-hui-text b>Risus ac himenaeos inceptos tellus egestas rutrum</x-hui-text>
                                </x-hui-col>
                                <x-hui-col size=3>
                                    <img src="https://via.placeholder.com/150" class="rounded-lg">
                                </x-hui-col>
                            </x-hui-row>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="py-2 px-3 hover:bg-gray-600 transition">
                            <x-hui-row>
                                <div class="flex-grow">
                                    <x-hui-text size="sm" class="text-gray-400">Politics &middot; 5 hours ago</x-hui-text>
                                    <x-hui-text b>Aliquam ullamcorper arcu eu penatibus duis commodo maecenas mattis</x-hui-text>
                                </div>
                                <div>
                                    <div class="p-1 rounded-full hover:bg-gray-600 hover:text-blue-500">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </x-hui-row>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="py-2 px-3 hover:bg-gray-600 transition">
                            <x-hui-row>
                                <div class="flex-grow">
                                    <x-hui-text size="sm" class="text-gray-400">Entertainment &middot; 5 hours ago</x-hui-text>
                                    <x-hui-text b>Sapien nunc dignissim commodo ut porta nullam</x-hui-text>
                                </div>
                                <div>
                                    <div class="p-1 rounded-full hover:bg-gray-600 hover:text-blue-500">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </x-hui-row>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="p-3 hover:bg-gray-600 transition rounded-b-xl">
                            <x-hui-text size="sm" class="text-blue-400">Show more</x-hui-text>
                        </x-hui-list.item>
                    </x-hui-list>
                    <x-hui-list class="bg-gray-700 rounded-xl">
                        <x-hui-list.item class="py-2 px-3">
                            <x-hui-text h2 class="font-bold text-base">Who to Follow</x-hui-text>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="py-2 px-3 hover:bg-gray-600 transition">
                            <x-hui-row class="space-x-2 text-sm">
                                <x-hui-popover hover position="br" class="flex-grow" contentClass="w-64">
                                    <x-slot name="handle">
                                        <div class="flex space-x-2">
                                            <div class="flex items-center text-gray-400 justify-center bg-gray-800 h-12 w-12 rounded-full">
                                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <x-hui-text b>Another User</x-hui-text>
                                                <x-hui-text class="text-gray-300">@another</x-hui-text>
                                            </div>
                                        </div>
                                    </x-slot>
                                    <x-hui-col class="space-y-2 bg-gray-900 rounded-lg text-sm shadow-lg p-3">
                                        <x-hui-row>
                                            <x-hui-col size=6>
                                                <div class="flex items-center text-gray-400 justify-center bg-gray-800 h-12 w-12 rounded-full">
                                                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                    </svg>
                                                </div>
                                            </x-hui-col>
                                            <x-hui-col class="items-end" size=6><x-hui-button class="rounded-full border-blue-500 hover:border-blue-500 text-blue-500">Follow</x-hui-button></x-hui-col>
                                        </x-hui-row>
                                        <div>
                                            <x-hui-text b>Another User</x-hui-text>
                                            <x-hui-text class="text-gray-300">@another</x-hui-text>
                                        </div>
                                        <div>
                                            Magna nibh dapibus ridiculus ut nisi ligula pulvinar, litora ipsum suscipit porttitor sem urna viverra phasellus, commodo enim consectetur dictumst erat euismod. Ultrices pellentesque.
                                        </div>
                                        <x-hui-row>
                                            <x-hui-col size=6>
                                                <x-hui-text class="text-gray-500">
                                                    <x-hui-text span b class="text-gray-50">490</x-hui-text> Followers
                                                </x-hui-text>
                                            </x-hui-col>
                                            <x-hui-col size=6>
                                                <x-hui-text class="text-gray-500">
                                                    <x-hui-text span b class="text-gray-50">211</x-hui-text> Following
                                                </x-hui-text>
                                            </x-hui-col>
                                        </x-hui-row>
                                        <div class="flex space-x-2 align-middle">
                                            <div class="flex -space-x-2 mr-4">
                                                <img src="https://i.pravatar.cc/50?img=1" class="h-5 w-5 rounded-full" />
                                                <img src="https://i.pravatar.cc/50?img=2" class="h-5 w-5 rounded-full" />
                                                <img src="https://i.pravatar.cc/50?img=3" class="h-5 w-5 rounded-full" />
                                            </div>
                                            <div class="text-xs text-gray-500">Followed by A Third User, and 3 others you follow</div>
                                        </div>
                                    </x-hui-col>
                                </x-hui-popover>
                                <div>
                                    <x-hui-button class="rounded-full border-blue-500 hover:border-blue-500 text-blue-500">Follow</x-hui-button>
                                </div>
                            </x-hui-row>
                        </x-hui-list.item>
                        <x-hui-divider class="border-gray-600" space=0 />
                        <x-hui-list.item class="p-3 hover:bg-gray-600 transition rounded-b-xl">
                            <x-hui-text size="sm" class="text-blue-400">Show more</x-hui-text>
                        </x-hui-list.item>
                    </x-hui-list>
                </x-hui-col>
            </x-hui-row>
        </x-hui-page>

        <script src="{{ url(mix('js/app.js')) }}"></script>
    </body>
</html>
