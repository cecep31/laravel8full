@extends('layouts.base')

@section('content')
    <!-- Create By Joker Banny -->
    <div class="flex justify-end">

    </div>
    <div class="sm:flex justify-center sm:justify-between p-3">
        <span class="text-4xl font-bold">Blog</span>
        <div class="bg-white p-2 w-96 rounded-md">

            <form action="/blog" method="get">
            <div class="mt-5 mb-2 border-2 py-1 px-3 flex justify-between rounde-md rounded-md">
                    <input class="flex-grow outline-none" name="find" text-gray-600 focus:text-blue-600" type="text"
                    placeholder="Search Postingan..." value="{{request('find')}}" />
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-400 hover:text-blue-400 transition duration-100 cursor-pointer" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </button>
                </spa>
            </div>
        </form>
        </div>
    </div>

    <main class="flex items-center p-10 w-full h-full bg-white">
        <div class="border-t border-b pt-5 md:grid md:grid-cols-2 md:gap-8">
            <div class="flex flex-col justify-start">
                <div class="flex flex-col w-full object-cover h-6/6 justify-items-start border rounded-lg overflow-hidden"
                    style="min-heigth:320px">
                    <img class="w-full h-full object-cover"
                        src='https://source.unsplash.com/400x150/?{{ $post[0]->label->name }}' alt='{{ $post[0]->label->name }}'>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col gap-4">
                    <h1 class="capitalize text-4xl font-extrabold">{{ $post[0]->title }}</h1>
                    <h2 class="text-3xl">$44</h2>
                    <p class="text-lg text-gray-500	">{{ $post[0]->body }}</p>
                    <div class="flex items-center gap-4 my-6 cursor-pointer ">
                        <div class="bg-blue-600 px-5 py-3 text-white rounded-lg w-2/4 text-center">Read More</div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="bg-gray-100 text-gray-700  font-sans quicksand">

        <div class="p-1">
            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10">

                @foreach ($post->skip(1) as $item)

                    <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                        <div class="m-2 text-justify text-sm">
                            <p class="text-right text-xs">{{ $item->created_at->diffForHumans() }}</p>
                            <h2 class="font-bold text-base h-2 mb-8">{{ $item->title }}</h2>
                            <p class="text-xs">
                                {{ $item->body }}
                            </p>

                        </div>
                        <div class="w-full text-right mt-4">
                            <a class="text-green-400 uppercase font-bold text-sm" href="/post/{{ $item->slug }}">Read
                                More</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>




@endsection
