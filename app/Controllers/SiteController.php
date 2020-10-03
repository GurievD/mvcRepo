<?php


namespace App\Controllers;

use App\Models\Book;
use Laminas\Diactoros\ServerRequest;

class SiteController
{

    function index() {
        /** @var Book[] $books */
        $books = Book::all();

        return view('index', [
            'books' => $books
        ]);
    }

    function newBook(ServerRequest $request) {
        $data = $request->getParsedBody();

        $book = new Book();
        $book->name = $data['name'];
        $book->author = $data['author'] ?? null;
        $book->year = (int)($data['year'] ?? null);
        $book->save();

        return redirect('/');
    }

}
