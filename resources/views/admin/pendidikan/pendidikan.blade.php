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

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="akuntansioffline-tab"
                            data-tabs-target="#akuntansioffline" type="button" role="tab"
                            aria-controls="akuntansioffline" aria-selected="false">Akuntansi Offline</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="akuntansionline-tab" data-tabs-target="#akuntansionline" type="button" role="tab"
                            aria-controls="akuntansionline" aria-selected="false">Akuntansi Online</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="pajakoffline-tab" data-tabs-target="#pajakoffline" type="button" role="tab"
                            aria-controls="pajakoffline" aria-selected="false">Pajak Offline</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="pajakonline-tab" data-tabs-target="#pajakonline" type="button" role="tab"
                            aria-controls="pajakonline" aria-selected="false">Pajak Online</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="fasilitas-tab" data-tabs-target="#fasilitas" type="button" role="tab"
                            aria-controls="fasilitas" aria-selected="false">Fasilitas</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="benefit-tab" data-tabs-target="#benefit" type="button" role="tab"
                            aria-controls="benefit" aria-selected="false">Benefit</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="akuntansioffline" role="tabpanel"
                    aria-labelledby="akuntansioffline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Akuntansi Offline</p>
                        <button data-modal-target="modalles" data-modal-toggle="modalles"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
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
                                        Akuntansi Tingkat 1
                                    </th>
                                    <td class="px-6 py-4">
                                        ini deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang
                                    </td>
                                    <td class="px-6 py-4">
                                        Selasa & Kamis 20.00
                                    </td>
                                    <td class="px-6 py-4">
                                        50.000
                                    </td>

                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalles" data-modal-toggle="modalles"
                                            class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                        <a href="#"
                                            class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="akuntansionline" role="tabpanel"
                    aria-labelledby="akuntansionline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Akuntansi Online</p>
                        <button data-modal-target="modalles" data-modal-toggle="modalles"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
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
                                        Akuntansi Tingkat 1
                                    </th>
                                    <td class="px-6 py-4">
                                        ini deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang
                                    </td>
                                    <td class="px-6 py-4">
                                        Selasa & Kamis 20.00
                                    </td>
                                    <td class="px-6 py-4">
                                        50.000
                                    </td>

                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalles" data-modal-toggle="modalles"
                                            class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                        <a href="#"
                                            class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pajakoffline" role="tabpanel"
                    aria-labelledby="pajakoffline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Pajak Offline</p>
                        <button data-modal-target="modalles" data-modal-toggle="modalles"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
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
                                        Akuntansi Tingkat 1
                                    </th>
                                    <td class="px-6 py-4">
                                        ini deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang
                                    </td>
                                    <td class="px-6 py-4">
                                        Selasa & Kamis 20.00
                                    </td>
                                    <td class="px-6 py-4">
                                        50.000
                                    </td>

                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalles" data-modal-toggle="modalles"
                                            class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                        <a href="#"
                                            class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pajakonline" role="tabpanel"
                    aria-labelledby="pajakonline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Pajak Online</p>
                        <button data-modal-target="modalles" data-modal-toggle="modalles"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
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
                                        Akuntansi Tingkat 1
                                    </th>
                                    <td class="px-6 py-4">
                                        ini deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang ini
                                        deskripsi les panjang ini deskripsi les panjang ini deskripsi les panjang
                                    </td>
                                    <td class="px-6 py-4">
                                        Selasa & Kamis 20.00
                                    </td>
                                    <td class="px-6 py-4">
                                        50.000
                                    </td>

                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalles" data-modal-toggle="modalles"
                                            class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                        <a href="#"
                                            class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="fasilitas" role="tabpanel"
                    aria-labelledby="fasilitas-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Fasilitas</p>
                        <button data-modal-target="modalfasilitas" data-modal-toggle="modalfasilitas"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi Fasilitas
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

                                    <td class="px-6 py-4">
                                        ini adalah text dasilitas ini adalah text dasilitas ini adalah text dasilitas ini
                                        adalah text dasilitas ini adalah text dasilitas ini adalah text dasilitas ini adalah
                                        text dasilitas ini adalah text dasilitas ini adalah text dasilitas ini adalah text
                                        dasilitas ini adalah text dasilitas ini adalah text dasilitas ini adalah text
                                        dasilitas ini adalah text dasilitas ini adalah text dasilitas ini adalah text
                                        dasilitas ini adalah text dasilitas

                                    </td>


                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalfasilitas"
                                            data-modal-toggle="modalfasilitas"
                                            class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>
                                        <a href="#"
                                            class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="benefit" role="tabpanel"
                    aria-labelledby="benefit-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Fasilitas</p>
                        <button data-modal-target="modalfasilitas" data-modal-toggle="modalfasilitas"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data</button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi Fasilitas
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

                                    <td class="px-6 py-4">
                                        ini adalah text benefit ini adalah text benefit ini adalah text benefit ini adalah
                                        text benefit ini adalah text benefit ini adalah text benefit ini adalah text benefit
                                        ini adalah text benefit ini adalah text benefit ini adalah text benefit ini adalah
                                        text benefit ini adalah text benefit ini adalah text benefit ini adalah text benefit
                                        ini adalah text benefit ini adalah text benefit


                                    </td>


                                    <td class="px-6 py-4 flex flex-nowrap gap-2">
                                        <a type="button" data-modal-target="modalfasilitas"
                                            data-modal-toggle="modalfasilitas"
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
        </div>
    </div>


    <!-- Main modal -->
    <div id="modalles" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Data
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modalles">
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
                        <label for="namales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Les
                        </label>
                        <input type="text" id="namales" rows="5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div class="mb-6">
                        <label for="deskripsiles"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                        </label>
                        <textarea type="text" id="deskripsiles" rows="5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder=""></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="jadwlales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jadwal
                        </label>
                        <input type="text" id="jadwlales" rows="5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div class="mb-6">
                        <label for="hargales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        </label>
                        <input type="text" id="hargales" rows="5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>



                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modalles" type="button" data-modal-target="modalles"
                        class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">Simpan</button>
                </div>


            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="modalfasilitas" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Data
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modalfasilitas">
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
                        <label for="deskripsifasilitas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                        </label>
                        <textarea type="text" id="deskripsifasilitas" rows="5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder=""></textarea>
                    </div>



                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modalfasilitas" type="button" data-modal-target="modalfasilitas"
                        class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">Simpan</button>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('morejs')
@endsection
