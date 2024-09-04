@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto mt-10 pl-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-full mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-6">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="{{ route('blog.update', $post->slug) }}" 
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('GET')

        <input 
            type="text"
            name="title"
            value="{{ old('title', $post->title) }}"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ old('description', $post->description) }}</textarea> 

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Update Post
        </button>
    </form>
</div>

@endsection
