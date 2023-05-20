<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kawan Belajar Pajak || Mari Belajar Pajak Bersama Kami</title>

    {{-- Genosstyle --}}
    <link href="{{ asset('css/genosstyle.css') }} " rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- AOS JS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    {{-- FLOWBITE --}}

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">



    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @yield('morecss')
</head>

<body style="overflow-x: hidden">
    {{-- <div id="loading" class="z-50 fixed h-full w-full bg-blue flex justify-center items-center">
        <img src="{{ asset('assets/images/loading.gif') }}" />
    </div> --}}


    <div class="">


        {{-- NAVBAR --}}
        <nav
            class="z-50 bg-white border-gray-200 fixed top-0 left-0 right-0 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-sm">

            <div class="container flex flex-wrap items-center justify-between mx-auto ">
                <a class="flex items-center" href="/">
                    <img src="{{ asset('assets/icons/logo1.png') }}" class="h-6 mr-3 sm:h-10" alt="KBP Logo" />

                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Kawan Belajar
                        Pajak</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 "
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4   md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Beranda</a>
                        </li>

                        <li>
                            <a href="/tentang" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Tentang</a>
                        </li>
                        <li>
                            <a href="/pendidikan" class="block py-2 pl-3 pr-4 nav-link"
                                aria-current="page">Pendidikan</a>
                        </li>
                        <li>
                            <a href="/berita" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Berita</a>
                        </li>
                        <li>
                            <a href="/testimoni" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Testimoni</a>
                        </li>
                        <li>
                            <a href="/blog" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Blog</a>
                        </li>
                        <li>
                            <a href="/kontak" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')




        <footer class="footer  ">
            <div class="container grid md:grid-cols-3 grid-cols-1 gap-10 md:mx-auto md:px-0 px-5">
                <div class="md:col-span-2">

                    <p class="title ">Sejarah Singkat</p>
                    <div class="content text-sm">{!! $about->history !!}</div>

                    <div class="flex gap-4 mt-14">
                        <img src="{{ asset('assets/icons/logo1.png') }}" class="h-20" />
                        <img src="{{ asset('assets/images/logokba.png') }}" class="h-20" alt="TBA Logo" />
                    </div>
                </div>
                <div>
                    <p class="title">Menu</p>
                    <a class="link" href="#beranda">Beranda</a>
                    <a class="link" href="#layanan">Pendidikan</a>
                    <a class="link" href="#portfolio">Berita</a>
                    <a class="link" href="#client">Testimoni</a>
                    <a class="link" href="#contact">Blog</a>
                    <a class="link" href="#contact">kontak</a>

                    <p class="title mt-10">Media Sosial</p>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M19.181,11h-1.729 C16.376,11,16,11.568,16,12.718V14h3.154l-0.428,3H16v7.95C15.671,24.982,15.338,25,15,25c-0.685,0-1.354-0.07-2-0.201V17h-3v-3h3 v-1.611C13,9.339,14.486,8,17.021,8c1.214,0,1.856,0.09,2.16,0.131V11z">
                            </path>
                        </svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"class="iconsocial"
                            viewBox="0 0 30 30">
                            <path fill="currentColor"
                                d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z">
                            </path>
                        </svg></a>

                    <p class="title mt-10">Credit</p>
                    <a class="py-2 px-4  hover:bg-black bg-gray-700 text-white rounded-2xl cursor-pointer transition-all duration-300"
                        data-modal-target="kreditModal" data-modal-toggle="kreditModal">Image Source </a>
                </div>





            </div>
        </footer>
    </div>

    <div style="bottom: 20px; right: 20px;" class="fixed   ">
        <a href="https://wa.link/kcbooc"> <img src="{{ asset('assets/images/iconwa.png') }}" class="w-14 h-14" /></a>
    </div>
    <!-- Main modal -->
    <div id="kreditModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Credit
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="kreditModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    Image by <a class="block link" target="_blank"
                        href="https://www.freepik.com/free-vector/flat-geometric-background_13900618.htm#page=2&query=circle%20background&position=5&from_view=search&track=ais">Freepik</a>
                    <a class="block link" target="_blank"
                        href="https://www.freepik.com/free-vector/net-income-calculating-abstract-concept-vector-illustration-salary-calculation-net-income-formula-take-home-pay-corporate-accounting-calculating-earnings-profit-estimation-abstract-metaphor_11668745.htm#query=tax&position=6&from_view=search&track=sph">Image
                        by vectorjuice</a> on Freepik
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/help"
                        title="help icons">Help icons created by
                        IconMark - Flaticon</a>
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/money"
                        title="money icons">Money icons created by Kiranshastry - Flaticon</a>
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/professional"
                        title="professional icons">Professional icons created by Parzival’ 1997 - Flaticon</a>
                    <a class="block link" target="_blank" href="https://www.flaticon.com/free-icons/campus"
                        title="campus icons">Campus icons created by
                        SyafriStudio - Flaticon</a>
                    <a class="block link" target="_blank"
                        href="https://www.freepik.com/free-vector/yellow-background-with-circular-shapes_25138673.htm#query=blue%20yellow&position=25&from_view=keyword&track=ais">Image
                        by starline</a> on Freepik
                    <a href="https://www.flaticon.com/free-icons/contact" title="contact icons">Contact icons
                        created
                        by Vector Stall - Flaticon</a>
                    <a href="https://www.flaticon.com/free-icons/process" title="process icons">Process icons
                        created
                        by Becris - Flaticon</a>
                    <a href="https://www.flaticon.com/free-icons/fan-club" title="fan club icons">Fan club icons
                        created by noomtah - Flaticon</a>
                    Photo by <a
                        href="https://unsplash.com/@kellysikkema?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Kelly
                        Sikkema</a> on <a
                        href="https://unsplash.com/photos/SiOW0btU0zk?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                    Photo by <a
                        href="https://unsplash.com/@kellysikkema?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Kelly
                        Sikkema</a> on <a
                        href="https://unsplash.com/photos/xoU52jUVUXA?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

                    Photo by <a
                        href="https://unsplash.com/@glenncarstenspeters?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Glenn
                        Carstens-Peters</a> on <a
                        href="https://unsplash.com/photos/RLw-UC03Gwc?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

                </div>

            </div>
        </div>
    </div>

    {{-- SLIDER RIWAYAT --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <script>
        new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            gap: '5rem',
            perMove: 1,
            breakpoints: {
                1070: {
                    perPage: 2,
                },
                720: {
                    perPage: 1,
                }
            }
        }).mount();
    </script>
    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- FLOWBITE --}}

    @yield('morejs')

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var load = document.getElementById("loading");
            load.classList.add("hidden");
        });
    </script> --}}
</body>

{{-- CREDIT --}}
{{-- <a href="https://www.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_10798281.htm#query=website&position=36&from_view=search&track=sph">Image by upklyak</a> on Freepik --}}
{{-- <a href="https://www.flaticon.com/free-icons/computer" title="computer icons">Computer icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/android-character" title="android character icons">Android character icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/device" title="device icons">Device icons created by Flat Icons - Flaticon</a> --}}

</html>
