@extends('base')

@section('morecss')

@endsection
@section('content')
    <div class="bg-blue ">

        <div class="h-20"></div>



        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BERITA DARI KAMI</p>
        </section>


        <div class="berita ">
            <div class="container mx-auto flex gap-4 bg-white bg-opacity-50 z-20 relative items-stretch">
                <img src="http://1.bp.blogspot.com/-aAjsS0A2Crc/VXgFauTv6sI/AAAAAAAAA_g/oGQtii4vnIQ/s1600/blog%2Bkeuangan%2B%25283%2529.png"
                    class="w-1/3 object-cover min-h-50  flex-none" />
                <div class="p-5 " style="flex-grow: 1">
                    <div class="flex justify-between w-full">
                        <p class="text-2xl font-bold">Judul Berita</p>
                        <div class="text-right">
                            <p>23 Maret 2023 20:00</p>
                            <p>Autor: Pradana</p>

                        </div>
                    </div>
                    <p class="text-sm mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.

                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.

                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.

                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
            </div>

            <div class="container mx-auto flex gap-4 bg-white bg-opacity-50 z-20 relative items-stretch">
                <img src="http://1.bp.blogspot.com/-aAjsS0A2Crc/VXgFauTv6sI/AAAAAAAAA_g/oGQtii4vnIQ/s1600/blog%2Bkeuangan%2B%25283%2529.png"
                    class="w-1/3 object-cover min-h-50  flex-none" />
                <div class="p-5 " style="flex-grow: 1">
                    <div class="flex justify-between w-full">
                        <p class="text-2xl font-bold">Judul Berita</p>
                        <p>23 Maret 2023 20:00</p>
                    </div>
                    <p class="text-sm mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>

        </div>

        <div class=" overflow-hidden">
            <img class="absolute  h-100% sm:block hidden " style="right: -30rem; top: -10rem"
                src="{{ asset('assets/images/obj1.png') }}" />
            <img class="absolute  h-32 sm:block hidden top-36 right-20 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />
        </div>


    </div>

@section('morejs')

@endsection
