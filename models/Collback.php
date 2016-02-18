<?php

namespace app\models;



use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "posts".
 *

 */
class Collback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collback';
    }
    
    public $time;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['telephone', 'email', 'comment'], 'required'],
            ['email', 'email'],
            [['created_at', 'updated_at', 'time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'telephone' => 'Телефон',
            'email' => 'Email',
            'comment' => 'Коментарий',
        ];
    }

    public function behaviors()
    {
      return [
        TimestampBehavior::className(),
      ];
    }
   
}