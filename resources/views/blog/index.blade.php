@extends('layouts.app')


@section('content')


  <div class="w-4/5 m-auto text-center">

   <div class="py-20 border-b border-gray-200">

       <h1 class="text-6xl">
        Blog Posts
       </h1>
   </div>

</div>

@if(session()->has('message'))

<div class="w-4/5 pl-2 m-auto mt-10">

<p class="w-2/6 px-2 py-4 mb-4 bg-green-700 text-gray-50 rounded-2xl">


{{ session()->get('message') }}

</p>

</div>

@endif


@if(Auth::check())

<div class="w-4/5 m-auto pt-15">

    <a href="/blog/create"
       class="px-5 py-3 text-xs font-extrabold text-gray-200 uppercase bg-blue-800 rounded-3xl">
       Create Post
</a>

</div>

@endif

@foreach ($posts as $post )
<div class="w-4/5 grid-cols-2 gap-20 pt-20 mx-auto border-b border-gray-200 sm:grid py-18">


    <div>

        <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2hpdGUlMjBsYXB0b3B8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="aaaaaaaaa" width="700"
        >
    </div>



    <div>

        <h2 class="pb-4 text-5xl font-bold text-gray-700">

        {{ $post->title }}
    </h2>

    <span class="text-gray-500">

        By <span class="italic font-bold text-gray-800">{{ $post->user->name }}</span>,Created On {{ date('jS M Y',strtotime($post->updated_at)) }}
    </span>

    <p class="pt-8 pb-10 text-xl font-light leading-8 text-gray-700">
    {{ $post->description }}

    </p>
    <a href="/blog/{{ $post->slug }}" class="px-8 py-4 text-lg font-extrabold text-gray-800 uppercase bg-blue-500 rounded-3xl"><italic>Kee Reading</italic></a>


    @if(isset(Auth::user()->id) && Auth::user()->id==$post->user_id)


    <span class="float-right">
        <a href="/blog/{{ $post->slug }}/edit"
            class="pb-1 italic text-gray-700 border-b-2 hover:text-gray-900">
                Edit
        </a>
    </span>


  <span class="float-right">


    <form action="/blog/{{ $post->slug }}" method="POST">

   @csrf
   @method('delete')


   <button class="pr-3 text-red-500" type="submit">
    Delete
   </button>

    </form>
  </span>

    @endif

</div>



    <div>
        <h2>
            Learn how to write Laravel code
        </h2>
    </div>
</div>

@endforeach





@endsection
