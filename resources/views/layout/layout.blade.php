<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InZam'S - Web Developer</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-800 ">
    <header class="headers">
        <nav class="flex justify-between items-center container mx-auto">

            <div class="space-x-4 ml-[-5px] mr-6 mt-2"><!-- logo -->
                <img class="logo" src="{{ asset('logo/developer-inzams.png') }}" alt="inzams">
            </div><!-- logo -->

            <div class="duration-500 nav-links md:static absolute white md:min-h-fit min-h-[40vh] left-[-100%] top-[14%] w-full flex items-center px-6"> <!-- nav -->
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-6 white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div><!-- nav -->

            <div class="flex items-center gap-4"><!-- buton -->
                <ion-icon name="menu" class="white text-3xl cursor-pointer md:hidden " onclick="onToggleMenu(this)"></ion-icon>
                <button class="btn"><a href="#">login</a></button>
            </div><!-- buton -->

        </nav>
    </header>




    @yield('content')










    <script>
        const navlinks = document.querySelector('.nav-links');
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close':'menu';
                navlinks.classList.toggle('menuActive');
            }
    </script>
</body>
</html>
