<!doctype html>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="ml-10">
                <a href="./">
                    <img src="./images/logo.png" alt="logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @if (auth()->check())
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase mr-10">Welcome, {{ auth()->user()->name }}!</button>
                        </x-slot>

                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>

                @else
                    <div class="mr-10 px-3 py-2 bg-blue-900 rounded-xl">
                        <a href="register" class="text-white uppercase font-bold">Register</a>
                    </div>
                    <div class="mr-10 px-3 py-2 bg-blue-900 rounded-xl">
                        <a href="login" class="text-white uppercase font-bold">Log In</a>
                    </div>
                @endif
            </div>
        </nav>        

        {{ $slot }}
    </section>
    <x-flash/>
</body>