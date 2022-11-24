<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <div class="max-w-7xl mx-auto px-4 mt-16 grid grid-cols-4 gap-4">

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-1 --}}
                    <img class="h-36 w-full object-cover" src="https://images.pexels.com/photos/1124465/pexels-photo-1124465.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Gorras</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-2 --}}
                    <img class="h-36 w-full object-cover" src="https://images.pexels.com/photos/158648/girl-coat-old-coat-brown-coat-158648.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Abrigos</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-3 --}}
                    <img class="h-36 w-full object-cover" src="https://media.istockphoto.com/id/1271974924/es/foto/corbata-azul-para-ni%C3%B1os.jpg?b=1&s=612x612&w=0&k=20&c=NJw53vMYLGpHluxbaWBl1Nn3c8lJjTVKHFdSXBf8Q0Q=" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Corbatas</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-4 --}}
                    <img class="h-36 w-full object-cover" src="https://media.istockphoto.com/id/613652030/es/foto/pa%C3%B1uelo-negro-cl%C3%A1sico-sobre-fondo-blanco.jpg?b=1&s=612x612&w=0&k=20&c=CwcdCJylZsQazCFLWmpT8ompvW1nsNURjOrY7jY29mA=" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Chal</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-5 --}}
                    <img class="h-36 w-full object-cover" src="https://images.pexels.com/photos/6634654/pexels-photo-6634654.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Canasta</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-6 --}}
                    <img class="h-36 w-full object-cover" src="https://images.pexels.com/photos/998521/pexels-photo-998521.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Anillo</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    {{-- Card-7 --}}
                    <img class="h-36 w-full object-cover" src="https://images.pexels.com/photos/13043553/pexels-photo-13043553.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Vestido</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit placeat hic deleniti eaque perferendis! Tempore ipsa et, laboriosam consequuntur aliquam accusantium aut, earum alias velit labore reprehenderit ducimus expedita sequi.
                        </p>
                        <div class="px-6 pt-4 pb-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Más información
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
