<x-layout>


    
<h1>
    {!! $post->title  !!} 
</h1>

<p>
    By {{$post->user->name}} in <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a>
</p>

<div>
    {!! $post->body  !!} 
</div>


<a href="/">Go Back</a>


</x-layout>
