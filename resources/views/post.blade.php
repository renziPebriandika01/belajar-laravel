@extends('layouts.main')
@section('container')
<h4>{{ $post->title }}</a></h4>

{!! $post->body!!}
{!! $post->excerpt!!}
<a href="/posts">kembali</a>
    
@endsection