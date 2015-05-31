<?php namespace App\Src\Book;
use App\Core\BaseModel;
use App\Core\LocaleTrait;
class Book extends BaseModel
{
    use LocaleTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    protected $localeStrings = ['title'];
    /**
     * @return mixed
     * return All books that has a Draft Status
     */
    public function draftedBooks()
    {
        return $this->where('status', 'draft');
    }
    /**
     * @return mixed
     * return All books that has a Published Status
     */
    public function publishedBooks()
    {
        return $this->where('status', 'published');
    }
    public function meta()
    {
        return $this->hasOne('App\Src\Book\BookMeta');
    }

    /*
     * RELSATIONS
     * */

    /*
     * a book belongs to one user
     * */

    public function user() {
        return $this->belongsTo('App\Src\User\User');
    }
}