@extends('base')

@section('morecss')
@endsection
@section('content')
    <div class="bg-blue ">

        <div class="h-20"></div>



        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d988.7471019796708!2d110.8210468!3d-7.5762397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16651c92a4b3%3A0x928048653edd0c3e!2sJl.%20Jayengan%20Kidul%20No.14%2C%20Jayengan%2C%20Kec.%20Serengan%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057152!5e0!3m2!1sen!2sid!4v1679639625143!5m2!1sen!2sid"
            class="w-full z-10 relative" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


        <section class="kontak z-10 relative" class="mt-10">

            <div class="mx-auto container">

                <div class="">
                    <div class="info">
                        <p class="text-4xl text-center" data-aos="fade-up" data-aos-duration="300"><span
                                class="text-primary font-bold">Kontak </span> Kami
                        </p>
                        <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600" data-aos="fade-up"
                            data-aos-duration="300">
                            Office</p>
                        <a class="text-center link font-bold text-lg block" data-aos="fade-up" data-aos-duration="300"
                            href="https://goo.gl/maps/HKvAqTnJS7nkijZ9A" target="_blank">Jayengan Kidul RT 003 RW 008
                            Jayengan
                            Serengan
                            Surakarta
                        </a>

                        <div class="md:grid md:grid-cols-3 " data-aos="fade-up" data-aos-duration="300">
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Instagram</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.instagram.com/kawanbelajarpajak/?hl=cs"
                                    target="_blank">@temanbelajarakuntansi
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Whatsapp</p>
                                <a class="text-center link font-bold block text-lg" href="https://wa.me/628975050520"
                                    target="_blank">0897-5050-520
                                </a>
                            </div>
                            <div>
                                <p class="text-center p-10 mb-0 pb-0 text-2xl text-gray-600">Facebook</p>
                                <a class="text-center link font-bold block text-lg"
                                    href="https://www.facebook.com/pembelajaranpajak/" target="_blank">KBP Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
