@extends('layouts.main')
@section('container')
<h4>{{ $post->title }}</a></h4>
<p>by renzi febriandika in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body!!}
{!! $post->excerpt!!}
<a href="/posts">kembali</a>
    
@endsection