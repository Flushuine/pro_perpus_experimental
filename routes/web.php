<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/book', function () {
    $book_posts = [
        [
            "title" => "Judul Buku Kesatu",
            "slug" => "judul-buku-kesatu",
            "author" => "Muhammad Agil",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ],
        [
            "title" => "Judul Buku Kedua",
            "slug" => "judul-buku-kedua",
            "author" => "Hulwa Sefianggi",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ],
        [
            "title" => "Judul Buku Ketiga",
            "slug" => "judul-buku-ketiga",
            "author" => "Muhammad Agil",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ]
    ];
    return view('books', [
        "title" => "Book",
        "posts" => $book_posts
    ]);
});

Route::get('book/{slug}', function ($slug) {
    $book_posts = [
        [
            "title" => "Judul Buku Kesatu",
            "slug" => "judul-buku-kesatu",
            "author" => "Muhammad Agil",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ],
        [
            "title" => "Judul Buku Kedua",
            "slug" => "judul-buku-kedua",
            "author" => "Hulwa Sefianggi",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ],
        [
            "title" => "Judul Buku Ketiga",
            "slug" => "judul-buku-ketiga",
            "author" => "Muhammad Agil",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo distinctio doloribus incidunt numquam qui possimus ipsum, repellat iure? Veritatis corporis repellendus, neque esse voluptatum ea perspiciatis necessitatibus minus quae totam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt iste fuga nihil, iure consequuntur dolor quibusdam. Fuga officiis commodi, impedit esse, consequuntur praesentium dicta molestias libero ratione, nisi delectus pariatur."
        ]
    ];

    $new_book = [];
    foreach ($book_posts as $book) {
        if ($book['slug'] === $slug) {
            $new_book = $book;
        }
    }

    return view('book', [
        "title" => "Single Post",
        "book" => $new_book
    ]);
});
