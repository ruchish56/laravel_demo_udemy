@extends('layouts.app')

@section('title', 'Create Post Form')

@section('content')
    <form action="{{ route('posts.store') }}" method="post" id="postform">
        @csrf
        @include('posts.partials.form')
        <div><input type="submit" value="create" class="btn btn-primary btn-block"></div>
    </form>
@endsection
