@extends('layouts.app')

@section('content')
<div class=" w-4/5 m-auto text-left">
    <div class=" py-15">
        <h1 class="text-5xl">
            Create Blog Post
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

<div class=" md:container md:mx-auto md:max-w-lg md:mt-10" >
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title"
            class="center bg-transparent block border-b-2 w-2/2 h-20 text-4xl outline-none">
        <input 
            type="text"
            name="subtitle"
            placeholder="Subtitle"
            class="center bg-transparent block border-b-2 w-2/2 h-20 text-4xl outline-none">

        <textarea 
            name="description"
            placeholder="Description"
            class="py-10 bg-transparent block border-b-2 w-100 h-40 text-3xl outline-none"></textarea>

        <textarea 
            name="sign_off_message"
            placeholder="Sign Off"
            class=" py-10 bg-transparent block border-b-2 w-100  h-30 text-3xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="w-50   justify-center items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-yellow cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    
                </span>
                <input 
                    type="file"
                    name="image"
                    >
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection