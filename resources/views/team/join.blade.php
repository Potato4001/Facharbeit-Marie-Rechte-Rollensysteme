<!DOCTYPE html>
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <div class="flex">
        <x-sidebar />
        <div class="flex items-center flex-column mx-auto">
            <nav class="inline-flex items-center mb-20">
                <div class="">
                    <h1 class="font-bold text-lg">Join your team!</h1>
                </div>
                <div class="">
                    <a href="./" class="">
                        <img src="./images/logo.png" alt="logo" width="165" height="16">
                    </a>
                </div>
            </nav>

            <x-panel>
                <form method="POST" action="join" class="mt-10">
                    @csrf

                    <x-form.input name=" team name" />

                    <x-form.input name="sport type" />

                    <x-form.button>Log In</x-form.button>
                </form>
            </x-panel>
        </div>
    </div>
</body>