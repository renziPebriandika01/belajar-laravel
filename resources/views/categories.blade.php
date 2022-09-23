
@extends('layouts.main')
@section('container')  

<h1 class="mb-5">Categories</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h4 class="mt-4"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h4>
    </li>
</ul>    
@endforeach
@endsection

