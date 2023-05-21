@extends('admin.base')

@section('morecss')
    <style>
        #table0_length select,
        #table1_length select,
        #table2_length select,
        #table3_length select,
        #table4_length select,
        #table5_length select {
            padding-right: 1.5rem !important;
        }

        table {
            width: 100% !important;
        }
    </style>

    <link href="{{ asset('js/admin/dropify/css/dropify.css') }}" rel="stylesheet">
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
                            onclick="setModalType(0, this)" data-tabs-target="#akuntansioffline" type="button"
                            role="tab" aria-controls="akuntansioffline" aria-selected="false">Akuntansi Offline
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            onclick="setModalType(1, this)" id="akuntansionline-tab" data-tabs-target="#akuntansionline"
                            type="button" role="tab" aria-controls="akuntansionline" aria-selected="false">Akuntansi
                            Online
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            onclick="setModalType(2, this)" id="pajakoffline-tab" data-tabs-target="#pajakoffline"
                            type="button" role="tab" aria-controls="pajakoffline" aria-selected="false">Pajak Offline
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            onclick="setModalType(3, this)" id="pajakonline-tab" data-tabs-target="#pajakonline"
                            type="button" role="tab" aria-controls="pajakonline" aria-selected="false">Pajak Online
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            onclick="setModalType(4, this)" id="fasilitas-tab" data-tabs-target="#fasilitas" type="button"
                            role="tab" aria-controls="fasilitas" aria-selected="false">Fasilitas
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            onclick="setModalType(5, this)" id="benefit-tab" data-tabs-target="#benefit" type="button"
                            role="tab" aria-controls="benefit" aria-selected="false">Benefit
                        </button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="akuntansioffline" role="tabpanel"
                    aria-labelledby="akuntansioffline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Akuntansi Offline</p>
                        <button
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400 addData"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class=" overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table0" class="w-full text-sm text-left text-gray-500 " style="width: 100%">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th class="px-6 py-3">
                                        #
                                    </th>
                                    <th class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th lass="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th class="px-6 py-3">
                                        Harga
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="akuntansionline" role="tabpanel"
                    aria-labelledby="akuntansionline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Akuntansi Online</p>
                        <button
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400 addData"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table1" class="w-full text-sm text-left text-gray-500 ">
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

                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pajakoffline" role="tabpanel"
                    aria-labelledby="pajakoffline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Pajak Offline</p>
                        <button
                            class="addData font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table2" class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th class="px-6 py-3">
                                        #
                                    </th>
                                    <th class="px-6 py-3">
                                        Nama Les
                                    </th>
                                    <th class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th class="px-6 py-3">
                                        Jadwal Belajar
                                    </th>
                                    <th class="px-6 py-3">
                                        Harga
                                    </th>

                                    <th class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pajakonline" role="tabpanel"
                    aria-labelledby="pajakonline-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Pajak Online</p>
                        <button
                            class="addData font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table3" class="w-full text-sm text-left text-gray-500 ">
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

                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="fasilitas" role="tabpanel"
                    aria-labelledby="fasilitas-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Fasilitas</p>
                        <button
                            class="addData font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table4" class="w-full text-sm text-left text-gray-500 ">
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

                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="benefit" role="tabpanel"
                    aria-labelledby="benefit-tab">
                    <div class="flex gap-5 mb-3">
                        <p class="flex-grow text-gray-500">Fasilitas</p>
                        <button
                            class="addData font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                            Data
                        </button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                        <table id="table5" class="w-full text-sm text-left text-gray-500 ">
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
                        Tambah Data <span id="txtPendidikan"></span>
                    </h3>
                    <button type="button" onclick="modalles.hide()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
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
                <form id="form" onsubmit="return saveForm()">
                    @csrf
                    <input name="id" id="id" class="Form-edit" hidden>
                    <input name="type" id="type" hidden>
                    <div class="p-6 space-y-6">
                        <div class="w-full">
                            <label for="jargon2"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover / Gambar
                                Batch</label>
                            {{--                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form> --}}
                            <div class="input-field d-flex justify-content-center" id="div-img">
                                <input type="file" id="image" name="image" class="dropImage"
                                    data-min-height="10" data-heigh="400" accept="image/jpeg, image/jpg, image/png"
                                    data-allowed-file-extensions="jpg jpeg png" />
                            </div>

                        </div>
                        <div class="mb-6 divLes">
                            <label for="namales"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Les
                            </label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 Form-edit"
                                placeholder="">
                        </div>
                        <div class="mb-6">
                            <label for="deskripsiles"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                            </label>
                            <textarea type="text" id="description" rows="5" name="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 Form-edit"
                                placeholder=""></textarea>
                        </div>
                        <div class="mb-6 divLes">
                            <label for="jadwlales"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jadwal
                            </label>
                            <input type="text" id="schedule" name="schedule"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 Form-edit"
                                placeholder="">
                        </div>
                        <div class="mb-6 divLes">
                            <label for="hargales"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                            </label>
                            <input type="text" id="price" name="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 Form-edit"
                                placeholder="">
                        </div>


                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">
                            Simpan
                        </button>
                    </div>
                </form>


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
                        class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">
                        Simpan
                    </button>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/dropify/js/dropify.js') }}"></script>

    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };
        let dropImage;
        $(document).ready(function() {


        })
        let modalTyp = 0;
        $('#modalles #type').val(modalTyp);
        $('#modalles #txtPendidikan').html('Akuntansi Offline');


        const targetModalles = document.getElementById('modalles');
        let modalles = new Modal(targetModalles, {
            placement: 'center',
            backdrop: 'dynamic',
            onShow: () => {

            },
            onHide: () => {

            }
        });

        $(document).ready(function() {
            showDatatable(0);
            showDatatable(1);
            showDatatable(2);
            showDatatable(3);
            showDatatable(4);
            showDatatable(5);
        })

        function setModalType(a, data) {
            modalTyp = a;
            $('#modalles #txtPendidikan').html($(data).html());
            $('#modalles #type').val(a);
        }

        $(document).on('click', '.addData, .editData', function() {
            $('.Form-edit').val('')
            $('.divLes').removeClass('hidden')
            let row = $(this).data()
            let rowtb = $(this).closest('tr')

            var values = "";
            if (modalTyp >= 4) {
                $('.divLes').addClass('hidden')
            }
            if (row.id) {
                $('#modalles #id').val(row.id)
                $('#modalles #type').val(row.type)
                let columns = rowtb.find('td');

                if (row.type < 4) {
                    $('#modalles #description').val(columns[2].innerHTML)
                    $('#modalles #type').val(row.type)
                    $('#modalles #name').val(row.name)
                    $('#modalles #price').val(row.price)
                    $('#modalles #schedule').val(row.schedule)
                } else {
                    $('#modalles #description').val(columns[1].innerHTML)
                }


            }

            dropImage = $('.dropImage').dropify({
                messages: {
                    'default': 'Masukkan File Foto',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            dropImage = dropImage.data('dropify');
            dropImage.resetPreview();
            dropImage.clearElement();
            dropImage.settings.defaultFile = row?.image;
            dropImage.destroy();
            dropImage.init();

            modalles.show();
        })

        function saveForm() {
            let string;

            switch (modalTyp) {
                case 0:
                    string = 'Akuntansi Online';
                    break;
                case 1:
                    string = 'Akuntansi Offline';
                    break;
                case 2:
                    string = 'Pajak Online';
                    break;
                case 3:
                    string = 'Pajak Offline';
                    break;
                case 4:
                    string = 'Fasilitas';
                    break;
                default:
                    string = 'Benefit';
                    break;
            }
            confirmSave('Simpan Data ' + string, 'Apa anda yakin ?', 'form', '{{ route('adminpendidikan') }}', afterSave);
            return false;
        }

        function afterSave(data) {
            modalles.hide()
            $('#table' + data.type).DataTable().ajax.url('/admin/pendidikan/datatable?q=' + data.type).load()

        }

        $(document).on('click', '.deleteData', function() {
            let token = {
                '_token': '{{ csrf_token() }}'
            }
            let id = $(this).data('id');
            confirmDeleteSerialize('Delete Data', 'apa anda yakin ?', token, '/admin/pendidikan/' + id + '/delete',
                afterSave)
            return false;
        })

        function responseSave(data) {

        }

        function showDatatable(a) {
            let colums = [];
            if (a <= 3) {
                colums = [{
                        className: "text-center",
                        orderable: false,
                        defaultContent: "",
                        searchable: false
                    },
                    {
                        // data: 'public_health_center.name', name: 'public_health_center.name'
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'schedule',
                        name: 'schedule'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        className: "text-center",
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ];
            } else {
                colums = [{
                        className: "text-center",
                        orderable: false,
                        defaultContent: "",
                        searchable: false
                    },
                    {
                        // data: 'public_health_center.name', name: 'public_health_center.name'
                        data: 'description',
                        name: 'description'
                    },
                    {
                        className: "text-center",
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ];
            }


            datatable('table' + a, '/admin/pendidikan/datatable?q=' + a, colums)

        }
    </script>
@endsection
