@extends('layouts.main')

@section('container')
    <div class="clearfix">
        @foreach ($posts as $post)
            <div class="mb-5 col-md-4 float-start p-4">
                <h2>
                    <a href="/book/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                </h2>
                <h5>By: {{ $post['author'] }}</h5>
                <div class="d-flex justify-content-center">
                    <img src="img/book.jpg" alt="" style="width:230px; height:240px;">
                </div>
                <p>{{ $post['description'] }}</p>
                <div class="bg-primary bg-gradient">
                    READ THIS BOOK
                </div>
            </div>
        @endforeach
    </div>
@endsection
