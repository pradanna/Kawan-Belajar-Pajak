@extends('admin.base')

@section('morecss')
    <link href="{{ asset('js/admin/dropify/css/dropify.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
@section('content')
    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            Swal.fire({
                title: 'Gagal',
                icon: 'error',
                text: "Terjadi Kesalahan Sistem",
            });
        </script>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Berhasil',
                icon: 'success',
                text: "{{ \Illuminate\Support\Facades\Session::get('success') }}",
            });
        </script>
    @endif
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


                <form id="formSejarah" method="POST">
                    @csrf
                    <input id="txtHistory" name="history">

                    <div id="sejarah" class="h-32">

                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="saveSejarah()"
                                class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                            Perubahan
                        </button>

                    </div>
                </form>
            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3 grid grid-cols-2 gap-5">
                <div>
                    <p>Visi</p>
                    <hr class="mb-5">


                    <form id="formVisi" method="POST">
                        @csrf
                        <input id="txtVision" name="vision">

                        <div id="visi" class="h-32">

                        </div>
                        <div class="flex justify-end">
                            <button type="button" onclick="saveVisi()"
                                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                                Perubahan
                            </button>

                        </div>
                    </form>
                </div>

                <div>
                    <p>Misi</p>
                    <hr class="mb-5">

                    <form id="formMisi" method="POST">
                        @csrf

                        <input id="txtMission" name="mission">

                        <div id="misi" class="h-32">

                        </div>
                        <div class="flex justify-end">
                            <button type="button" onclick="saveMisi()"
                                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 mt-3">Simpan
                                Perubahan
                            </button>

                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">Super Team di KBP & TBA</p>
                    <button id="addTeam"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                        Data
                    </button>
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
                        <tbody id="tbTeam">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

        <div class="bg-white border rounded-md  p-5 my-3">


            <div class=" p-5 mt-3">
                <div class="flex gap-5">
                    <p class="flex-grow">Siswa di KBP & TBA</p>
                    <button id="addSiswa"
                            class="font-bold  p-2 bg-green-600 rounded-md text-white transition-all duration-300  hover:bg-green-400"
                            type="button">Tambah
                        Data
                    </button>
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
                        <tbody id="tbStudent">
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
{{--                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>--}}
                    <form id="formImg" action="{{route('admintentang.image')}}" method="post" class="dropzone mb-2"
                          enctype="multipart/form-data" style="border-radius: 10px">
                        @csrf
                        <div class="fallback">
                            <input name="image" type="file" multiple />
                        </div>
                    </form>

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
                                onclick="modalTeam.hide()">
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
                    <form id="formTeam" onsubmit="return saveTeam()">
                        @csrf
                        <input id="idTeam" name="id" hidden>
                        <div class="p-6 space-y-6">
                            <div class="mb-6">
                                <label for="namateam"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                </label>
                                <input type="text" id="namateam" name="name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                       placeholder="">
                            </div>
                            <div class="mb-6 mt-6">
                                <label for="posisiteam"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi
                                </label>
                                <input type="text" id="posisiteam" name="position"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                       placeholder="">
                            </div>
                            <div class="mb-6 mt-6">
                                <label for="mototeam"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Moto
                                </label>
                                <textarea type="text" id="mototeam" rows="5" name="motto"
                                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                          placeholder=""></textarea>
                            </div>

                            <div class="w-44">
                                <label for="fototeam"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan
                                    Foto</label>
                                {{--                                <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>--}}
                                <input type="file" id="imageTeam" name="image" class="dropImage" data-min-height="10"
                                       data-heigh="400" accept="image/jpeg, image/jpg, image/png"
                                       data-allowed-file-extensions="jpg jpeg png"/>
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
                                onclick="modalSiswa.hide()">
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
                    <form id="formSiswa" onsubmit="return saveSiswa()">
                        @csrf
                        <input id="idSiswa" name="id" hidden>
                        <div class="p-6 space-y-6">
                            <div class="mb-6">
                                <label for="namasiswa"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                </label>
                                <input type="text" id="namasiswa" name="name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                       placeholder="">
                            </div>
                            <div class="mb-6 mt-6">
                                <label for="asalsiswa"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                                </label>
                                <input type="text" id="asalsiswa" name="origin"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                       placeholder="">
                            </div>
                            <div class="mb-6 mt-6">
                                <label for="pekerjaansiswa"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan
                                </label>
                                <input type="text" id="pekerjaansiswa" name="job"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                       placeholder="">
                            </div>
                            <div class="mb-6 mt-6">
                                <label for="testimonisiswa"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Testimoni
                                </label>
                                <textarea type="text" id="testimonisiswa" rows="5" name="testimony"
                                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                          placeholder=""></textarea>
                            </div>

                            <div class="w-44">
                                <label for="fotosiswa"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan
                                    Foto</label>
                                {{--                                <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>--}}
                                <input type="file" id="imageSiswa" name="image" class="dropImage" data-min-height="10"
                                       data-heigh="400" accept="image/jpeg, image/jpg, image/png"
                                       data-allowed-file-extensions="jpg jpeg png"/>
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


    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/dropify/js/dropify.js') }}"></script>

    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        // Dropzone.options.myDropzone = {
        //     // Configuration options go here
        // };

        const targetmodalTeam = document.getElementById('modalTeam');
        let modalTeam = new Modal(targetmodalTeam, {
            placement: 'center',
            backdrop: 'dynamic',
            onShow: () => {

            },
            onHide: () => {

            }
        });

        const targetmodalStudent = document.getElementById('modalSiswa');
        let modalSiswa = new Modal(targetmodalStudent, {
            placement: 'center',
            backdrop: 'dynamic',
            onShow: () => {

            },
            onHide: () => {

            }
        });
        let imageSiswa;
        $(document).ready(function () {
            showTeamTable();
            showStudentTable();
        })
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

        let valueSejarah = "{!! $data ? $data->history : '' !!}";
        let valueVisi = "{!! $data ? $data->vision : '' !!}";
        let valueMisi = "{!! $data ? $data->mission : '' !!}";

        sejarah.setContents(sejarah.clipboard.convert(valueSejarah), 'silent');
        visi.setContents(visi.clipboard.convert(valueVisi), 'silent');
        misi.setContents(misi.clipboard.convert(valueMisi), 'silent');

        function saveSejarah() {
            let s = sejarah.root.innerHTML;
            console.log('asdas', s)
            $('#txtHistory').val(s)
            saveData('Update Sejarah', 'formSejarah')
        }

        function saveMisi() {
            let s = misi.root.innerHTML;
            console.log('asdas', s)
            $('#txtMission').val(s)
            saveData('Update Misi', 'formMisi')
        }

        function saveVisi() {
            let s = visi.root.innerHTML;
            console.log('asdas', s)
            $('#txtVision').val(s)
            saveData('Update Visi', 'formVisi')
        }

        function saveTeam() {
            confirmSave('Simpan Data', 'apa anda yakin ?', 'formTeam', '{{route('admintentang.team')}}', responseSave)
            return false;
        }
        $(document).on('click', '#deleteTeam', function () {
            let token = {
                '_token' : '{{csrf_token()}}'
            }
            let id = $(this).data('id');
            confirmDeleteSerialize('Delete Data', 'apa anda yakin ?', token, '/admin/tentang/team/'+id+'/delete', responseSave)
            return false;
        })

        function responseSave() {
            showTeamTable();
            modalTeam.hide();
        }

        function saveSiswa() {
            confirmSave('Simpan Data', 'apa anda yakin ?', 'formSiswa', '{{route('admintentang.student')}}', responseSaveSiswa)
            return false;
        }

        $(document).on('click', '#deleteSiswa', function () {
            let token = {
                '_token' : '{{csrf_token()}}'
            }
            let id = $(this).data('id');
            confirmDeleteSerialize('Delete Data', 'apa anda yakin ?', token, '/admin/tentang/siswa/'+id+'/delete', responseSaveSiswa)
            return false;
        })



        function responseSaveSiswa() {
            showStudentTable();
            modalSiswa.hide();
        }

        function showTeamTable() {
            $.get('{{route('admintentang.team')}}', function (res, x, d) {
                let tb = $('#tbTeam')
                tb.empty();
                if (d.status == 200) {
                    $.each(res, function (k, v) {
                        let img = v.image ?? "{{ asset('/assets/images/avatar.png') }}"
                        tb.append('<tr class="bg-white border-b ">\n' +
                            '                            <td class="px-6 py-4">' + parseInt(k + 1) + '</td>\n' +
                            '                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">' + v.name + '</td>\n' +
                            '                            <td class="px-6 py-4">' + v.position + '</td>\n' +
                            '                            <td class="px-6 py-4">' + v.motto + '</td>\n' +
                            '                            <td class="px-6 py-4"> <img src="' + img + '" class="h-16 w-10 object-cover"  onerror="this.onerror=null;this.src={{ asset('/assets/images/avatar.png') }}"/></td>\n' +
                            '                            <td class="px-6 py-4">\n' +
                            '                                <a id="editTeam" data-id="' + v.id + '" data-name="' + v.name + '" data-img="' + v.image + '" data-motto="' + v.motto + '" data-position="' + v.position + '" \n' +
                            '                                   class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>\n' +
                            '                                <a href="#" id="deleteTeam" data-id="' + v.id + '" data-name="' + v.name + '" \n' +
                            '                                   class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>\n' +
                            '                            </td>\n' +
                            '                        </tr>')

                    })
                }
            })
        }

        function showStudentTable() {
            $.get('{{route('admintentang.student')}}', function (res, x, d) {
                let tb = $('#tbStudent')
                tb.empty();
                if (d.status == 200) {
                    $.each(res, function (k, v) {
                        let img = v.image ?? "{{ asset('/assets/images/avatar.png') }}"
                        tb.append('<tr class="bg-white border-b ">\n' +
                            '                            <td class="px-6 py-4">' + parseInt(k + 1) + '</td>\n' +
                            '                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">' + v.name + '</td>\n' +
                            '                            <td class="px-6 py-4">' + v.origin + '</td>\n' +
                            '                            <td class="px-6 py-4">' + v.job + '</td>\n' +
                            '                            <td class="px-6 py-4">' + v.testimony + '</td>\n' +
                            '                            <td class="px-6 py-4"> <img src="' + img + '" class="h-16 w-10 object-cover"  onerror="this.onerror=null;this.src={{ asset('/assets/images/avatar.png') }}"/></td>\n' +
                            '                            <td class="px-6 py-4">\n' +
                            '                                <a id="editSiswa" data-id="' + v.id + '" data-name="' + v.name + '" data-testimony="' + v.testimony + '" data-img="' + v.image + '" data-origin="' + v.origin + '" data-job="' + v.job + '" \n' +
                            '                                   class="font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400">Edit</a>\n' +
                            '                                <a href="#" id="deleteSiswa" data-id="' + v.id + '" data-name="' + v.name + '" \n' +
                            '                                   class="font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400">Hapus</a>\n' +
                            '                            </td>\n' +
                            '                        </tr>')

                    })
                }
            })
        }

        $(document).on('click', '#editTeam, #addTeam', function () {
            $('#modalTeam #idTeam').val($(this).data('id'))
            $('#modalTeam #namateam').val($(this).data('name'))
            $('#modalTeam #namateam').val($(this).data('name'))
            $('#modalTeam #posisiteam').val($(this).data('position'))
            $('#modalTeam #mototeam').val($(this).data('motto'))

            dropImage = $('.dropImage').dropify({
                messages: {
                    'default': 'Masukkan File Foto',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            let imageTeam = $('#imageTeam').dropify({
                messages: {
                    'default': 'Masukkan File Foto',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            imageTeam = imageTeam.data('dropify');
            imageTeam.resetPreview();
            imageTeam.clearElement();
            imageTeam.settings.defaultFile = $(this).data('img');
            imageTeam.destroy();
            imageTeam.init();
            modalTeam.show();

        })

        $(document).on('click', '#editSiswa, #addSiswa', function () {
            $('#modalSiswa #idSiswa').val($(this).data('id'))
            $('#modalSiswa #namasiswa').val($(this).data('name'))
            $('#modalSiswa #asalsiswa').val($(this).data('origin'))
            $('#modalSiswa #pekerjaansiswa').val($(this).data('job'))
            $('#modalSiswa #testimonisiswa').val($(this).data('testimony'))
            $('#modalSiswa #mototeam').val($(this).data('motto'))

            imageSiswa = $('#imageSiswa').dropify({
                messages: {
                    'default': 'Masukkan File Foto',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            imageSiswa = imageSiswa.data('dropify');
            imageSiswa.resetPreview();
            imageSiswa.clearElement();
            imageSiswa.settings.defaultFile = $(this).data('img');
            imageSiswa.destroy();
            imageSiswa.init();
            modalSiswa.show();
        })

        Dropzone.options.formImg = {
            // paramName: 'image',
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            addRemoveLinks: true,
            // thumbnailWidth: 120,
            // thumbnailHeight: 120,
            // transformFile: function (file, done) {
            //     // const imageCompressor = new ImageCompressor();
            //     new Compressor(file, {
            //         quality: 0.6,
            //         success(result) {
            //             console.log(result);
            //             done(result)
            //         },
            //         error(err) {
            //             console.log(err.message);
            //         },
            //     });
            //
            // },
            removedfile: function (file) {
                var idImg, name;
                console.log(file)
                if (file.xhr) {
                    console.log('ddddddd',JSON.parse(file.xhr.response))
                    idImg = JSON.parse(file.xhr.response)['id'];
                    name = JSON.parse(file.xhr.response)['image'];
                } else {
                    idImg = file['idImg'];
                    name = file['name'];
                }
                console.log(idImg);
                {{-- var name = JSON.parse(file.xhr.response)['payload']['image']; --}}
                {{-- var idImg = JSON.parse(file.xhr.response)['payload']['id']; --}}
                {{-- console.log('delete') --}}
                $.ajax({
                    type: 'POST',
                    url: '{{route('admintentang.image')}}',
                    data: {
                        name: name,
                        id: idImg,
                        action: 2,
                        '_token': '{{ csrf_token() }}',
                    },
                    sucess: function (data) {
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
                    void 0;
            },
            sending: function (file, xhr, formData) {
                file.myCustomName = "my-new-name" + file.name;
                // formData.append("filesize", file.size);
                formData.append("fileName", file.myCustomName);
                formData.append("id_facility", $('#visi #id').val());
            },
            success: function (file, response) {

                console.log(file);
                console.log(response);
                file.previewElement.querySelector("img").src = response['image'];
                file.previewElement.children[1].children[1].children[0].innerHTML = response['image'];
                // file.previewElement.children[1].children[0].children[0].innerHTML = file['size'];
                $('.dz-image img').attr('height', '120')

            },
            accept: function (file, done) {
                this.options.resizeWidth = 650;
                this.options.resizeQuality = 0.75;
                console.log(this.options);
                done();
                return;
            },
            init: async function () {
                let myDropzone = this;
                var existing_files = $('[name="image[]"]').val();
                $.get('{{route('admintentang.image')}}', function (data,d,r) {
                    if (r.status === 200) {
                        console.log(data)
                        $.each(data, function (key, value) {
                            var mockFile = {
                                name: value['image'],
                                size: value['size'],
                                idImg: value['id']
                            };
                            myDropzone.displayExistingFile(mockFile, value['image']);
                        })

                    }
                })
                $('.dz-image img').attr('height', '120');
            }

        };

    </script>
@endsection
