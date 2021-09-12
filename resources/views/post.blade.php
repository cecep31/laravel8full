@extends('layouts.base')
@section('content')

    <div class="mb-4 border bottom-4 p-3 rounded-md shadow-sm bg-blue-100">
        <div class="flex justify-center">
            <h1 class="text-xl font-bold">{{ $post->title }}</h1>
        </div>
        <p>ny cecep <a class="bold" href="/post/{{$post->label->slug}}">{{$post->label->name}}</a></p>

        {!! $post->body !!}
        <br>
        <a class="text-blue-600 underline mt-4" href="/blog">back to blog</a>
    </div>


@endsection
