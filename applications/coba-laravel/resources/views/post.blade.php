@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5">
  <div class="col-md-8">
    <h1 class="mb-3">{{$post->title}}</h1>
    <p>By. <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/posts?category{{ $post->category->slug }}">{{$post->category->name}}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

    <article class="my-3 fs-5">
      {!! $post->body !!}
    </article>

    <a class="d-block mt-5" href="/blog">Back To Posts</a>
  </div>
</div>

    {{-- <a href="/posts">Kembali</a> --}}

@endsection

