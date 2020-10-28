@extends('layouts.app')
@section('title')
{{ $article->title }}
@endsection
@section('content')
<!--Title-->
<div class="font-sans">
    <h1 class="font-sans break-normal text-gray-900 pt-2 pb-2 text-xl">{{ $article->title }}</h1>
    <hr class="border-b border-gray-400">
</div>
<!--Post Content-->
<!--Lead Para-->
<p class="py-6">
    {!! $article->body !!}
</p>
<!--/ Post Content-->
@endsection
