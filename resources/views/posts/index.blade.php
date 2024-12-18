@extends('layouts.app')

@section('title','Blog Posts')

@section('content')
    @forelse($post as $key => $post)
        @include('posts.partials.posts', ['testvar' => 'Test Value'])
    @empty
        <p>No Posts found!</p>
    @endforelse
@endsection
