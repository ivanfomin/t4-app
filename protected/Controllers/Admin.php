<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 11.11.16
 * Time: 13:28
 */

namespace App\Controllers;

use App\Models\Book;
use T4\Mvc\Controller;

class Admin extends Controller
{
    public function actionDefault()
    {
        $this->data->books = Book::findAll();
    }

    public function actionAdd()
    {
        //Nothing to do
    }

    public function actionChange($id)
    {
        $this->data->book = Book::findByPK($id);

    }


    public function actionSave(Book $book)
    {
        $book->save();
        $this->redirect(':' . $this->app->request->url->port . '/admin/');
    }

    public function actionDelete($id)
    {
        $book = Book::findByPK($id);
        if (!empty($book)) {
            $book->delete();
        }
        $this->redirect(':' . $this->app->request->url->port . '/admin/');
    }
}