@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-5xl">
            Update {{ $post->title }}
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="2xl:container mx-auto lg:max-w-lg ">
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class=" bg-transparent block border-b-2 w-2/2 h-20 text-4xl outline-none">

        <textarea 
            name="description"
            placeholder="Description"
            class=" py-20 bg-transparent block border-b-2 w-full h-40 text-2xl outline-none">{{ $post->description }}</textarea> 
        <textarea 
            name="sign_off_message"
            placeholder="Sign Off"
            class=" py-10 bg-transparent block border-b-2 w-3/4 h-25 text-xl outline-none"></textarea>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection