<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "links_wt".
 *
 * @property int $id
 * @property int $word_id
 * @property int $template_id
 * @property int $weight
 */
class LinksWt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links_wt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['word_id', 'template_id', 'weight'], 'required'],
            [['word_id', 'template_id', 'weight'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'word_id' => 'Word ID',
            'template_id' => 'Template ID',
            'weight' => 'Weight',
        ];
    }
}
