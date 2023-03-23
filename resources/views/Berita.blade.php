@extends('base')

@section('morecss')

@endsection
@section('content')
    <div class="bg-blue ">

        <div class="h-20"></div>



        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BERITA DARI KAMI</p>
        </section>


        <div class="berita">
            <div>
                <img
                    src="http://1.bp.blogspot.com/-aAjsS0A2Crc/VXgFauTv6sI/AAAAAAAAA_g/oGQtii4vnIQ/s1600/blog%2Bkeuangan%2B%25283%2529.png" />
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
