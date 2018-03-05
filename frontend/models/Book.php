<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 005 05.03.18
 * Time: 10:44
 */

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return '{{book}}';
    }

    public function rules()
    {
      return [
          [['name','publisher_id'],'required'],
      ];
    }

    public function getDatePublish()
    {
    return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Not set";
    }

    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id'=>'publisher_id'])->one();
    }

    public function getPublisherName()
    {
        $publisher = $this->getPublisher();
        if ($publisher){
            return $publisher->name;
        }
        return "Not set";
    }

    public function getBookToAuthorRelations()
    {
        return $this->hasMany(BookToAuthor::className(),['book_id'=>'id']);
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::className(),['id'=>'author_id'])->via('bookToAuthorRelations')->all();
    }
}