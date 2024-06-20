@extends('layouts.app')


@section('content')


  <div class="w-4/5 m-auto text-center">

   <div class="py-20 border-b border-gray-200">

       <h1 class="text-6xl">
        Updated Post
       </h1>
   </div>

</div>


@if ($errors->any())

<div class="w-4/5 m-auto">


      <ul>

        @foreach($errors->all() as $error)


        <li class="w-1/5 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">

            {{ $error }}

        </li>

        @endforeach

      </ul>
</div>


@endif

<div class="w-4/5 pt-20 m-auto">
  <form
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="block w-full h-20 text-6xl bg-transparent border-b-2 outline-none">

        <textarea
            name="description"
            class="block w-full py-20 text-xl bg-transparent border-b-2 outline-none h-60">{{ $post->description }}</textarea>

        <div class="pt-15 bg-grey-lighter">
            <label class="flex flex-col items-center px-2 py-3 tracking-wide uppercase border shadow-lg cursor-pointer w-44 bg-white-rounded-lg border-blue">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button
            type="submit"
            class="px-8 py-4 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 rounded-3xl">
            Updated Post
        </button>
    </form>

</div>

@endsection
