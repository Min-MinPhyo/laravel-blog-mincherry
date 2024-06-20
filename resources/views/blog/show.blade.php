@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">


    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>


</div>

<div class="w-4/5 pt-20 m-auto">




    <span class="text-gray-500">
        By <span class="italic font-bold text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>




    <p class="pt-8 pb-10 text-xl font-light leading-8 text-gray-700">
        {{ $post->description }}
    </p>




</div>

@endsection
