@extends('base')

@section('morecss')
    <style>
        .splide__slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="bg-blue ">

        <div class="h-20"></div>


        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">PENDIDIKAN</p>
        </section>

        <section class="ourservice relative z-10 mb-40">

            <div class="container  grid md:grid-cols-4 grid-cols-1 p-5 gap-10 mx-auto">

                <div data-aos="fade-up" data-aos-duration="600">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/accounting.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">AKUNTANSI</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/tax.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">PAJAK
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/welfare.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">FASILITAS
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700">
                    <div class="card flex flex-col p-3 justify-center items-center" x-data="{ hover: false }"
                         x-effect="console.log(hover)" x-on:mouseenter="hover = true" @mouseover.away="hover = false">
                        <img class="h-16 icon object-contain" :class="hover ? 'hovered' : ''"
                             src="{{ asset('/assets/images/incentive.png') }}"/>
                        <p class="text-center mt-3 text-lg font-medium leading-5">BENEFIT
                        </p>
                    </div>
                </div>
            </div>


        </section>

        <section class="container mx-auto">
            <div class="flex items-end border-b-2">
                <div class="p-2">
                    <img class="h-12 icon object-contain" :class="hover ? 'hovered' : ''"
                         src="{{ asset('/assets/images/accountingw.png') }}"/>
                </div>

                <p class="text-2xl text-white font-bold">Akuntansi</p>
            </div>

            <div>
                <div class=" bg-blue flex justify-start items-center relative mt-16">
                    <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BELAJAR
                        AKUNTANSI OFFLINE</p>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-10">
                    @foreach($educations_offline as $eo)
                        <div class="bg-white p-3 secondary-shadow">
                            <p class="font-bold pb-2">{{ $eo->name }}</p>
                            <hr>
                            <p class="text-sm pt-2 pb-2 text-gray-600">{{ $eo->description }}</p>
                            <hr>
                            <p class="text-primary pt-2 font-semibold">Jadwal Belajar:
                                <br>
                                {{ $eo->schedule }}
                            </p>
                            <a class="block button-primary mt-3 text-center">
                                Harga: Rp {{ number_format($eo->price, 0, ',', '.') }} /Pertemuan <br>
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class=" bg-blue flex justify-start items-center relative mt-16">
                    <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BELAJAR
                        AKUNTANSI ONLINE</p>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-10">

                    @foreach($educations_online as $eon)
                        <div class="bg-white p-3 secondary-shadow">
                            <p class="font-bold pb-2">{{ $eon->name }}</p>
                            <hr>
                            <p class="text-sm pt-2 pb-2 text-gray-600">{{ $eon->description }}</p>
                            <hr>
                            <p class="text-primary pt-2 font-semibold">Jadwal Belajar:
                                <br>
                                {{ $eon->schedule }}
                            </p>
                            <a class="block button-primary mt-3 text-center">
                                Harga: Rp {{ number_format($eon->price, 0, ',', '.') }} /Pertemuan <br>
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>

        <section class="container mx-auto mt-32">
            <div class="flex items-end border-b-2">
                <div class="p-2">
                    <img class="h-12 icon object-contain" :class="hover ? 'hovered' : ''"
                         src="{{ asset('/assets/images/taxw.png') }}"/>
                </div>

                <p class="text-2xl text-white font-bold">Pajak</p>
            </div>

            <div>
                <div class=" bg-blue flex justify-start items-center relative mt-16">
                    <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BELAJAR
                        PAJAK
                        OFFLINE</p>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-10">
                    @foreach($tax_offline as $to)

                        <div class="bg-white p-3 secondary-shadow">
                            <p class="font-bold pb-2">{{ $to->name }}</p>
                            <hr>
                            <p class="text-sm pt-2 pb-2 text-gray-600">{{ $to->description }}</p>
                            <hr>
                            <p class="text-primary pt-2 font-semibold">Jadwal Belajar:
                                <br>
                                {{ $to->schedule }}
                            </p>
                            <a class="block button-primary mt-3 text-center">
                                Harga: Rp {{ number_format($to->price, 0, ',', '.') }} /Pertemuan <br>
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class=" bg-blue flex justify-start items-center relative mt-16">
                    <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BELAJAR
                        PAJAK
                        ONLINE</p>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-10">
                    @foreach($tax_online as $ton)

                        <div class="bg-white p-3 secondary-shadow">
                            <p class="font-bold pb-2">{{ $ton->name }}</p>
                            <hr>
                            <p class="text-sm pt-2 pb-2 text-gray-600">{{ $ton->description }}</p>
                            <hr>
                            <p class="text-primary pt-2 font-semibold">Jadwal Belajar:
                                <br>
                                {{ $ton->schedule }}
                            </p>
                            <a class="block button-primary mt-3 text-center">
                                Harga: Rp {{ number_format($ton->price, 0, ',', '.') }} /Pertemuan <br>
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>

        <section class="container mx-auto mt-32">
            <div class="flex items-end border-b-2">
                <div class="p-2">
                    <img class="h-12 icon object-contain" :class="hover ? 'hovered' : ''"
                         src="{{ asset('/assets/images/welfarew.png') }}"/>
                </div>

                <p class="text-2xl text-white font-bold">Fasilitas</p>
            </div>

            <div class="fasilitas">
                @foreach($facilities as $f)
                    <p class="white-shadow my-5">{{ $f->description }}</p>
                @endforeach
            </div>
        </section>

        <section class="container mx-auto mt-32">
            <div class="flex items-end border-b-2">
                <div class="p-2">
                    <img class="h-12 icon object-contain" :class="hover ? 'hovered' : ''"
                         src="{{ asset('/assets/images/incentivew.png') }}"/>
                </div>

                <p class="text-2xl text-white font-bold">Benefit</p>
            </div>

            <div class="fasilitas">
                @foreach($benefits as $b)
                    <p class="white-shadow my-5">{{ $b->description }}</p>
                @endforeach
            </div>
        </section>


        <div class=" overflow-hidden">
            <img class="absolute  h-100% sm:block hidden " style="right: -30rem; top: -10rem"
                 src="{{ asset('assets/images/obj1.png') }}"/>
            <img class="absolute  h-32 sm:block hidden top-36 right-20 "
                 src="{{ asset('assets/images/planepaperwhite.png') }}"/>
        </div>


    </div>
@endsection
@section('morejs')
@endsection
