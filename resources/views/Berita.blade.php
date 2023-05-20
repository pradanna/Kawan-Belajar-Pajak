@extends('base')

@section('morecss')
@endsection
@section('content')
    <div class="bg-blue ">

        <div class="h-20"></div>


        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BERITA DARI
                KAMI</p>
        </section>


        <div class="berita ">
            @foreach($news as $key => $v)
                @if($key % 2 === 0)
                    <section class="container mx-auto flex gap-4 bg-white bg-opacity-50 z-20 relative items-stretch">
                        <img
                            src="{{ $v->image }}"
                            class="w-1/3 object-cover min-h-50  flex-none"/>
                        <div class="p-5 " style="flex-grow: 1">
                            <div class="flex justify-between w-full">
                                <p class="text-2xl font-bold">{{ $v->title }}</p>
                                <div class="text-right">
                                    <p>{{ \Carbon\Carbon::parse($v->created_at)->format('d F Y H:i') }}</p>
                                    <p>Autor: {{ $v->author }}</p>

                                </div>
                            </div>
                            <div class="text-sm mt-6 text-gray-700">{!! $v->content !!}
                            </div>
                        </div>
                    </section>
                @else
                    <section class="container mx-auto flex gap-4 bg-white bg-opacity-50 z-20 relative items-stretch">
                        <img
                            src="{{ $v->image }}"
                            class="w-1/3 object-cover min-h-50  flex-none"/>
                        <div class="p-5 " style="flex-grow: 1">
                            <div class="flex justify-between w-full">
                                <p class="text-2xl font-bold">{{ $v->title }}</p>
                                <div class="text-right">
                                    <p>{{ \Carbon\Carbon::parse($v->created_at)->format('d F Y H:i') }}</p>
                                    <p>Autor: {{ $v->author }}</p>

                                </div>
                            </div>
                            <div class="text-sm  mt-6 text-gray-700">
                                {!! $v->content !!}
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

        </div>

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
