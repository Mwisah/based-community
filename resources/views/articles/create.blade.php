@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('article.store') }}">
    @csrf
    <div class="mb-4">
        <label for="email" class="block text-sm font-bold leading-5 text-gray-700">Title</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="title" name="title" class="form-input block w-full sm:text-sm sm:leading-5"
                placeholder="Title of the article" required>
        </div>
    </div>
    <div class="mb-4">
        <label for="category" class="block text-sm leading-5 font-bold text-gray-700">Category</label>
        <select id="category" name="category"
            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="status" class="block text-sm leading-5 font-bold text-gray-700">status</label>
        <select id="status" name="active"
            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="body" class="block text-sm font-bold leading-5 text-gray-700">Body</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            @trix(\App\Models\Article::class, 'content')
        </div>
    </div>

    <input type="submit">
</form>
@endsection
