<x-app>

<article style="background-color: cornsilk" class="px-2">
    <h1>{{ $post->title}}</h1>
    <p>
       By <a href="">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
    </p>
    <div class="d-flex pb-3 align-items-start">
        <p class="pe-3">{!! $post->body !!}</p>
        <img src="{{ $post->image }}" alt="">
    </div>
    <a href="/" >Back</a>
</article>

</x-app> 

