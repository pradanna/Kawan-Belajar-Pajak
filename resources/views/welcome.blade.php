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


    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">



    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

</head>

<body>
    <div class="">

        {{-- NAVBAR --}}
        <nav
            class="z-20 bg-white border-gray-200 fixed top-0 left-0 right-0 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-sm">
            <div class="container flex flex-wrap items-center justify-between mx-auto ">
                <a class="flex items-center" href="#">
                    <img src="{{ asset('assets/icons/logo1.png') }}" class="h-6 mr-3 sm:h-10" alt="KBP Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Kawan Belajar
                        Pajak</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#beranda" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Tentang</a>
                        </li>
                        <li>
                            <a href="#layanan" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Pendidikan</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Berita</a>
                        </li>
                        <li>
                            <a href="#client" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Testimoni</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Blog</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pl-3 pr-4 nav-link" aria-current="page">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Headline --}}
        <div class="absolute md:left-20 md:top-1/3 md:w-1/3 top-36 left-5 right-5 z-20">
            <p class="md:text-5xl text-xl font-bold leading-snug text-black text-stroke" data-aos="fade-right"
                data-aos-duration="300">
                ENJOY BELAJAR AKUNTANSI DAN PAJAK
            </p>
            <p class="mt-4" data-aos="fade-right" data-aos-duration="400">We Are Your Friends and You are My
                Friend</p>
            <div data-aos="fade-right" data-aos-duration="500">
                <a class="mt-6 inline-block button" href="#">Join Class</a>
            </div>
        </div>

        <img class="absolute  h-100% sm:block hidden obj2 z-10" src="{{ asset('assets/images/obj2.png') }}" />
        <img class="absolute  h-20 sm:block hidden bottom-0 left-10 z-20 flip-x"
            src="{{ asset('assets/images/planepaperwhite.png') }}" />
        {{-- HERO --}}
        <section class="hero  " id="beranda">


            <img class="absolute  h-100% sm:block hidden obj1" src="{{ asset('assets/images/obj1.png') }}" />
            <img class="absolute  h-32 sm:block hidden top-36 right-20 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />


            <img class="absolute  h-100% sm:block hidden obj3" src="{{ asset('assets/images/obj3.png') }}" />
            <div class="absolute right-32 bottom-0 h-75%">
                <img class=" object-bottom object-contain h-full" src="{{ asset('assets/images/heroimage.png') }}" />

                <img class="absolute object-contain  md:block hidden  acc1"
                    src="{{ asset('assets/images/heroacc3.png') }}" />

                <img class="absolute object-contain  md:block hidden  acc2"
                    src="{{ asset('assets/images/heroacc3.png') }}" />

                <img class="absolute object-contain  md:block hidden  acc3"
                    src="{{ asset('assets/images/heroacc3.png') }}" />
            </div>
        </section>

        <div style="background: linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0) 20%,
            rgba(255, 255, 255, 1)
          ), url({{ asset('assets/images/bg2.jpg') }}) no-repeat  center;"
            class="relative bg-overlay">
            {{-- KENAPA --}}
            <section class="container md:absolute relative mt-100 bg-white shadow-md  rounded-2xl p-10 z-10 mx-auto"
                style="
                left: 50%;
                transform: translate(-50%, -50px);">
                <p class="text-center md:text-4xl text-2xl font-bold mb-16"> Kenapa harus belajar akuntansi / <br> pajak
                    bersama
                    <span class="text-primary "> kawan
                        pajak? </span>
                </p>
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-5 lg:gap-10 xl:gap-16 2xl:gap-52">
                    <div class="mb-5 md:mb-0">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-primarylight2 rounded-full ">
                                <img src="{{ asset('assets/images/care.png') }}" class="h-16" />
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl mb-3">Semuanya bisa belajar
                        </p>
                        <p class="text-center text-gray-600">Kami membantu mahasiswa / pekerja / IBR / JS dalam Ilmu
                            Akuntansi dan Pajak
                        </p>
                    </div>

                    <div class="mb-5 md:mb-0">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-primarylight2 rounded-full ">
                                <img src="{{ asset('assets/images/save-money.png') }}" class="h-16" />
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl mb-3">Biaya Termurah
                        </p>
                        <p class="text-center text-gray-600">Biaya termurah di Indonesia, Mulai dari Rp 50.000 Kamu
                            bisa
                            belajar
                            Akuntansi
                            dan Pajak
                    </div>


                    <div class="mb-5 md:mb-0">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-primarylight2 rounded-full ">
                                <img src="{{ asset('assets/images/professional.png') }}" class="h-16" />
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl mb-3">Tutor yang ahli
                        </p>

                        <p class="text-center text-gray-600">Tutor Kami ahli dalam bidang Akuntansi dan Pajak. dan
                            pastinya
                            sudah
                            terferivikasi
                        </p>
                    </div>
                </div>
            </section>
            {{-- OUR SERVICE --}}


            <div class="md:h-96 h-0"></div>

            <section class="ourservice py-32 relative">
                <div class="flex justify-center">
                    <p
                        class="text-center md:text-4xl text-2xl font-bold mb-10 px-4 py-2 txt-shdw text-white z-10 bg-secondary white-shadow ">
                        Pilih
                        <span class="text-white txt-shdw"> Kelas </span>
                    </p>
                </div>


                <img class="absolute  h-96 sm:block hidden right-72 top-40 "
                    src="{{ asset('assets/images/obj1.png') }}" />
                <img class="absolute  h-24 sm:block hidden right-80 top-40 doanimation1"
                    src="{{ asset('assets/images/planepaperwhite.png') }}" />

                <div class="container  grid 2xl:grid-cols-5 md:grid-cols-3 grid-cols-1 p-5 gap-10 mx-auto">
                    <div class="2xl:block hidden"></div>
                    <div data-aos="fade-up" data-aos-duration="500">
                        <div class="flex justify-center items-center">
                            <p class="md:text-4xl text-2xl font-bold text-center text-white"
                                style="text-shadow: 2px 2px #0007;">Belajar <br> Akuntansi
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600">
                        <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                            x-effect="console.log(hover)" x-on:mouseenter="hover = true"
                            @mouseover.away="hover = false">
                            <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                                src="{{ asset('/assets/images/online-test.png') }}" />
                            <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Akuntansi <br> Online</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="700">
                        <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                            x-effect="console.log(hover)" x-on:mouseenter="hover = true"
                            @mouseover.away="hover = false">
                            <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                                src="{{ asset('/assets/images/school.png') }}" />
                            <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Akuntansi <br> In Campus
                            </p>
                        </div>
                    </div>
                </div>

                <hr class="mx-auto w-96">

                <div class="container 2xl:grid-cols-5 grid md:grid-cols-3 grid-cols-1 p-5 gap-10 mx-auto">
                    <div class="2xl:block hidden"></div>
                    <div data-aos="fade-up" data-aos-duration="500">
                        <div class="flex justify-center items-center">
                            <p class="md:text-4xl text-2xl font-bold text-center text-white  "
                                style="text-shadow: 2px 2px #0007;">Belajar
                                <br> Pajak
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600">
                        <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                            x-effect="console.log(hover)" x-on:mouseenter="hover = true"
                            @mouseover.away="hover = false">
                            <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                                src="{{ asset('/assets/images/online-test.png') }}" />
                            <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Pajak <br> Online</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="700">
                        <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                            x-effect="console.log(hover)" x-on:mouseenter="hover = true"
                            @mouseover.away="hover = false">
                            <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                                src="{{ asset('/assets/images/school.png') }}" />
                            <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Pajak <br> In Campus</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>



        {{-- RIWAYAT --}}
        <section class="riwayat ">
            <img class="absolute  h-100% sm:block hidden obj4  flip-x" src="{{ asset('assets/images/obj1.png') }}" />
            <div class="flex justify-center">
                <p
                    class="text-center md:text-4xl text-2xl font-bold mb-10 px-4 py-2 white-shadow bg-secondary text-white z-10">
                    Riwayat Peserta
                    <br>
                    <span class="text-white "> Kawan Belajar Pajak </span>
                </p>
            </div>
            <section class="splide sm:p-0 p-5 z-10" aria-label="Slide Container Example">
                <div class="splide__track container mx-auto p-5">
                    <ul class="splide__list ">
                        <li class="splide__slide">
                            <div class="splide__slide__container ">
                                <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg ">
                                    <div class="flex justify-between pb-2">
                                        <div class=" flex-grow">
                                            <p class="font-bold">Nur Imaki</p>
                                            <p class="bg-secondary text-white px-1 rounded-sm inline">Nusa Tenggara
                                                Barat
                                            </p>
                                            <p>Kepala ITB</p>
                                        </div>
                                        <div
                                            class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">
                                            <img src="https://akcdn.detik.net.id/visual/2022/12/14/kiri-avatar-the-way-of-water_169.png?w=650"
                                                class="w-full h-full object-cover" />
                                        </div>
                                    </div>


                                    <hr>

                                    <p class="text-xs text-gray-700 p-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>

                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg ">
                                    <div class="flex justify-between pb-2">
                                        <div class=" flex-grow">
                                            <p class="font-bold">Nur Imaki</p>
                                            <p class="bg-secondary text-white px-1 rounded-sm inline">Nusa Tenggara
                                                Barat
                                            </p>
                                            <p>Kepala ITB</p>
                                        </div>
                                        <div
                                            class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">
                                            <img src="https://akcdn.detik.net.id/visual/2022/12/14/kiri-avatar-the-way-of-water_169.png?w=650"
                                                class="w-full h-full object-cover" />
                                        </div>
                                    </div>


                                    <hr>

                                    <p class="text-xs text-gray-700 p-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </section>


        <section class="purpose w-full relative">
            <img class="absolute  h-100% sm:block hidden obj5  flip-x" src="{{ asset('assets/images/obj3.png') }}" />

            <img class="absolute  h-24 sm:block hidden bottom-80 right-20 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />

            <div class=" container max-w-6xl md:py-32 py-10 mx-auto z-10 relative">
                <div data-aos="fade-up" data-aos-duration="500">
                    <div class="flex justify-center items-center z-10 relative">
                        <p
                            class="md:text-4xl text-2xl z-10 text-center mb-20 px-4 py-2 font-bold text-white white-shadow bg-secondary ">
                            Cara Gampang Bergabung</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="500">
                    <div class="grid grid-cols-5 mb-20">
                        <div>
                            <div class="flex mb-3 justify-center">
                                <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" class="h-16" />
                                </a>

                            </div>
                            <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Hubungi
                                Admin
                            </p>
                        </div>
                        <hr class="my-auto border-yellow-300 border-2">

                        <div>
                            <div class="flex mb-3 justify-center">
                                <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                    <img src="{{ asset('assets/images/process.png') }}" class="h-16" />
                                </a>

                            </div>
                            <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Ikuti
                                Langkahnya
                            </p>

                        </div>
                        <hr class="my-auto border-yellow-300 border-2">
                        <div>
                            <div class="flex mb-3 justify-center">
                                <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                    <img src="{{ asset('assets/images/fan-club.png') }}" class="h-16" />
                                </a>

                            </div>
                            <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Masuk
                                kedalam grup dan Kelas dimulai
                            </p>

                        </div>
                    </div>
                </div>


                <div class=" mb-10 mt-32 grid grid-cols-5 gap-10 ">

                    <div class="relative col-span-3">
                        <img src="{{ asset('assets/images/bg3.jpg') }}" class=" white-shadow" />

                    </div>
                    <div class="col-span-2">
                        <div class="flex justify-start items-center ">
                            <p class="md:text-2xl text-2xl font-bold  mb-10 text-white bg-primary  white-shadow p-3">
                                Ketika udah bergabung dengan
                                KBP
                                Kamu Bakal</p>

                        </div>
                        <div>
                            <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3">1. Terbuka
                                tentang ilmu Pajak dan
                                Akuntansi</p>
                            <p class="md:text-lg text-xl   text-white bg-secondary  white-shadow mb-3  p-3">2. Lebih
                                Percaya
                                Diri</p>
                            <p class="md:text-lg text-xl   text-white bg-primary  white-shadow mb-3  p-3">3.
                                Produktif</p>
                            <p class="md:text-lg text-xl  text-white bg-secondary  white-shadow mb-3  p-3">4. Kompeten
                                Pada
                                -------------
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <section class="history mt-52">
            <div data-aos="fade-up" data-aos-duration="500"
                class="container mx-auto relative flex gap-10 items-start">
                <div class="" style="margin-top: -100px">
                    <div class="w-52 h-52 overflow-hidden">
                        <img src="{{ asset('assets/images/history.jpg') }}" class="w-56 object-scale-down" />
                    </div>
                </div>
                <div class="flex flex-col justify-start ">
                    <p class="md:text-4xl text-2xl font-medium  mb-2">Sejarah <span class="text-secondary">KBP</span>
                        dan Tujuan </p>
                    <p class="text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>
        </section> --}}

        </section>

        <a class="anchor" id="contact"></a>
        <section class="kontak" class="mt-10">

            <div class="mx-auto container">

                <div class="">
                    <div class="info">
                        <p class="text-4xl text-center" data-aos="fade-up" data-aos-duration="300"><span
                                class="text-primary font-bold">Kontak </span> Kami
                        </p>
                        <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600" data-aos="fade-up"
                            data-aos-duration="300">Office</p>
                        <a class="text-center link font-bold text-lg block" data-aos="fade-up"
                            data-aos-duration="300" href="https://goo.gl/maps/HKvAqTnJS7nkijZ9A"
                            target="_blank">Jayengan Kidul RT 003 RW 008 Jayengan Serengan
                            Surakarta
                        </a>

                        <div class="md:grid md:grid-cols-3 " data-aos="fade-up" data-aos-duration="300">
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Instagram</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.instagram.com/kawanbelajarpajak/?hl=cs"
                                    target="_blank">@temanbelajarakuntansi
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Whatsapp</p>
                                <a class="text-center link font-bold block text-lg" href="https://wa.me/628975050520"
                                    target="_blank">0897-5050-520
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Facebook</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.facebook.com/pembelajaranpajak/" target="_blank">KBP Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer  ">
            <div class="container grid md:grid-cols-4 grid-cols-1 gap-10 md:mx-auto md:px-0 px-5">
                <div class="md:col-span-2">

                    <p class="title ">Sejarah Singkat</p>
                    <p class="content text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
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


                </div>
                <div>
                    <img src="{{ asset('assets/icons/logo1.png') }}" />
                    <p class="title mt-10">Credit</p>
                    <a class="py-2 px-4  hover:bg-black bg-gray-700 text-white rounded-2xl cursor-pointer transition-all duration-300"
                        data-modal-target="kreditModal" data-modal-toggle="kreditModal">Image Source </a>
                </div>




            </div>
        </footer>
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
                    <a href="https://www.flaticon.com/free-icons/contact" title="contact icons">Contact icons created
                        by Vector Stall - Flaticon</a>
                    <a href="https://www.flaticon.com/free-icons/process" title="process icons">Process icons created
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
</body>

{{-- CREDIT --}}
{{-- <a href="https://www.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_10798281.htm#query=website&position=36&from_view=search&track=sph">Image by upklyak</a> on Freepik --}}
{{-- <a href="https://www.flaticon.com/free-icons/computer" title="computer icons">Computer icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/android-character" title="android character icons">Android character icons created by Freepik - Flaticon</a> --}}
{{-- <a href="https://www.flaticon.com/free-icons/device" title="device icons">Device icons created by Flat Icons - Flaticon</a> --}}

</html>
