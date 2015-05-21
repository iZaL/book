<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class BookTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testPublishBook()
    {
        Auth::loginUsingId(1);

//        $this->post('/book/store', [
//            'free' => 1,
//            'title_en' => 'title in english',
//            'title_ar' => 'title in arabic',
//            'body' => 'this is pdf content',
//            'status' => 'draft'
//        ]);

        $this->visit('/book/create')
            ->check('free')
            ->type('title in english', 'title_en')
            ->type('title in arabic', 'title_ar')
            ->type('asdasdasd asdasdasdasdasdasd a', 'body')
            ->press('Save Draft');

        $this->seeInDatabase('books',
            ['title_en' => 'title in english', 'title_ar' => 'title in arabic', 'status' => 'draft']);

        $book = App\Src\Book\Book::where('title_en', 'title in english')->first();

        $this->seeInDatabase('book_metas', ['book_id' => $book->id, 'total_pages' => 1]);

        $this->fileExists(base_path('storage/app/pdfs/' . $book->url));

        $this->onPage('/book');
    }
}
