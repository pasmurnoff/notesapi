<?php

namespace frontend\controllers;

use common\models\Note;
use yii\rest\ActiveController;

class NoteController extends ActiveController 
{
    public $modelClass = Note::class;
}