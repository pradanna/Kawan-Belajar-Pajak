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





        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">BLog</p>
                    <button data-modal-target="modalblog" data-modal-toggle="modalblog"
                        class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                        type="button">Tambah
                        Data</button>
                </div>
                <hr class="mb-5 mt-2">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul Blog
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Isi Blog
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Author
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Judul Blog
                                </th>
                                <td class="px-6 py-4">
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                    Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog Isi Blog isi blog
                                </td>
                                <td class="px-6 py-4">
                                    22 Agustus 2023
                                </td>
                                <td class="px-6 py-4">
                                    Taufiq Muhajir
                                </td>

                                <td class="px-6 py-4 h-full relative  w-52">
                                    <a type="button" data-modal-target="modalblog" data-modal-toggle="modalblog"
                                        class="font-bold cursor-pointer p-2 mr-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                    <a href="#"
                                        class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>



        <!-- Main modal -->
        <div id="modalblog" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-6xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Data Team
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="modalblog">
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
                    <div class="p-6 space-y-6">
                        <div class="mb-6">
                            <label for="judulblog"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                Blog
                            </label>
                            <input type="text" id="judulblog"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="isiblog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                                Blog
                            </label>
                            <div id="isiblog" class="h-32">
                            </div>
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="tanggal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            </label>
                            <input type="text" id="tanggal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>

                        <div class="mb-6 mt-6">
                            <label for="author"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author
                            </label>
                            <input type="text" id="author"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>


                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modalblog" type="button" data-modal-target="modalblog"
                            class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">Simpan</button>
                    </div>


                </div>
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
        var blog = new Quill('#isiblog', {
            theme: 'snow' // Specify theme in configuration
        });
    </script>
@endsection
