@extends('dashboard.layouts.base')
@section('content')

        <div class="w-full bg-white rounded shadow-2xl p-8 m-1">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Add Post</h1>
            <form action="/" method="post">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Title</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Category</label>
                    <select class="border py-2 px-3 text-grey-800" name="">
                        <option>programing</option>
                        <option>Jakarta</option>
                        <option>Bandung</option>
                        <option>Mojokerto</option>
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">Article</label>
                    <textarea class="border py-2 px-3 text-grey-800" name="textarea" rows="8" id="textarea"></textarea>
                </div>
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded"
                    type="submit">Save</button>
            </form>
        </div>

@endsection
