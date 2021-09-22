@extends('layouts.base')
@section('content')
    @if (session('success'))
        <div class="flex items-center justify-center" id="alert">
            <div class="w-full mx-auto">
                <!-- Title -->

                <!-- End Title -->

                <!-- Alert Success -->
                <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                            d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                        </path>
                    </svg>
                    <span class="text-green-800"> Your account has been saved. </span>
                </div>
                <!-- End Alert Success -->

                {{-- <!-- Alert Error -->
                <div class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                            d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
                        </path>
                    </svg>
                    <span class="text-red-800"> Your email address is invalid. </span>
                </div>
                <!-- End Alert Error -->

                <!-- Alert Warning -->
                <div class="bg-orange-200 px-6 py-4 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-yellow-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                            d="M23.119,20,13.772,2.15h0a2,2,0,0,0-3.543,0L.881,20a2,2,0,0,0,1.772,2.928H21.347A2,2,0,0,0,23.119,20ZM11,8.423a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h-.028a1.528,1.528,0,0,1-1.522-1.47,1.476,1.476,0,0,1,1.448-1.53h.028A1.527,1.527,0,0,1,13.5,18.4,1.475,1.475,0,0,1,12.05,19.933Z">
                        </path>
                    </svg>
                    <span class="text-yellow-800">
                        You are currently on the Free plan.
                    </span>
                </div>
                <!-- End Alert Warning -->

                <!-- Alert Info -->
                <div class="bg-blue-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-blue-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                            d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,1,1,0,2Z">
                        </path>
                    </svg>
                    <span class="text-blue-800"> We've updated a few things. </span>
                </div> --}}
                <!-- End Alert Info -->
            </div>
        </div>
    @endif
    <form class="p-5 bg-white rounded flex justify-center items-center flex-col shadow-md" action="/login" method="POST">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-600 mb-2" viewbox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                clip-rule="evenodd" />
        </svg>
        <p class="mb-5 text-3xl uppercase text-gray-600">Login</p>
        <input type="email" name="email" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"
            autocomplete="off" placeholder="Email" required autofocus>
        <input type="password" name="password" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"
            autocomplete="off" placeholder="Password" required>
        <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" id="login"
            type="submit"><span>Login</span></button>
        <small class="mt-2">Not have accout <a class="underline" href="/register">daftar</a></small>
    </form>
    <script>
        $(document).ready(function() {
            setInterval(() => {
                $("#alert").hide();
            }, 3000)
        });
    </script>
@endsection
