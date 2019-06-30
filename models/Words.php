<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "words".
 *
 * @property int $id
 * @property string $text
 * @property string $tag
 */
class Words extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'words';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'tag'], 'required'],
            [['text'], 'string', 'max' => 250],
            [['tag'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'tag' => 'Tag',
        ];
    }
}
