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
    <body class="antialiased">
        <x-hui-container class="p-2 bg-gray-700 text-white text-sm text-center align-middle fixed w-full h-10 z-20">
            There's no need for a banner component
            <x-hui-loading class="align-middle" />
        </x-hui-container>

        <x-hui-page size="xl" class="sm:px-8">
            <x-slot name="header">
                <x-hui-page.header class="bg-white text-black font-2xl font-extrabold px-4 py-2 h-16 my-16 border-b">
                    I'm the page header
                </x-hui-page.header>
            </x-slot>
            <x-slot name="footer">
                <x-hui-page.footer class="bg-indigo-500 text-white px-4 py-2 mt-8">
                    I'm the page footer
                </x-hui-page.footer>
            </x-slot>

            <x-hui-container class="space-y-32 divide-y">

                <x-hui-container class="space-y-8 p-8">
                    <x-hui-text h2>Primitives</x-hui-text>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Page</x-hui-text>
                        <x-hui-text>TBD</x-hui-text>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Container</x-hui-text>
                        <x-hui-container class="bg-gray-100 rounded-lg shadow p-8 mb-8">
                            I am contained
                        </x-hui-container>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Layout</x-hui-text>
                        <x-hui-col class="my-8">
                            <x-hui-row gap="4" class="my-4">
                                <x-hui-col size="8">{!! $placeholder('8') !!}</x-hui-col>
                                <x-hui-col size="4">{!! $placeholder('4') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4">
                                <x-hui-col size="4">{!! $placeholder('4') !!}</x-hui-col>
                                <x-hui-col size="4">{!! $placeholder('4') !!}</x-hui-col>
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4">
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                                <x-hui-col size="8">{!! $placeholder('8') !!}</x-hui-col>
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4">
                                <x-hui-col size="8">{!! $placeholder('8') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4 justify-center">
                                <x-hui-col size="8">{!! $placeholder('8') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4 justify-end">
                                <x-hui-col size="8">{!! $placeholder('8') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4 justify-between">
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                                <x-hui-col size="2">{!! $placeholder('2') !!}</x-hui-col>
                            </x-hui-row>
                            <x-hui-row gap="4" class="mb-4 justify-between">
                                <x-hui-col :size="[12, 'sm' => 4, 'lg' => 6]">{!! $placeholder('12 or 4 or 6') !!}</x-hui-col>
                                <x-hui-col :size="[12, 'sm' => 4, 'lg' => 6]">{!! $placeholder('12 or 4 or 6') !!}</x-hui-col>
                            </x-hui-row>
                        </x-hui-col>
                        <x-hui-container>
                            <x-hui-col>
                                <x-hui-row class="bg-red-100">Row</x-hui-row>
                                <x-hui-row>
                                    <x-hui-col size="3" class="bg-blue-100">Left</x-hui-col>
                                    <x-hui-col class="bg-green-100">Right</x-hui-col>
                                </x-hui-row>
                            </x-hui-col>
                        </x-hui-container>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Text</x-hui-text>
                        <x-hui-container class="space-y-4 mb-8">
                            <x-hui-text>
                                Taciti praesent a <x-hui-text size="2xl" span b>habitasse</x-hui-text> <x-hui-text span i>bibendum</x-hui-text>
                            </x-hui-text>
                            <x-hui-text h1>H1 heading</x-hui-text>
                            <x-hui-text h2>H2 heading</x-hui-text>
                            <x-hui-text h3>H3 heading</x-hui-text>
                            <x-hui-text h4>H4 heading</x-hui-text>
                            <x-hui-text h5>H5 heading</x-hui-text>
                            <x-hui-text h6>H6 heading</x-hui-text>
                        </x-hui-container>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Dividers</x-hui-text>

                        <x-hui-container class="mb-8">
                            <x-hui-text>Sit mollis pharetra nostra aptent platea inceptos lectus class, felis dapibus per habitasse cursus non blandit dictum laoreet, efficitur neque curabitur nibh in sed cras. Nisi parturient rutrum elementum mauris ullamcorper dictum dignissim, gravida cubilia taciti eu efficitur placerat eget, adipiscing suspendisse aptent iaculis dictumst pharetra.</x-hui-text>
                            <x-hui-divider>
                                <x-hui-text span b>Hello world</x-hui-text>
                            </x-hui-divider>
                            <x-hui-text>Torquent vestibulum fames molestie risus nullam mauris erat, sed nibh bibendum massa integer hendrerit tortor, luctus curae blandit orci lectus senectus. Id facilisi sollicitudin praesent mattis conubia posuere ligula donec, est vitae neque quisque platea eleifend pulvinar sem, orci blandit penatibus per commodo natoque tellus.</x-hui-text>
                        </x-hui-container>

                        <x-hui-card palette="warning">
                            <x-hui-text size="sm" class="bg-yellow-100 text-yellow-600 rounded-lg p-4"><x-hui-text span b>Vertical divides:</x-hui-text> Just use Tailwind™</x-hui-text>
                        </x-hui-card>

                        <x-hui-alert palette="warning">
                            <x-hui-text span b>Vertical divides:</x-hui-text> Just use Tailwind™
                            {{-- <x-hui-text size="sm" class="bg-yellow-100 text-yellow-600 p-4"><x-hui-text span b>Vertical divides:</x-hui-text> Just use Tailwind™</x-hui-text> --}}
                        </x-hui-alert>

                        <x-hui-row class="mb-8 divide-x">
                            <x-hui-col size=6>
                                <x-hui-text class="text-justify pr-4">Sit mollis pharetra nostra aptent platea inceptos lectus class, felis dapibus per habitasse cursus non blandit dictum laoreet, efficitur neque curabitur nibh in sed cras. Nisi parturient rutrum elementum mauris ullamcorper dictum dignissim, gravida cubilia taciti eu efficitur placerat eget, adipiscing suspendisse aptent iaculis dictumst pharetra.</x-hui-text>
                            </x-hui-col>
                            <x-hui-col size=6>
                                <x-hui-text class="text-justify pl-4">Torquent vestibulum fames molestie risus nullam mauris erat, sed nibh bibendum massa integer hendrerit tortor, luctus curae blandit orci lectus senectus. Id facilisi sollicitudin praesent mattis conubia posuere ligula donec, est vitae neque quisque platea eleifend pulvinar sem, orci blandit penatibus per commodo natoque tellus.</x-hui-text>
                            </x-hui-col>
                        </x-hui-row>
                    </x-hui-container>
                </x-hui-container>

                <x-hui-container class="space-y-8 pt-32 p-8">
                    <x-hui-text h2>UI Elements</x-hui-text>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Alerts</x-hui-text>
                        <x-hui-alert class="bg-green-100 border-l-4 border-green-500 text-green-500 p-4">
                            Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
                        </x-hui-alert>
                        <x-hui-alert palette="primary">
                            Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
                        </x-hui-alert>
                        <x-hui-alert title="This is a yellow alert" class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-500 p-4">
                            Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
                        </x-hui-alert>
                        <x-hui-alert class="bg-red-100 border-l-4 border-red-500 text-red-500 p-4">
                            <x-slot name="title">
                                <x-hui-text h3 class="text-red-500">Slotted title</x-hui-text>
                            </x-slot>
                            Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
                        </x-hui-alert>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Badges</x-hui-text>
                        <x-hui-container>
                            <x-hui-badge value="A badge" />
                            <x-hui-badge value="Another badge" class="italic text-white bg-blue-500 border-transparent" />
                            <x-hui-badge class="font-bold text-purple-700 bg-purple-100 border-purple-700">
                                A slightly more complex badge
                            </x-hui-badge>
                            <x-hui-badge value="A dangerous badge" palette="danger" />
                        </x-hui-container>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Buttons</x-hui-text>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button size="xl">Hello world</x-hui-button>
                            <x-hui-button size="xl" palette="primary">Hello world</x-hui-button>
                            <x-hui-button size="xl" palette="secondary">Hello world</x-hui-button>
                            <x-hui-button size="xl" palette="warning">Hello world</x-hui-button>
                            <x-hui-button size="xl" palette="danger">Hello world</x-hui-button>
                        </x-hui-row>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button size="lg">Hello world</x-hui-button>
                            <x-hui-button size="lg" palette="primary">Hello world</x-hui-button>
                            <x-hui-button size="lg" palette="secondary">Hello world</x-hui-button>
                            <x-hui-button size="lg" palette="warning">Hello world</x-hui-button>
                            <x-hui-button size="lg" palette="danger">Hello world</x-hui-button>
                        </x-hui-row>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button pop>Hello world</x-hui-button>
                            <x-hui-button pop palette="primary">Hello world</x-hui-button>
                            <x-hui-button pop palette="secondary">Hello world</x-hui-button>
                            <x-hui-button pop palette="warning">Hello world</x-hui-button>
                            <x-hui-button pop palette="danger">Hello world</x-hui-button>
                        </x-hui-row>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button size="sm" loading disabled>Hello world</x-hui-button>
                            <x-hui-button size="sm" palette="primary">Hello world</x-hui-button>
                            <x-hui-button size="sm" palette="secondary">Hello world</x-hui-button>
                            <x-hui-button size="sm" palette="warning">Hello world</x-hui-button>
                            <x-hui-button size="sm" palette="danger">Hello world</x-hui-button>
                        </x-hui-row>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button size="xs">Hello world</x-hui-button>
                            <x-hui-button size="xs" palette="primary">Hello world</x-hui-button>
                            <x-hui-button size="xs" palette="secondary">Hello world</x-hui-button>
                            <x-hui-button size="xs" palette="warning">Hello world</x-hui-button>
                            <x-hui-button size="xs" palette="danger">Hello world</x-hui-button>
                        </x-hui-row>
                        <x-hui-row class="space-x-4 mb-8">
                            <x-hui-button palette="primary" class="w-full">Hello world</x-hui-button>
                        </x-hui-row>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Cards</x-hui-text>
                        <x-hui-row>
                            <x-hui-card>
                                <x-hui-row class="p-4 justify-between">
                                    <x-hui-text h3>"Header"</x-hui-text>
                                    <x-hui-button size="sm">Testing</x-hui-button>
                                </x-hui-row>
                                <x-hui-divider space=0 />
                                    <x-hui-text class="px-4 py-2 pb-4">Euismod sagittis massa imperdiet mauris proin lectus feugiat, mattis facilisis fusce finibus gravida habitant orci pharetra, mus nisi diam neque sodales ullamcorper.</x-hui-text>
                                <x-hui-divider space=0 />
                                <x-hui-text size="xs" class="bg-gray-100 rounded-bl-lg rounded-br-lg p-4">"Footer"</x-hui-text>
                            </x-hui-card>
                        </x-hui-row>
                        <x-hui-row gap="2">
                            <x-hui-col size=4>
                                <x-hui-card class="p-4" palette="primary">1</x-hui-card>
                            </x-hui-col>
                            <x-hui-col size=4>
                                <x-hui-card class="p-4" palette="secondary">2</x-hui-card>
                            </x-hui-col>
                            <x-hui-col size=4>
                                <x-hui-card class="p-4" palette="danger">3</x-hui-card>
                            </x-hui-col>
                        </x-hui-row>
                        <x-hui-row gap="2">
                            <x-hui-col size=4>
                                <x-hui-card size="xl" palette="primary">1</x-hui-card>
                            </x-hui-col>
                            <x-hui-col size=4>
                                <x-hui-card size="xl" palette="secondary">2</x-hui-card>
                            </x-hui-col>
                            <x-hui-col size=4>
                                <x-hui-card size="xl" palette="danger">3</x-hui-card>
                            </x-hui-col>
                        </x-hui-row>
                    </x-hui-container>
                </x-hui-container>

                <x-hui-container class="space-y-8 pt-32 p-8">
                    <x-hui-text h2>Interactive Elements <x-hui-badge value="Alpine.js" /></x-hui-text>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>List</x-hui-text>
                        <x-hui-list :default="['one', 'two']" class="border rounded-lg p-4 divide-y space-y-2">
                            <x-hui-list.collapsible-item key="one">
                                <x-slot name="handle">
                                    <x-hui-col>
                                        <x-hui-text h4>Handle #1</x-hui-text>
                                        <x-hui-text class="text-sm text-gray-500">This group is collapsible</x-hui-text>
                                    </x-hui-col>
                                </x-slot>
                                <x-hui-text class="mt-2">Item #1</x-hui-text>
                            </x-hui-list.collapsible-item>
                            <x-hui-list.collapsible-item key="two" handle="Handle #2" class="pt-2">Item #2</x-hui-list.collapsible-item>
                            <x-hui-list.item class="pt-2">Item #3</x-hui-list.item>
                        </x-hui-list>
                        <x-hui-list default="last" class="border rounded-lg p-4 divide-y space-y-2">
                            <x-hui-list.accordion-item key="first">
                                <x-slot name="handle">
                                    <x-hui-col>
                                        <x-hui-text h4>Handle #1</x-hui-text>
                                        <x-hui-text class="text-sm text-gray-500">This group acts as an accordion</x-hui-text>
                                    </x-hui-col>
                                </x-slot>
                                <x-hui-text class="mt-2">Item #1</x-hui-text>
                            </x-hui-list.accordion-item>
                            <x-hui-list.accordion-item data-test="test" containerClass="bg-black text-white" key="second" handle="Handle #2" class="pt-2">Item #2</x-hui-list.accordion-item>
                            <x-hui-list.accordion-item key="last" handle="Handle #3" class="pt-2">Item #3</x-hui-list.accordion-item>
                        </x-hui-list>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Modal</x-hui-text>
                        <x-hui-modal class="w-full sm:w-2/6">
                            <x-slot name="handle">
                                <x-hui-button palette="danger">Delete</x-hui-button>
                            </x-slot>
                            <x-hui-card class="bg-white border shadow-lg text-left">
                                <x-hui-text h4 class="p-4 pb-0">Are you sure?</x-hui-text>
                                <x-hui-text size="xs" class="p-4">Maybe this can be un-done, I don't know, I am just an example.</x-hui-text>
                                <x-hui-divider space=0 />
                                <x-hui-row class="justify-between space-x-4 p-3">
                                    <x-hui-button @click="open = false">Nevermind</x-hui-button>
                                    <x-hui-button palette="danger" class="rounded-lg"><x-hui-text span b>I am sure</x-hui-text></x-hui-button>
                                </x-hui-row>
                            </x-hui-card>
                        </x-hui-modal>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Popover</x-hui-text>
                        <x-hui-row>
                            <x-hui-popover>
                                <x-slot name="handle">
                                    <x-hui-button><x-hui-text size="sm">Options</x-hui-text></x-hui-button>
                                </x-slot>
                                <x-hui-list class="bg-white w-64 border rounded-lg shadow-xl">
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer rounded-t-lg">Option #1</x-hui-list.item>
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer">Option #2</x-hui-list.item>
                                    <x-hui-divider space=0 />
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer rounded-b-lg"><x-hui-text span b class="text-red-500">Scary option</x-hui-text></x-hui-list.item>
                                </x-hui-list>
                            </x-hui-popover>
                        </x-hui-row>
                        <x-hui-row class="bg-gray-100 border justify-end space-x-4 p-2">
                            <x-hui-popover hover position="tc">
                                <x-slot name="handle">
                                    <x-hui-button size="sm" palette="primary"><x-hui-text span b>Action</x-hui-text></x-hui-button>
                                </x-slot>
                                <div class="w-32 text-center p-1 rounded shadow-lg bg-black text-white text-xs">A "tooltip" popover</div>
                            </x-hui-popover>
                            <x-hui-popover position="tc">
                                <x-slot name="handle">
                                    <x-hui-button size="sm">
                                        <svg class="h-5 w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                        <x-hui-text span>More Actions</x-hui-text>
                                    </x-hui-button>
                                </x-slot>
                                <x-hui-list class="bg-white text-sm w-48 border rounded-lg shadow-xl">
                                    <x-hui-list.item class="py-2 px-4"><x-hui-text span b class="text-xs uppercase text-gray-400">Different position</x-hui-text></x-hui-list.item>
                                    <x-hui-divider space=0 />
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer rounded-t-lg">Option #1</x-hui-list.item>
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer">Option #2</x-hui-list.item>
                                    <x-hui-divider space=0 />
                                    <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer rounded-b-lg"><x-hui-text span b class="text-red-500">Scary option</x-hui-text></x-hui-list.item>
                                </x-hui-list>
                            </x-hui-popover>
                        </x-hui-row>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Slide-out</x-hui-text>
                        <x-hui-slide-out class="max-w-screen-sm w-full min-h-screen z-40 p-8 font-bold text-lg text-white bg-black ease-linear duration-200">
                            <x-slot name="handle">
                                <x-hui-button size="sm" palette="secondary" class="rounded-full px-2">
                                    <svg class="h-6 w-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg> Right
                                </x-hui-button>
                            </x-slot>
                            I am content.
                        </x-hui-slide-out>
                        <x-hui-slide-out position="left" class="max-w-screen-sm w-full min-h-screen z-40 p-8 font-bold text-lg text-white bg-yellow-400 ease-linear duration-200">
                            <x-slot name="handle">
                                <x-hui-button size="sm" palette="warning" class="rounded-full px-2">
                                    <svg class="h-6 w-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg> Left
                                </x-hui-button>
                            </x-slot>
                            <x-hui-col>
                                <x-hui-row class="justify-end">
                                    <x-hui-button @click="open = false" class="bg-transparent border-0 hover:text-yellow-200">
                                        <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </x-hui-button>
                                </x-hui-row>
                                <x-hui-row>I am content</x-hui-row>
                            </x-hui-col>
                        </x-hui-slide-out>
                        <x-hui-slide-out position="top" class="w-full h-64 z-40 p-8 font-bold text-lg text-white bg-blue-600 ease-linear duration-200">
                            <x-slot name="handle">
                                <x-hui-button size="sm" palette="primary" class="rounded-full px-2">
                                    <svg class="h-6 w-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg> Top
                                </x-hui-button>
                            </x-slot>
                            I am content.
                        </x-hui-slide-out>
                        <x-hui-slide-out position="bottom" class="w-full h-64 z-40 p-8 font-bold text-lg text-white bg-red-600 ease-linear duration-200">
                            <x-slot name="handle">
                                <x-hui-button size="sm" palette="danger" class="rounded-full px-2">
                                    <svg class="h-6 w-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg> Bottom
                                </x-hui-button>
                            </x-slot>
                            I am content.
                        </x-hui-slide-out>
                    </x-hui-container>
                    <x-hui-container class="space-y-4">
                        <x-hui-text h3>Tabs</x-hui-text>
                        <x-hui-tabs default="first" class="border rounded-lg p-4" handlesClass="flex -mx-4">
                            <x-slot name="handles">
                                <x-hui-tabs.handle key="first" selectedClass="bg-blue-500 text-white hover:bg-blue-700" class="p-2 mx-2 font-medium rounded-lg hover:bg-gray-200">First tab</x-hui-tabs.handle>
                                <x-hui-tabs.handle key="second" selectedClass="bg-blue-500 text-white hover:bg-blue-700" class="p-2 mx-2 font-medium rounded-lg hover:bg-gray-200">Second tab</x-hui-tabs.handle>
                            </x-slot>
                            <x-hui-divider size="4" />
                            <x-hui-tabs.content key="first">First tab content</x-hui-tabs.content>
                            <x-hui-tabs.content key="second">Second tab content</x-hui-tabs.content>
                        </x-hui-tabs>
                        <x-hui-tabs default="first" class="flex w-full divide-x divide-gray-200 border border-l-0 border-b-0 text-gray-800 rounded-tr rounded-br" contentClass="w-full border-b bg-gray-50 rounded-tr rounded-b" handlesClass="flex flex-col w-64 h-64 bg-white">
                            <x-slot name="handles">
                                <x-hui-tabs.handle key="first" selectedClass="text-white bg-green-600 border-green-600 hover:bg-green-700" class="border-b border-l p-2 font-medium text-sm bg-gray-50 hover:bg-gray-100">First tab</x-hui-tabs.handle>
                                <x-hui-tabs.handle key="second" selectedClass="text-white bg-green-600 border-green-600 hover:bg-green-700" class="border-b border-l shadow-inner p-2 font-medium text-sm hover:bg-gray-100">Second tab</x-hui-tabs.handle>
                            </x-slot>
                            <x-hui-tabs.content key="first" class="min-h-full p-4 shadow-inner">First tab content</x-hui-tabs.content>
                            <x-hui-tabs.content key="second" class="min-h-full p-4 shadow-inner">Second tab content</x-hui-tabs.content>
                        </x-hui-tabs>
                    </x-hui-container>
                </x-hui-container>

            </x-hui-container>

        </x-hui-page>

        <script src="{{ url(mix('js/app.js')) }}"></script>
    </body>
</html>
