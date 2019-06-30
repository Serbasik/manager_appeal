<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appeal".
 *
 * @property int $id
 * @property string $data
 * @property string $text
 * @property int $templ_id
 */
class Appeal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appeal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'text'], 'required'],
            [['text'], 'string'],
            [['templ_id'], 'integer'],
            [['data'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'text' => 'Text',
            'templ_id' => 'Templ ID',
        ];
    }
}
