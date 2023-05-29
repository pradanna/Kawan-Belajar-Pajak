@extends('base')

@section('morecss')
@endsection
@section('content')
    <div class="bg-blue ">
        <div class="h-20"></div>
        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">BLOG KAMI</p>
        </section>
        <div class="berita md:mx-0 mx-2">
            @foreach ($blogs as $blog)
                <a href="{{ $blog->url }}"
                    class="container mx-auto flex gap-4 bg-white bg-opacity-50 z-20 relative items-stretch   mb-2">
                    <div class="p-5 " style="flex-grow: 1">
                        <div class="flex justify-between w-full">
                            <p class="text-2xl font-bold">{{ $blog->title }}</p>
                            <div class="text-right">
                                <p>{{ \Carbon\Carbon::parse($blog->date)->format('d F Y') }}</p>
                                <p>Autor: {{ $blog->author }}</p>

                            </div>
                        </div>
                        <div class="text-sm mt-6 text-gray-700">{!! $blog->content !!}
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

        <div class=" overflow-hidden">
            <img class="absolute  h-100% sm:block hidden " style="right: -30rem; top: -10rem"
                src="{{ asset('assets/images/obj1.png') }}" />
            <img class="absolute  h-32 sm:block hidden top-36 right-20 "
                src="{{ asset('assets/images/planepaperwhite.png') }}" />
        </div>


    </div>
@endsection
@section('morejs')
@endsection
