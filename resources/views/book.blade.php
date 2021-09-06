@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $book['title'] }}</h2>
        <h5>{{ $book['author'] }}</h5>
        <p>{{ $book['description'] }}</p>
    </article>

    <a href="/book">Back to Books</a>
@endsection
