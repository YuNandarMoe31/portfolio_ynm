<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yu Nandar Moe | Portfolio</title>
    {{-- <title>{{ $title }}</title> --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="/css/import.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <x-header />

    {{ $slot }}

    <x-about />

    <x-education class="sp" />

    <x-services />

    <x-experiences />

    <x-contact />

    <x-footer />

    <script>
        // toggle menu
        function toggle() {
            const globalMenuSp = document.querySelector(".globalMenuSp");
            const hamburger = document.querySelector(".hamburger");
            const anchorLinks = document.querySelectorAll(".js-anchor-link");

            function toggleMenu() {
                hamburger.classList.toggle("active");
                globalMenuSp.classList.toggle("active");
            }

            function removeMenu() {
                hamburger.classList.remove("active");
                globalMenuSp.classList.remove("active");
            }

            if (hamburger) {
                hamburger.addEventListener("click", toggleMenu);
            }

            if (anchorLinks) {
                for (let anchorLink of anchorLinks) {
                    anchorLink.addEventListener("click", removeMenu);
                }
            }
        }
        toggle();
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="js/jquery.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/slick.min.js"></script>
</body>

</html>
