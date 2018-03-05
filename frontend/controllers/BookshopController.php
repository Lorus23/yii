<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {

        //$bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();

        return $this->render('index',[
            'bookList'=>$bookList,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();
        if ($book->load(Yii::$app->request->post())) {
            if ($book->save()) {
                Yii::$app->session->setFlash('success', 'Saved!');
            }
        }

        return $this->render('create', [
            'book' => $book,
        ]);
    }
}
