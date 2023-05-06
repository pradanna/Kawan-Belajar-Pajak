@extends('admin.base')

@section('morecss')
    <style>
        #table_length select {
            padding-right: 1.5rem !important;
        }
    </style>
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
                    <button id="addData"
                        class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                        type="button">Tambah
                        Data</button>
                </div>
                <hr class="mb-5 mt-2">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-2 bg-white">
                    <table id="table" class="w-full text-sm text-left text-gray-500 " style="width: 100%">
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
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="modal.hide()">
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
                       <input id="id" name="id" class="form-edit" hidden>
                       <div class="p-6 space-y-6">
                           <div class="mb-6">
                               <label for="judulblog"
                                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                   Blog
                               </label>
                               <input type="text" id="title" name="title"
                                      class="form-edit bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                      placeholder="">
                           </div>
                           <div class="mb-6 mt-6">
                               <label for="isiblog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                                   Blog
                               </label>
                               <input id="contents" name="content" hidden>
                               <div id="isiblog" class="h-32">
                               </div>
                           </div>
                           <div class="mb-6 mt-6">
                               <label for="tanggal"
                                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                               </label>
                               <input type="date" id="date" name="date"
                                      class="form-edit bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 "
                                      placeholder="">
                           </div>

                           <div class="mb-6 mt-6">
                               <label for="author"
                                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author
                               </label>
                               <input type="text" id="author" name="author"
                                      class="form-edit bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                      placeholder="">
                           </div>


                       </div>
                       <!-- Modal footer -->
                       <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                           <button  type="submit"
                                   class="flex-grow text-white bg-blue-700 min-h-32 text-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg px-5 py-5 text-xl">Simpan</button>
                       </div>

                   </form>

                </div>
            </div>
        </div>


    </div>
@endsection

@section('morejs')

    <script src="{{ asset('js/admin/moment.min.js') }}"></script>


    <script>
        const targetModal = document.getElementById('modalblog');
        let modal = new Modal(targetModal, {
            placement: 'center',
            backdrop: 'dynamic',
            onShow: () => {

            },
            onHide: () => {

            }
        });
        var quill = new Quill('#isiblog', {
            theme: 'snow' // Specify theme in configuration
        });

        $(document).ready(function () {
            moment.locale('id');

            showDatatable();
        })

        $(document).on('click', '#addData, .editData', function () {
            $('.form-edit').val('')

            let row = $(this).data()
            let rowtb = $(this).closest('tr')

            let value = "";
            if (row.id) {
                $('#modalblog #id').val(row.id);
                $('#modalblog #title').val(row.title);
                $('#modalblog #date').val(row.date);
                $('#modalblog #author').val(row.author);
                let columns = rowtb.find('td');
                value = columns[2].innerHTML;
            }
            var delta = quill.clipboard.convert(value);
            quill.setContents(delta, 'silent');

            modal.show();
        })

        $(document).on('click','.deleteData', function () {
            let token = {
                '_token' : '{{csrf_token()}}'
            }
            let id = $(this).data('id');
            confirmDeleteSerialize('Delete Data', 'apa anda yakin ?', token, '/admin/blog/'+id+'/delete', afterSave)
            return false;
        })

        function saveForm() {
            let s = quill.root.innerHTML;
            $('#contents').val(s)
            confirmSave('Simpan Data Berita', 'Apa anda yakin ?', 'form', '{{route('adminblog')}}', afterSave);
            return false
        }

        function afterSave() {
            modal.hide();
            $('#table').DataTable().ajax.url('/admin/blog/datatable?').load()
        }


        function showDatatable() {
            let colums = [
                {
                    className: "text-center",
                    orderable: false,
                    defaultContent: "",
                    searchable: false
                },
                {
                    // data: 'public_health_center.name', name: 'public_health_center.name'
                    data: 'title', name: 'title'
                },
                {
                    data: 'content', name: 'content'
                },
                {data: 'date', name: 'date', render(data){
                        return moment(data).format('LL')
                    }},
                {data: 'author', name: 'author'},
                {
                    className: "text-center",
                    data: 'action', name: 'action', orderable: false, searchable: false
                },
            ];

            datatable('table', '/admin/blog/datatable', colums)

        }
    </script>
@endsection
