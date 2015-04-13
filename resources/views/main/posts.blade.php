@extends('welcome')

@section('content')
    <br/><br/><br/><br/><br/>
    @foreach($posts as $post)
        <h2>{{ $post->post_title }}</h2>
        <p>{{ $post->post_content }}</p>
        <span>Written By: {{ $post->post_author }} on {{ $post->post_date }}</span>
    @endforeach
@endsection