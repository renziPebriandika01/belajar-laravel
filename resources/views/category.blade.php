
@extends('layouts.main')
@section('container')  

<h1 class="mb-5">post category:{{ $category }}</h1>
<article> 
@foreach ($posts as $post)
<h4 class="mt-4"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>

<p>{{ $post->excerpt }}</p>
</article>
    
@endforeach
@endsection

