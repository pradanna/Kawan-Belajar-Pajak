@extends('base')

@section('morecss')
@endsection
@section('content')
    <div class="bg-blue ">
        <div class="h-20"></div>
        <section class="h-72 bg-blue flex justify-center items-center relative">
            <p class="inline-block p-3 text-2xl text-white bg-secondary white-shadow font-bold z-10">TESTIMONI SISWA</p>
        </section>


        <div class="testimoni container mx-auto grid grid-cols-3 gap-3">

            @foreach($students as $student)
                <div class="shadow-lg p-5 min-h-52 bg-white rounded-lg z-10 relative">
                    <div class="flex justify-between pb-2">
                        <div class=" flex-grow">
                            <p class="font-bold">{{ $student->name }}</p>
                            <p class="bg-secondary text-white px-1 rounded-sm inline">{{ $student->origin }}
                            </p>
                            <p>{{ $student->job }}</p>
                        </div>
                        <div class="flex justify-center items-center overflow-hidden relative w-20 h-20 rounded-full">
                            <img
                                src="{{ $student->image }}"
                                class="w-full h-full object-cover"/>
                        </div>
                    </div>


                    <hr>

                    <p class="text-xs text-gray-700 p-3">
                        {{ $student->testimony }}
                    </p>
                </div>
            @endforeach
        </div>
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
