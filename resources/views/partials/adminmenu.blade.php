@foreach ($categories as $category)
<ul class="list-reset">
    <p class="text-base font-bold py-2 text-gray-700">{{ $category->title }}</p>
    @foreach ($category->articles as $article)
    <li class="py-1 md:my-0 hover:bg-blue-100 lg:hover:bg-transparent">
        <a href="{{ route('article.show', $article) }}"
            class="block pl-4 align-middle text-gray-700 no-underline hover:text-blue-500 border-l-4 border-transparent lg:hover:border-gray-400">
            <span class="pb-1 md:pb-0 text-sm text-gray-900">{{ $article->title }}</span>
        </a>
    </li>
    @endforeach
</ul>
@endforeach
