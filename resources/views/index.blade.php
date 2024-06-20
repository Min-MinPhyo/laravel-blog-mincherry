@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 m-auto background-image">
        <div class="flex pt-10 text-gray-100">
            <div class="block w-4/5 pt-4 pb-16 m-auto text-center sm:m-auto">
                <h1 class="text-5xl font-bold uppercase sm:text-white text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a
                    href="/blog"
                    class="px-4 py-2 text-xl font-bold text-center text-gray-700 uppercase bg-gray-50">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="w-4/5 grid-cols-2 gap-20 py-20 mx-auto border-b border-gray-200 sm:grid">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="block w-4/5 m-auto text-left sm:m-auto">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

            <a
                href="/blog"
                class="px-8 py-2 font-extrabold text-gray-100 uppercase bg-blue-500 text-s rounded-3xl">
                Find Out More
            </a>
        </div>


    </div>


    <div class="py-12 text-center text-white bg-black p-15">
        <h2 class="pb-5 text-2xl text-l">
            I'm an expert in...
        </h2>

        <span class="block py-1 text-4xl font-extrabold">
            Ux Design
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Project Management
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Digital Strategy
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Backend Development
        </span>
    </div>

    <div class="py-20 text-center">
        <span class="text-gray-800 uppercase text-s">
            Blog
        </span>

        <h2 class="py-10 text-4xl font-bold">
            Recent Posts
        </h2>

        <p class="w-4/5 m-auto text-gray-500 py-9">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="w-4/5 grid-cols-2 m-auto sm:grid">
        <div class="flex pt-10 text-gray-100 bg-yellow-700">
            <div class="block w-4/5 pt-4 pb-16 m-auto sm:m-auto">
                <span class="text-xs uppercase">
                    PHP
                </span>

                <h3 class="py-10 text-xl font-bold">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a
                    href=""
                    class="px-5 py-3 text-xs font-extrabold text-gray-100 uppercase bg-transparent border-2 border-gray-100 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div flex pt-10 text-gray-100 bg-yellow-700>
            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2hpdGUlMjBsYXB0b3B8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            alt=""
            width="700"
        </div>
    </div>
@endsection
