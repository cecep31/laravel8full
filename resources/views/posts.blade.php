@extends('layouts.base')

@section('content')
    <div class="flex justify-center p-3">
        <span class="text-4xl bold">Blog</span>
    </div>
    @foreach ($post as $item)
    <div class="mb-4 border bottom-4 p-3 rounded-md shadow-sm bg-blue-100">
        <a href="/post/{{$item->slug}}"><span class=" text-xl font-bold hover:text-red-400">{{$item->title}}</span></a>
        <p>{{$item->body}}</p>
    </div>

    @endforeach
@endsection
