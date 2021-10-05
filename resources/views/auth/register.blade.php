@extends('layouts.base')
@section('content')



    <form class="p-10 bg-white rounded flex justify-center items-center flex-col" action="/register" method="POST">
        @csrf
        <p class="mb-5 text-3xl uppercase text-gray-600">Registrasi</p>
        <input type="text" name="name"
            class="mb-2 p-3 w-96 focus:border-purple-700 rounded border-2 outline-none  @error('name') outline-black text-red-500 @enderror"
            autocomplete="off" placeholder="Nama" value="{{ old('name') }}">
        <input type="text" name="username"
            class="mb-2 p-3 w-96 focus:border-purple-700 rounded border-2 outline-none  @error('username') outline-black text-red-500 @enderror"
            autocomplete="off" placeholder="Usernama" value="{{ old('username') }}">
        <input type="email" name="email"
            class="mb-3 p-3 w-96 focus:border-purple-700 rounded border-2 outline-none  @error('email') outline-black text-red-500 @enderror"
            autocomplete="off" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password"
            class="mb-3 p-3 w-96 focus:border-purple-700 rounded border-2 outline-none  @error('password') outline-black text-red-500 @enderror"
            autocomplete="off" placeholder="Password">
        <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-96" id="login"
            type="submit"><span>Daftar</span></button>
        <small class="mt-2">have accout <a class="underline" href="/login">Login</a></small>
    </form>

@endsection
