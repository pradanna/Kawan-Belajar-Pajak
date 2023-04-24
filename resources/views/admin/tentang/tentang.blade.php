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


        <div class="bg-white border rounded-md p-5 my-3">


            <div class=" p-5 mt-3">
                <p>Sejarah Berdiri</p>
                <hr class="mb-5">


                <div id="sejarah" class="h-32">

                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                        Perubahan</button>

                </div>
            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3 grid grid-cols-2 gap-5">
                <div>
                    <p>Visi</p>
                    <hr class="mb-5">


                    <div id="visi" class="h-32">

                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                            Perubahan</button>

                    </div>
                </div>

                <div>
                    <p>Misi</p>
                    <hr class="mb-5">


                    <div id="misi" class="h-32">

                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                            Perubahan</button>

                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">Super Team di KBP & TBA</p>
                    <button data-modal-target="modalTeam" data-modal-toggle="modalTeam"
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
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Posisi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Moto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Foto
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
                                    Bagus Yanuar
                                </th>
                                <td class="px-6 py-4">
                                    Pengajar Pajak
                                </td>
                                <td class="px-6 py-4">
                                    Hidup seperti larry
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('assets/images/avatar.png') }}" class="h-16 w-10 object-cover" />
                                </td>
                                <td class="px-6 py-4">
                                    <a type="button" data-modal-target="modalTeam" data-modal-toggle="modalTeam"
                                        class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                    <a href="#"
                                        class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">Siswa di KBP & TBA</p>
                    <button data-modal-target="modalSiswa" data-modal-toggle="modalSiswa"
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
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pekerjaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Testimoni
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Foto
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
                                    Bagus Yanuar
                                </th>
                                <td class="px-6 py-4">
                                    Solo
                                </td>
                                <td class="px-6 py-4">
                                    Programer
                                </td>
                                <td class="px-6 py-4">
                                    Hidup seperti larry
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('assets/images/avatar.png') }}" class="h-16 w-10 object-cover" />
                                </td>
                                <td class="px-6 py-4">
                                    <a type="button" data-modal-target="modalSiswa" data-modal-toggle="modalSiswa"
                                        class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                    <a href="#"
                                        class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>


        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">Lingkungan Belajar</p>

                </div>
                <hr class="mb-5 mt-2">

                <div class="w-full">
                    <label for="fotosiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan
                        Foto</label>
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>

                </div>

            </div>
        </div>

        <!-- Main modal -->
        <div id="modalTeam" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Data Team
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="modalTeam">
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
                            <label for="namateam"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            </label>
                            <input type="text" id="namateam"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="posisiteam"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi
                            </label>
                            <input type="text" id="posisiteam"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="mototeam"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Moto
                            </label>
                            <textarea type="text" id="mototeam" rows="5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder=""></textarea>
                        </div>

                        <div class="w-44">
                            <label for="fototeam"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan
                                Foto</label>
                            <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>

                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modalTeam" type="button" data-modal-target="modalTeam"
                            class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">Simpan</button>
                    </div>


                </div>
            </div>
        </div>

        <!-- Main modal -->
        <div id="modalSiswa" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Data Siswa
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="modalSiswa">
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
                            <label for="namasiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            </label>
                            <input type="text" id="namasiswa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="asalsiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                            </label>
                            <input type="text" id="asalsiswa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="pekerjaansiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan
                            </label>
                            <input type="text" id="pekerjaansiswa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="">
                        </div>
                        <div class="mb-6 mt-6">
                            <label for="testimonisiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Testimoni
                            </label>
                            <textarea type="text" id="testimonisiswa" rows="5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder=""></textarea>
                        </div>

                        <div class="w-44">
                            <label for="fotosiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan
                                Foto</label>
                            <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>

                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modalSiswa" type="button" data-modal-target="modalSiswa"
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
        var sejarah = new Quill('#sejarah', {
            theme: 'snow' // Specify theme in configuration
        });

        var misi = new Quill('#misi', {
            theme: 'snow' // Specify theme in configuration
        });

        var visi = new Quill('#visi', {
            theme: 'snow' // Specify theme in configuration
        });
    </script>
@endsection
