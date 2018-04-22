<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $content_cut
 * @property string $content
 * @property string $created_at
 * @property int $created_by id user
 * @property string $updated_at
 * @property int $updated_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'created_at', 'created_by', 'content', 'status'], 'required'],
            [['content_cut', 'content'], 'string'],
            [['created_at', 'updated_at', 'status'], 'safe'],
            [['created_by', 'updated_by', 'status'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Judul',
            'content_cut' => 'Content Cut',
            'content' => 'Artikel/Berita',
            'created_at' => 'Created At',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
