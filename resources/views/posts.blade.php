
@extends('layouts.main')
@section('container')  
<article> 
@foreach ($posts as $post)
<h4 class="mt-4"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>

<p>{{ $post->excerpt }}</p>
</article>
    
@endforeach
@endsection

