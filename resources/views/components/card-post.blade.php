@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->imagen)
        <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->imagen->url) }}" alt="">
        @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/08/09/15/44/tower-5475850__340.jpg" alt="">
    @endif
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
    </div>
    <div class="text-gray-700 text-base px-6">
        {!! $post->extract !!}
    </div>
    <div class="px-4 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag',$tag )}}"
                class="inline-block rounded-full bg-gray-200  px-4 py-1 text-sm text-gray-700 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>