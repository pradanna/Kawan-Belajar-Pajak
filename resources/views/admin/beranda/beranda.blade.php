@extends('admin.base')

@section('css')
@endsection
@section('content')
    <div class="panel min-h-screen">

        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/admin"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900  ">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Beranda
                    </a>
                </li>

            </ol>
        </nav>


        <div class="bg-white p-5">
            <p>Halaman Depan</p>
            <hr class="mb-5">
            <div class="flex gap-4">
                <div class="flex-grow">
                    <div class="mb-6 mt-6">
                        <label for="jargon1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jargon
                            1</label>
                        <input type="text" id="jargon1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="ENJOY BELAJAR AKUNTANSI DAN PAJAK">
                    </div>
                    <div class="">
                        <label for="jargon2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jargon
                            2</label>

                        <input type="text" id="jargon2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="We Are Your Friends and You are My Friend

                            ">
                    </div>
                </div>
                <div class="w-44">
                    <label for="jargon2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                        depan</label>
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>

                </div>

            </div>

            <div class="flex justify-end">
                <button type="button"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                    Perubahan</button>

            </div>
        </div>

        <div class="bg-white p-5 mt-3">
            <p>Tentang Kami</p>
            <hr class="mb-5">


            <div id="editor" class="h-32">

            </div>
            <div class="flex justify-end">
                <button type="button"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                    Perubahan</button>

            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };
    </script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow' // Specify theme in configuration
        });
    </script>
@endsection
