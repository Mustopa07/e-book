<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }}</title>
</head>
<body>

    <x-navbar />

    <section id="content" class="w-full h-auto">
        {{ $slot }}

        {{-- footer page --}}
        <section id="footer" class="w-full h-auto bg-gray-800 px-10 py-8 flex flex-col items-center">
            <div class="logo w-16 h-16 bg-gray-100 rounded-full flex justify-center mb-5"></div>
            <div class="brand text-3xl font-bold text-gray-100 pb-10">STARBOOK</div>
            <div class="brand text-xl font-semibold text-gray-100">Copyright By Muhammad Ikhsan Bintang</div>
        </section>
        {{-- end footer page --}}
    </section>




    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function openModal(key) {
            document.getElementById(key).showModal();
            document.body.setAttribute('style', 'overflow: hidden;');
            document.getElementById(key).children[0].scrollTop = 0;
            document.getElementById(key).children[0].classList.remove('opacity-0');
            document.getElementById(key).children[0].classList.add('opacity-100')
        }

        function modalClose(key) {
            document.getElementById(key).children[0].classList.remove('opacity-100');
            document.getElementById(key).children[0].classList.add('opacity-0');
            setTimeout(function () {
                document.getElementById(key).close();
                document.body.removeAttribute('style');
            }, 100);
        }
    </script>
</body>
</html>
