@extends('base')

@section('content')
    {{-- Headline --}}
    <div class="absolute md:left-28 md:top-1/4 md:w-1/3 top-36 left-5 right-5 z-20">
        <p class="md:text-7xl text-xl font-bold leading-snug text-black " data-aos="fade-right" data-aos-duration="300">
            {{ $hero->jargon_1 }}
        </p>
        <p class="mt-4 md:text-2xl text-xl" data-aos="fade-right" data-aos-duration="400">{{ $hero->jargon_2 }}</p>
        <div data-aos="fade-right" data-aos-duration="500">
            <a class="mt-6 inline-block button-joinclass" href="#">Join Class</a>
        </div>
    </div>

    <img class="absolute  h-100% sm:block hidden obj2 z-10" src="{{ asset('assets/images/obj2.png') }}"/>
    <img class="absolute  h-20 sm:block hidden bottom-0 left-10 z-20 flip-x"
         src="{{ asset('assets/images/planepaperwhite.png') }}"/>
    {{-- HERO --}}
    <section class="hero  " id="beranda">


        <img class="absolute  h-100% sm:block hidden obj1" src="{{ asset('assets/images/obj1.png') }}"/>
        <img class="absolute  h-32 sm:block hidden top-36 right-20 "
             src="{{ asset('assets/images/planepaperwhite.png') }}"/>


        <img class="absolute  h-100% sm:block hidden obj3" src="{{ asset('assets/images/obj3.png') }}"/>
        <div class="absolute right-32 bottom-0 h-75%">
            <img class=" object-bottom object-contain h-full" src="{{ asset('assets/images/sertifikat.jpg') }}"/>


        </div>
    </section>

    <div style="background: linear-gradient(
        to bottom,
        rgba(255, 255, 255, 0) 20%,
        rgba(255, 255, 255, 1)
        ), url({{ asset('assets/images/bg2.jpg') }}) no-repeat  center;"
         class="relative bg-overlay px-5">
        {{-- KENAPA --}}
        <section class="container md:absolute relative mt-100 bg-white shadow-md  rounded-2xl p-10 z-10 mx-auto"
                 style="
        left: 50%;
        transform: translate(-50%, -50px);">
            <p class="text-4xl text-center mb-20" data-aos="fade-up" data-aos-duration="300"><span
                    class="text-primary font-bold">Tentang </span> Kami
            </p>

            <div class="flex flex-row-reverse gap-10">

                <div>
                    {!! $hero->about_me !!}
                    {{--                    <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3 mr-10">LKP Kawan Belajar--}}
                    {{--                        Pajak merupakan media pembelajaran akuntansi dan perpajakan--}}
                    {{--                        yang dimiliki oleh PT KINERJA BERKAH PRATAMA. Yang telah terdaftar di OSIS Nomor--}}
                    {{--                        201022000568755--}}
                    {{--                        dengan KBLI 85491, 85495 dan 85499.</p>--}}
                    {{--                    <p class="md:text-lg text-xl   text-black bg-secondary  white-shadow mb-3  p-3 ml-10">Berbekal--}}
                    {{--                        dari--}}
                    {{--                        pengalaman praktik kami bekerja di lapangan, kami mengajak teman-teman semuanya untuk--}}
                    {{--                        bergabung dan belajar tentang akuntansi serta bagaimana penerapan akuntansi di lapangan.--}}
                    {{--                        Kami--}}
                    {{--                        berangkat dari banyak kegelisahan teman-teman baik siswa akuntansi, mahasiswa akuntansi,--}}
                    {{--                        mahasiswa--}}
                    {{--                        perpajakan dan juga yang sifatnya umum seperti pelaku UMKM yang masih kebingungan dalam--}}
                    {{--                        pengelolaan--}}
                    {{--                        keuangan usaha/bisnisnya.</p>--}}
                    {{--                    <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3 mr-10">Oleh karena--}}
                    {{--                        itu,--}}
                    {{--                        harapan--}}
                    {{--                        dan tujuan kita adalah memecahkan kegelisahan tersebut dengan cara membantu--}}
                    {{--                        teman-teman semuanya. Arti teman/kawan belajar memiliki makna bahwa kita adalah teman kalian--}}
                    {{--                        dan--}}
                    {{--                        kalian adalah teman kita. Jadi anggap saja kita seperti teman dekat atau bahkan keluarga--}}
                    {{--                        (tidak--}}
                    {{--                        usah--}}
                    {{--                        sungkan).</p>--}}
                </div>
            </div>
            {{-- <p class="text-center md:text-4xl text-2xl font-bold mb-16"> Kenapa harus belajar akuntansi / <br> pajak
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
            </div> --}}

        </section>
        {{-- OUR SERVICE --}}


        <div class="md:h-pilihkelas h-0"></div>

        <section class="ourservice py-32 relative">
            <div class="flex justify-center">
                <p
                    class="text-center md:text-4xl text-2xl font-bold mb-10 px-4 py-2 txt-shdw text-white z-10 bg-secondary white-shadow ">
                    Pilih
                    <span class="text-white txt-shdw"> Kelas </span>
                </p>
            </div>


            <img class="absolute  h-96 sm:block hidden right-72 top-40 " src="{{ asset('assets/images/obj1.png') }}"/>
            <img class="absolute  h-24 sm:block hidden right-80 top-40 doanimation1"
                 src="{{ asset('assets/images/planepaperwhite.png') }}"/>

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
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/online-test.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Akuntansi <br> Online</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/school.png') }}"/>
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
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/online-test.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Pajak <br> Online</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/school.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">Belajar Pajak <br> In Campus</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    {{-- RIWAYAT --}}
    <section class="riwayat ">
        <img class="absolute  h-100% sm:block hidden obj4  flip-x" src="{{ asset('assets/images/obj1.png') }}"/>
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
                    @foreach($testimony as $v)
                        <li class="splide__slide">
                            <div class="splide__slide__container ">
                                <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg ">
                                    <div class="flex justify-between pb-2">
                                        <div class=" flex-grow">
                                            <p class="font-bold">{{ $v->name }}</p>
                                            <p class="bg-secondary text-white px-1 rounded-sm inline">{{ $v->origin }}
                                            </p>
                                            <p>{{ $v->job }}</p>
                                        </div>
                                        <div
                                            class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">
                                            <img
                                                src="{{ asset($v->image) }}"
                                                class="w-full h-full object-cover"/>
                                        </div>
                                    </div>


                                    <hr>

                                    <p class="text-xs text-gray-700 p-3">
                                        {{ $v->testimony }}
                                    </p>
                                </div>
                            </div>

                        </li>
                    @endforeach
{{--                    <li class="splide__slide">--}}
{{--                        <div class="splide__slide__container">--}}
{{--                            <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg ">--}}
{{--                                <div class="flex justify-between pb-2">--}}
{{--                                    <div class=" flex-grow">--}}
{{--                                        <p class="font-bold">Nur Imaki</p>--}}
{{--                                        <p class="bg-secondary text-white px-1 rounded-sm inline">Nusa Tenggara--}}
{{--                                            Barat--}}
{{--                                        </p>--}}
{{--                                        <p>Kepala ITB</p>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">--}}
{{--                                        <img--}}
{{--                                            src="https://akcdn.detik.net.id/visual/2022/12/14/kiri-avatar-the-way-of-water_169.png?w=650"--}}
{{--                                            class="w-full h-full object-cover"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <hr>--}}

{{--                                <p class="text-xs text-gray-700 p-3">--}}
{{--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
{{--                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an--}}
{{--                                    unknown printer took a galley of type and scrambled it to make a type specimen--}}
{{--                                    book. It has survived not only five centuries, but also the leap into electronic--}}
{{--                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s--}}
{{--                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more--}}
{{--                                    recently with desktop publishing software like Aldus PageMaker including--}}
{{--                                    versions of Lorem Ipsum.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </section>

    </section>


    <section class="purpose w-full relative overflow-hidden">
        <img class="absolute   sm:block hidden obj5  flip-x" src="{{ asset('assets/images/obj3.png') }}"/>

        <img class="absolute  h-24 sm:block hidden bottom-80 right-20 "
             src="{{ asset('assets/images/planepaperwhite.png') }}"/>

        <div class=" container max-w-6xl md:py-32 py-10 mx-auto z-10 relative">
            <div data-aos="fade-up" data-aos-duration="500">
                <div class="flex justify-center items-center z-10 relative">
                    <p
                        class="md:text-4xl text-2xl z-10 text-center mb-20 px-4 py-2 font-bold text-white white-shadow bg-secondary ">
                        Cara Gampang Bergabung</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500">
                <div class="grid sm:grid-cols-5 grid-cols-1 mb-20 px-5">
                    <div class="sm:mb-0 mb-10">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                <img src="{{ asset('assets/images/avatar.png') }}" class="h-16"/>
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Hubungi
                            Admin
                        </p>
                    </div>
                    <hr class="my-auto border-yellow-300 border-2 md:block hidden">

                    <div class="sm:mb-0 mb-10">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                <img src="{{ asset('assets/images/process.png') }}" class="h-16"/>
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Ikuti
                            Langkahnya
                        </p>

                    </div>
                    <hr class="my-auto border-yellow-300 border-2 md:block hidden">
                    <div class="sm:mb-0 mb-10">
                        <div class="flex mb-3 justify-center">
                            <a class="flex justify-center items-center p-3 bg-secondary rounded-full ">
                                <img src="{{ asset('assets/images/fan-club.png') }}" class="h-16"/>
                            </a>

                        </div>
                        <p class="text-center font-bold text-xl text-black bg-secondary  white-shadow">Masuk
                            kedalam grup dan Kelas dimulai
                        </p>

                    </div>
                </div>
            </div>


            <div class=" mb-10 mt-32 md:grid md:grid-cols-5  gap-10 md:px-0 px-5">

                <div class="relative col-span-3 md:block hidden">
                    <img src="{{ asset('assets/images/bg3.jpg') }}" class=" white-shadow"/>

                </div>
                <div class="col-span-2">
                    <div class="flex justify-start items-center ">
                        <p class="md:text-2xl text-2xl font-bold  mb-10 text-white bg-primary  white-shadow p-3">
                            Ketika udah bergabung dengan
                            KBP
                            Kamu Bakal</p>

                    </div>
                    <div>
                        <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3 mr-6">1. Terbuka
                            tentang ilmu Pajak dan
                            Akuntansi</p>
                        <p class="md:text-lg text-xl   text-white bg-secondary  white-shadow mb-3  p-3 ml-6">2. Lebih
                            Percaya
                            Diri</p>
                        <p class="md:text-lg text-xl   text-white bg-primary  white-shadow mb-3  p-3 mr-6">3.
                            Produktif</p>
                        <p class="md:text-lg text-xl  text-white bg-secondary  white-shadow mb-3  p-3 ml-6">4. Kompeten
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

    {{-- <section class="kontak" class="mt-10">

        <div class="mx-auto container">

            <div class="">
                <div class="info">
                    <p class="text-4xl text-center mb-20" data-aos="fade-up" data-aos-duration="300"><span
                            class="text-primary font-bold">Tentang </span> Kami
                    </p>

                    <div class="flex flex-row-reverse gap-10">
                        <div>
                            <img src="{{ asset('assets/images/sertifikat.jpg') }}" class=" object-contain"
                                style="width: 100rem" />
                        </div>
                        <div>
                            <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3 mr-10">Teman
                                Belajan
                                Akuntansu
                                dan Kawan Belajar Pajak merupakan media pembelajaran akuntansi dan perpajakan
                                yang dimiliki oleh PT KINERJA BERKAH PRATAMA. Yang telah terdaftar di OSIS Nomor
                                201022000568755
                                dengan KBLI 85491, 85495 dan 85499.</p>
                            <p class="md:text-lg text-xl   text-white bg-secondary  white-shadow mb-3  p-3 ml-10">Berbekal
                                dari
                                pengalaman praktik kami bekerja di lapangan, kami mengajak teman-teman semuanya untuk
                                bergabung dan belajar tentang akuntansi serta bagaimana penerapan akuntansi di lapangan.
                                Kami
                                berangkat dari banyak kegelisahan teman-teman baik siswa akuntansi, mahasiswa akuntansi,
                                mahasiswa
                                perpajakan dan juga yang sifatnya umum seperti pelaku UMKM yang masih kebingungan dalam
                                pengelolaan
                                keuangan usaha/bisnisnya.</p>
                            <p class="md:text-lg text-xl   mb-3 text-white bg-primary  white-shadow p-3 mr-10">Oleh karena
                                itu,
                                harapan
                                dan tujuan kita adalah memecahkan kegelisahan tersebut dengan cara membantu
                                teman-teman semuanya. Arti teman/kawan belajar memiliki makna bahwa kita adalah teman kalian
                                dan
                                kalian adalah teman kita. Jadi anggap saja kita seperti teman dekat atau bahkan keluarga
                                (tidak
                                usah
                                sungkan).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="kontak" class="mt-10">

        <div class="mx-auto container">

            <div class="">
                <div class="info">
                    <p class="text-4xl text-center" data-aos="fade-up" data-aos-duration="300"><span
                            class="text-primary font-bold">Kontak </span> Kami
                    </p>
                    <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600" data-aos="fade-up"
                       data-aos-duration="300">
                        Office</p>
                    <a class="text-center link font-bold text-lg block" data-aos="fade-up" data-aos-duration="300"
                       href="https://goo.gl/maps/HKvAqTnJS7nkijZ9A" target="_blank">Jayengan Kidul RT 003 RW 008
                        Jayengan
                        Serengan
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
                            <a class="text-center link font-bold block text-lg" href="https://wa.me/6281336329811"
                               target="_blank">0813-3632-9811
                            </a>
                        </div>
                        <div>
                            <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Instagram</p>
                            <a class="text-center link font-bold block text-lg"
                               href="https://www.instagram.com/kawanbelajarpajak/?hl=cs"
                               target="_blank">@kawanbelajarpajak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
