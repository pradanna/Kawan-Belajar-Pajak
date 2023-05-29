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
        <img class="absolute  h-100% sm:block hidden obj2 z-10" src="{{ asset('assets/images/obj2.png') }}" />
        <img class="absolute  h-20 sm:block hidden bottom-0 left-10 z-10 flip-x"
            src="{{ asset('assets/images/planepaperwhite.png') }}" />


        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">TENTANG KAMI</p>
        </section>


        <div class=" overflow-hidden">
            <img class="absolute  h-100% sm:block hidden " style="right: -30rem; top: -10rem"
                src="{{ asset('assets/images/obj1.png') }}" />
            <img class="absolute  h-32 sm:block hidden top-36 right-20 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />
        </div>

        {{-- SEJARAH BERDIRI --}}
        <section class="relative md:mx-0 mx-2">

            <div class="container relative mx-auto z-10">
                <div class="flex gap-4">
                    <p class="inline-block p-3 text-2xl text-white bg-primary white-shadow font-bold">Sejarah
                        Berdiri</p>
                    <div class="h-3 w-3 bg-white mt-2"></div>
                    <div class="h-3 w-3 bg-white mt-2"></div>
                    <div class="h-3 w-3 bg-white mt-2"></div>
                </div>

                <div class="bg-white min-h-20" style="margin-top: -2rem; margin-left: 2rem">
                    <div class="p-10">{!! $about->history !!}</div>
                </div>
            </div>
        </section>


        {{-- SEJARAH BERDIRI --}}
        <section class="md:mx-0 mx-2">
            <div class="container relative mx-auto pt-20 z-10">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div>
                        <div class="flex gap-4">
                            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold px-6">
                                Visi
                            </p>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                        </div>
                        <div class="bg-primary min-h-20" style="margin-top: -2rem; margin-left: 2rem">
                            <div class="p-10 text-white">{!! $about->vision !!}</div>
                        </div>
                    </div>
                    <div>
                        <div class="flex gap-4">
                            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold px-6">
                                Misi
                            </p>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                            <div class="h-3 w-3 bg-white mt-2"></div>
                        </div>
                        <div class="bg-primary min-h-20" style="margin-top: -2rem; margin-left: 2rem">
                            <div class="p-10 text-white">{!! $about->mission !!}</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- TEAM --}}
        <section class="md:mx-0 mx-2">
            <div class="container relative mx-auto pt-40 z-10">

                <div class="flex justify-center mt-20">
                    <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold ">Super Team
                        di
                        Kawan
                        Belajar Pajak</p>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-16 px-5 sm:px-0" class="z-10">
                    @foreach ($teams as $team)
                        <div>
                            <div class="flex gap-4">
                                <div class="white-shadow">
                                    <img src="{{ asset($team->image) }}" class="object-cover w-32 h-44" />
                                </div>
                                <div class="h-3 w-3 bg-white mt-2"></div>
                                <div class="h-3 w-3 bg-white mt-2"></div>
                                <div class="h-3 w-3 bg-white mt-2"></div>
                            </div>
                            <div class="bg-white  p-3 pl-28"
                                style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;">
                                <p class="font-bold">{{ $team->name }}</p>
                                <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">{{ $team->position }}</p>
                                <p class="text-xs text-gray-600">{{ $team->motto }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div> --}}
                    {{--                        <div class="flex gap-4"> --}}
                    {{--                            <div class="white-shadow"> --}}
                    {{--                                <img src="{{ asset('assets/images/ava.png') }}" class="object-cover w-32 h-44"/> --}}
                    {{--                            </div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                        </div> --}}
                    {{--                        <div class="bg-white  p-3 pl-28" --}}
                    {{--                             style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;"> --}}
                    {{--                            <p class="font-bold">Nama Orang</p> --}}
                    {{--                            <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">Posisi</p> --}}
                    {{--                            <p class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the printing and --}}
                    {{--                                typesetting --}}
                    {{--                                industry. --}}
                    {{--                                Lorem --}}
                    {{--                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                    {{--                                unknown printer took a galley of type and scrambled it to make a type specimen --}}
                    {{--                                book. It has survived not only five centuries, but also the leap into electronic --}}
                    {{--                                typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                    {{--                                with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                    {{--                                recently with desktop publishing software like Aldus PageMaker including --}}
                    {{--                                versions of Lorem Ipsum.</p> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}

                    {{--                    <div> --}}
                    {{--                        <div class="flex gap-4"> --}}
                    {{--                            <div class="white-shadow"> --}}
                    {{--                                <img src="{{ asset('assets/images/ava.png') }}" class="object-cover w-32 h-44"/> --}}
                    {{--                            </div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                        </div> --}}
                    {{--                        <div class="bg-white  p-3 pl-28" --}}
                    {{--                             style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;"> --}}
                    {{--                            <p class="font-bold">Nama Orang</p> --}}
                    {{--                            <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">Posisi</p> --}}
                    {{--                            <p class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the printing and --}}
                    {{--                                typesetting --}}
                    {{--                                industry. --}}
                    {{--                                Lorem --}}
                    {{--                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                    {{--                                unknown printer took a galley of type and scrambled it to make a type specimen --}}
                    {{--                                book. It has survived not only five centuries, but also the leap into electronic --}}
                    {{--                                typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                    {{--                                with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                    {{--                                recently with desktop publishing software like Aldus PageMaker including --}}
                    {{--                                versions of Lorem Ipsum.</p> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}

                    {{--                    <div> --}}
                    {{--                        <div class="flex gap-4"> --}}
                    {{--                            <div class="white-shadow"> --}}
                    {{--                                <img src="{{ asset('assets/images/ava.png') }}" class="object-cover w-32 h-44"/> --}}
                    {{--                            </div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                        </div> --}}
                    {{--                        <div class="bg-white  p-3 pl-28" --}}
                    {{--                             style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;"> --}}
                    {{--                            <p class="font-bold">Nama Orang</p> --}}
                    {{--                            <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">Posisi</p> --}}
                    {{--                            <p class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the printing and --}}
                    {{--                                typesetting --}}
                    {{--                                industry. --}}
                    {{--                                Lorem --}}
                    {{--                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                    {{--                                unknown printer took a galley of type and scrambled it to make a type specimen --}}
                    {{--                                book. It has survived not only five centuries, but also the leap into electronic --}}
                    {{--                                typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                    {{--                                with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                    {{--                                recently with desktop publishing software like Aldus PageMaker including --}}
                    {{--                                versions of Lorem Ipsum.</p> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}

                    {{--                    <div> --}}
                    {{--                        <div class="flex gap-4"> --}}
                    {{--                            <div class="white-shadow"> --}}
                    {{--                                <img src="{{ asset('assets/images/ava.png') }}" class="object-cover w-32 h-44"/> --}}
                    {{--                            </div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                        </div> --}}
                    {{--                        <div class="bg-white  p-3 pl-28" --}}
                    {{--                             style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;"> --}}
                    {{--                            <p class="font-bold">Nama Orang</p> --}}
                    {{--                            <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">Posisi</p> --}}
                    {{--                            <p class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the printing and --}}
                    {{--                                typesetting --}}
                    {{--                                industry. --}}
                    {{--                                Lorem --}}
                    {{--                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                    {{--                                unknown printer took a galley of type and scrambled it to make a type specimen --}}
                    {{--                                book. It has survived not only five centuries, but also the leap into electronic --}}
                    {{--                                typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                    {{--                                with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                    {{--                                recently with desktop publishing software like Aldus PageMaker including --}}
                    {{--                                versions of Lorem Ipsum.</p> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}

                    {{--                    <div> --}}
                    {{--                        <div class="flex gap-4"> --}}
                    {{--                            <div class="white-shadow"> --}}
                    {{--                                <img src="{{ asset('assets/images/ava.png') }}" class="object-cover w-32 h-44"/> --}}
                    {{--                            </div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                            <div class="h-3 w-3 bg-white mt-2"></div> --}}
                    {{--                        </div> --}}
                    {{--                        <div class="bg-white  p-3 pl-28" --}}
                    {{--                             style="margin-top: -9rem; min-height: 8rem; margin-left: 2rem;"> --}}
                    {{--                            <p class="font-bold">Nama Orang</p> --}}
                    {{--                            <p class="bg-primary px-2 mb-3 text-sm font-bold text-white">Posisi</p> --}}
                    {{--                            <p class="text-xs text-gray-600">Lorem Ipsum is simply dummy text of the printing and --}}
                    {{--                                typesetting --}}
                    {{--                                industry. --}}
                    {{--                                Lorem --}}
                    {{--                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                    {{--                                unknown printer took a galley of type and scrambled it to make a type specimen --}}
                    {{--                                book. It has survived not only five centuries, but also the leap into electronic --}}
                    {{--                                typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                    {{--                                with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                    {{--                                recently with desktop publishing software like Aldus PageMaker including --}}
                    {{--                                versions of Lorem Ipsum.</p> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}
                </div>
            </div>
        </section>


        {{-- SISWA --}}
        <section class="riwayat ">
            <img class="absolute  h-100% sm:block hidden obj4  flip-x" src="{{ asset('assets/images/obj1.png') }}" />
            <img class="absolute  h-20 sm:block hidden bottom-0 left-10 z-10 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />
            <div class="flex justify-center mt-40">
                <p
                    class="text-center md:text-4xl text-2xl font-bold mb-10 px-4 py-2 white-shadow bg-secondary text-white z-10">
                    Siswa Kami
                </p>
            </div>
            <section class="splide sm:p-0 p-5 z-10" aria-label="Slide Container Example">
                <div class="splide__track container mx-auto p-5">
                    <ul class="splide__list ">
                        @foreach ($students as $student)
                            <li class="splide__slide">
                                <div class="splide__slide__container ">
                                    <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg ">
                                        <div class="flex justify-between pb-2">
                                            <div class=" flex-grow">
                                                <p class="font-bold">{{ $student->name }}</p>
                                                <p class="bg-secondary text-white px-1 rounded-sm inline">
                                                    {{ $student->origin }}
                                                </p>
                                                <p>{{ $student->job }}</p>
                                            </div>
                                            <div
                                                class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">
                                                <img src="{{ asset($student->image) }}"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>


                                        <hr>

                                        <p class="text-xs text-gray-700 p-3">
                                            {{ $student->testimony }}
                                        </p>
                                    </div>
                                </div>

                            </li>
                        @endforeach
                        {{--                        <li class="splide__slide"> --}}
                        {{--                            <div class="splide__slide__container"> --}}
                        {{--                                <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg "> --}}
                        {{--                                    <div class="flex justify-between pb-2"> --}}
                        {{--                                        <div class=" flex-grow"> --}}
                        {{--                                            <p class="font-bold">Nur Imaki</p> --}}
                        {{--                                            <p class="bg-secondary text-white px-1 rounded-sm inline">Nusa Tenggara --}}
                        {{--                                                Barat --}}
                        {{--                                            </p> --}}
                        {{--                                            <p>Kepala ITB</p> --}}
                        {{--                                        </div> --}}
                        {{--                                        <div --}}
                        {{--                                            class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full"> --}}
                        {{--                                            <img --}}
                        {{--                                                src="https://akcdn.detik.net.id/visual/2022/12/14/kiri-avatar-the-way-of-water_169.png?w=650" --}}
                        {{--                                                class="w-full h-full object-cover"/> --}}
                        {{--                                        </div> --}}
                        {{--                                    </div> --}}


                        {{--                                    <hr> --}}

                        {{--                                    <p class="text-xs text-gray-700 p-3"> --}}
                        {{--                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem --}}
                        {{--                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an --}}
                        {{--                                        unknown printer took a galley of type and scrambled it to make a type specimen --}}
                        {{--                                        book. It has survived not only five centuries, but also the leap into electronic --}}
                        {{--                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s --}}
                        {{--                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more --}}
                        {{--                                        recently with desktop publishing software like Aldus PageMaker including --}}
                        {{--                                        versions of Lorem Ipsum. --}}
                        {{--                                    </p> --}}
                        {{--                                </div> --}}
                        {{--                            </div> --}}
                        {{--                        </li> --}}
                    </ul>
                </div>
            </section>

        </section>

        {{-- LINGKUNGAN BELAJAR --}}
        <section class="riwayat overflow-hidden mx-5 sm:mx-0">
            <img class="absolute  h-100% sm:block hidden obj5  flip-x" src="{{ asset('assets/images/obj2.png') }}" />
            <img class="absolute  h-28 sm:block hidden top-0 right-56    z-10 flip-x"
                src="{{ asset('assets/images/planepaperwhite.png') }}" />
            <div class="flex justify-center mt-20">
                <p
                    class="text-center md:text-4xl text-2xl font-bold mb-10 px-4 py-2 white-shadow bg-secondary text-white z-10">
                    Lingkungan Belajar
                </p>

            </div>

            <div class="container mx-auto mt-10">
                <section id="main-carousel" class="splide" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($lingkungan as $ling)
                                <li class="splide__slide">
                                    <img src="{{ $ling->image }}" alt="">
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </section>

                <section id="thumbnail-carousel" class="splide mt-5"
                    aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($lingkungan as $ling)
                                <li class="splide__slide">
                                    <img src="{{ $ling->image }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </section>
    </div>

@section('morejs')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 200,
                fixedHeight: 100,
                gap: 10,
                rewind: true,
                type: 'loop',
                pagination: false,
                isNavigation: true,
                focus: 'left',
                breakpoints: {
                    600: {
                        fixedWidth: 100,
                        fixedHeight: 50,
                    },
                },
            });


            var main = new Splide('#main-carousel', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
                fixedHeight: 500,
                breakpoints: {
                    600: {
                        fixedHeight: 400,
                    },
                }
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();

        });
    </script>
@endsection
@endsection
