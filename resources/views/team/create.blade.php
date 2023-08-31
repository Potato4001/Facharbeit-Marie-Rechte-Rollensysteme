<!doctype html>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body>
    <x-sidebar>
        <div class="">
            <nav class="">
                <div class="">
                    <h1 class="text-lg font-bold">Create new Team</h1>
                </div>
                <div class="">
                    <a href="./" class="">
                        <img src="./images/logo.png" alt="logo" width="165" height="16" />
                    </a>
                </div>
            </nav>
            <x-panel>
                <form method="POST" action="team" class="mt-10">
                    @csrf

                    <x-form.input name=" team name" />

                    <x-form.input name="sport type" />

                    <x-form.button>Log In</x-form.button>
                </form>
            </x-panel>
        </div>
    </x-sidebar>


</body>