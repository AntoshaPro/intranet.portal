<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "status_message".
 *
 * @property integer $id
 * @property string $controller_name
 * @property string $action_name
 * @property string $status_message_name
 * @property string $subject
 * @property string $body
 * @property string $status_message_description
 * @property string $created_at
 * @property string $updated_at
 */
class StatusMessage extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [

                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                ['controller_name', 'action_name', 'status_message_name', 'subject', 'body', 'status_message_description'],
                'required'],
            [
                ['created_at', 'updated_at'],
                'safe'],
            [
                ['controller_name', 'action_name', 'status_message_name'],
                'string', 'max' => 105],
            [
                ['subject', 'status_message_description'],
                'string', 'max' => 255],
            [
                ['body'],
                'string', 'max' => 2025]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'controller_name' => 'Название контроллера',
            'action_name' => 'Название действия',
            'status_message_name' => 'Название сообщения',
            'subject' => 'Тема',
            'body' => 'Текст',
            'status_message_description' => 'Примечание',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
        ];
    }
}
