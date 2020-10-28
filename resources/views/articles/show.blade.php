@extends('layouts.app')
@section('content')
<!--Title-->
<div class="font-sans">
    <h1 class="font-sans break-normal text-gray-900 pt-2 pb-2 text-xl">{{ $article->title }}
        @role('editor')
        <a href="{{ route('article.edit', $article) }}"
            class="bg-pink-500 text-white p-1 rounded-md font-bold text-sm">Edit
            this article</a>
        @endrole</h1>

    <hr class="border-b border-gray-400">
</div>
<!--Post Content-->
<!--Lead Para-->



<p class="py-6">
    {!! $article->trixRichText()->where('field', 'content')->first()->content ?? 'No content here yet' !!}
</p>
<!--/ Post Content-->
@endsection
