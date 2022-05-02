@extends('layouts.app')

@section('content')
    <div class="w-full h-full" style ="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHvjxY3fhVHSJqBoOILXt9Zk2x-s8ltVWZzg&usqp=CAU');">
        <div class="flex text-black-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Are you starting to learn how to code?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More!!!
                </a>
            </div>
        </div>

        <p>
    </div>

    <div class="flex items-center sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        

        <div class="m-auto rounded-md sm:m-auto text-center w-4/5 ">
            <h2 class="text-3xl font-extrabold text-black-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-5 text-black text-s">
                @foreach ($posts as $post)
                @if ($post -> slug == "web-development")
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>
                <span class="text-gray-500">
                    <span class="font-bold italic text-gray-800">{{ $post->subtitle }}</span>
                </span>
                <p class="font-extrabold text-gray-600 text-s pb-9">
                    {{ $post->description }}
                </p>
                @endif
                @endforeach
            </p>
        
            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    
    <div class="m-auto rounded-md sm:m-auto text-center w-4/5 ">
        <h2 class="text-3xl font-extrabold text-black-600">
            PHP got your brain fried?
        </h2>
        
        <p class="py-5 text-black text-s">
            @foreach ($posts as $post)
            @if ($post -> slug == "php")
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>
            <span class="text-gray-500">
                <span class="font-bold italic text-gray-800">{{ $post->subtitle }}</span>
            </span>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                {{ $post->description }}
            </p>
            @endif
            @endforeach
        </p>
    
        <a 
            href="/blog"
            class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
    </div>
</div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Be an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Most Recent Post
        </h2>

        @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->sign_off_message }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

        </div>
    </div> 
       @break;
@endforeach
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-500 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    PHP is an easy language to grasp, and it's a great start before you dive into more complex web languages like HTML,CSS, SQL, and JavaScript. If you're learning WordPress too, keep an eye on what people are using with it
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
           
        </div>
            <div class="flex bg-blue-500 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase text-xs">
                        REACT JS
                    </span>
    
                    <h3 class="text-xl font-bold py-10">
                        Is React easy to learn?
                        React is a cool tool for web development, and as cool as it is, it's very easy to learn. Learning it at the right time puts you at a higher advantage. To step up your web development career with React you can learn NextJS or Remix easily.
                    </h3>
    
                    <a 
                        href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
               
            </div>
        
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
 
