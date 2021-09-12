

@extends('layouts.base')

@section('content')
    <div class="flex justify-center p-3">
        <span class="text-4xl bold">All kataegori</span>
    </div>
    @foreach ($label as $item)
    <div class="mb-4 border bottom-4 p-3 rounded-md shadow-sm bg-blue-100">
        <a href="/post/class/{{$item->slug}}"><span class=" text-xl font-bold hover:text-red-400">{{$item->name}}</span></a>

    </div>

    @endforeach
@endsection
