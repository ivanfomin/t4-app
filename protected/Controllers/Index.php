<?php

namespace App\Controllers;

use App\Models\Book;
use T4\Mvc\Controller;

class Index extends Controller
{

    public function actionDefault()
    {
        $this->app->assets->publishCssFile('/Layouts/style.css');
        $this->data->books = Book::findAll();
    }

    public function actionPage($id)
    {
        $book = Book::findByPK($id);

        if (!empty($book)) {
            $this->data->fragment = $book['fragment'];
        }
        //$this->redirect(':' .  $this->app->request->url->port . '/index/');
    }

}