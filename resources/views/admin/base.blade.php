<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kawan Belajar Pajak || Mari Belajar Pajak Bersama Kami</title>

    {{-- Genosstyle --}}
    {{-- <link href="{{ asset('css/genosstyle.css') }} " rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/genosstailwind.css') }}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Add the theme's stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    {{-- AOS JS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    {{-- FLOWBITE --}}




    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

    @yield('morecss')
</head>

<body class="relative min-h-screen">

    <nav class="h-[70px] bg-white  top-0 w-full shadow-sm z-20 fixed">
        <div class="px-[24px] relative h-full flex items-center z-20 justify-between">

            <div class=" h-full flex items-center">
                <a onclick="openNav()"><span
                        class="material-symbols-outlined cursor-pointer rounded-full p-2 hover:bg-black/10 transition duration-300">
                        menu
                    </span></a>

                {{-- <img src="{{ asset('/assets/local/logosurakarta.png') }}" class="logo   h-10   " alt="Surakarta Logo"> --}}

                <p class="text-xl font-bold ml-4">Kawan Belajar Pajak </p>
            </div>

            <div class=" h-full flex items-center">
                <button type="button" id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="block w-[35px] h-[35px] rounded-full bg-black/10 cursor-pointer overflow-hidden">
                    <img src="{{ asset('local/images/account.png') }}" class="logo   h-full w-full   "
                        alt="Profil Logo">
                </button>


                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow ">
                    <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">

                        <a class="block py-2 px-4 text-xs   text-black/30 ">Username</a>
                        <div class="divide-y-2"></div>
                        <li>
                            <a class="block py-2 px-4 hover:bg-gray-100  text-red-600 cursor-pointer">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </nav>

    <div class="flex h-full">
        <div id="sidebar" class="bg-white shadow-sm h-full fixed top-0 left-0 sidebar">
            <div class="min-h-[70px]"></div>
            <div class="p-3 py-5">



                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link" href="/admin">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Beranda</p>
                </a>
                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('admintentang') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Tentang</p>
                </a>
                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('adminpendidikan') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Pendidikan</p>
                </a>

                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('adminberita') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Berita</p>
                </a>

                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('admintestimoni') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Testimoni</p>
                </a>

                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('adminblog') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Blog</p>
                </a>

                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link"
                    href="{{ route('adminkontak') }}">

                    <img src="{{ asset('local/icons/dashboard.svg') }}"
                        class=" mr-2 menu-icon text-sm w-6 object-scale-down">
                    <p class="title-menu block menu-text">Kontak</p>
                </a>


            </div>
        </div>

        {{-- CONTENT --}}
        <div class="w-full">
            <div class="h-[70px]">

            </div>

            <div class="flex " style="min-height: calc(100vh - 70px)">
                <div class="side">

                </div>
                <div class="flex-1">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    {{-- <script type="text/javascript">
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-180");
        }

        dropdown();
    </script>

    <script type="text/javascript">
        function dropdownlaporan() {
            document.querySelector("#submenulaporan").classList.toggle("hidden");
            document.querySelector("#arrowlaporan").classList.toggle("rotate-180");
        }

        dropdownlaporan();
    </script> --}}

    {{-- <script src="{{ asset('/js/flowbite.js') }}"></script> --}}

    <script src="{{ asset('/js/admin/nav.js') }}"></script>
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> --}}
    {{-- <script src="{{ asset('js/datatable.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>

    @yield('morejs')


</body>

</html>
