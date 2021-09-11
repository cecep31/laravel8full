@extends('layouts.base')

@section('content')


    @foreach ($post as $item)
    <div class="mb-4 border bottom-4 p-3 rounded-md shadow-sm bg-blue-100">
        <a href="/post/{{$item["slug"]}}"><span class=" text-xl font-bold hover:text-red-400">{{$item["title"]}}</span></a>
        <h5>By: {{$item["author"]}}</h5>
        <p>{{$item["body"]}}</p>
    </div>

    @endforeach
@endsection
