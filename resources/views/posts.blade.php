@extends('layouts.base')

@section('content')
    <div class="flex justify-center p-3">
        <span class="text-4xl bold">Blog</span>
    </div>

    <main class="flex items-center p-10 w-full h-full bg-white">
        <div class="border-t border-b pt-16 md:grid md:grid-cols-2 md:gap-8">
            <div class="flex flex-col justify-start">
                <div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
                    style="min-heigth:320px">
                    <img class="w-full h-full object-cover"
                        src='https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
                        alt='nike shoes'>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col gap-4">
                    <h1 class="capitalize text-4xl font-extrabold">Nike shoes</h1>
                    <h2 class="text-3xl">$44</h2>
                    <p class="text-lg text-gray-500	">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus voluptatum nisi maxime obcaecati impedit? Ratione error eum qui quidem? Veniam
                        accusamus ea repudiandae itaque, explicabo quidem perspiciatis. Culpa, asperiores deserunt.</p>
                    <div class="flex items-center gap-4 my-6 cursor-pointer ">
                        <div class="bg-blue-600 px-5 py-3 text-white rounded-lg w-2/4 text-center">Add to bag</div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="bg-gray-100 text-gray-700  font-sans quicksand">

        <div class="p-16">
          <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10">


                  <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
              <div class="m-2 text-justify text-sm">
                  <p class="text-right text-xs">May 17, 2020</p>
                  <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                  <p class="text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>
              <div class="w-full text-right mt-4">
                <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
              </div>
          </div>

          </div>
        </div>

    </div>


    @foreach ($post as $item)
        <div class="mb-4 border bottom-4 p-3 rounded-md shadow-sm bg-blue-100">
            <a href="/post/{{ $item->slug }}"><span
                    class=" text-xl font-bold hover:text-red-400">{{ $item->title }}</span></a>
            <h2 class="my-2">By : {{ $item->user->name }}</h2>
            <p>{{ $item->body }}</p>
        </div>

    @endforeach
@endsection
