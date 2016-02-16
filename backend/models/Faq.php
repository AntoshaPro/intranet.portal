<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use backend\models\FaqCategory;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\User;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property string $faq_question
 * @property string $faq_answer
 * @property integer $faq_category_id
 * @property integer $faq_is_featured
 * @property integer $faq_weight
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 *
 * @property FaqCategory $faqCategory
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }


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
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faq_question', 'faq_answer'], 'required'],
            [['faq_category_id', 'faq_is_featured', 'faq_weight', 'created_by', 'updated_by'], 'integer'],
            [['faq_weight'], 'in', 'range' => range(1, 100)],
            ['faq_weight', 'default', 'value' => 100],
            [['created_at', 'updated_at'], 'safe'],
            [['faq_question'], 'string', 'max' => 255],
            [['faq_question'], 'unique'],
            [['faq_answer'], 'string', 'max' => 1055]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faq_question' => 'Вопрос',
            'faq_answer' => 'Ответ',
            'faq_category_id' => 'Категория',
            'faq_is_featured' => 'Faq Is Featured',
            'faq_weight' => 'Значимость',
            'created_by' => 'Кем создано',
            'updated_by' => 'Кем изменено',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
            'faqCategoryName' => Yii::t('app', 'Катеогрия'),
            'faqCategoryList' => Yii::t('app', 'Катеогрия'),
            'faqIsFeaturedName' => Yii::t('app', 'Опубликовано'),
            'createdByUserName' => Yii::t('app', 'Кем создано'),
            'updatedByUserName' => Yii::t('app', 'Кем изменено'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqCategory()
    {
        return $this->hasOne(FaqCategory::className(), ['id' => 'faq_category_id']);
    }

    /**
     * @return string
     */
    public function getFaqCategoryName()
    {
        return $this->faqCategory->faq_category_name;
    }

    public static function getFaqCategoryList()
    {
        $droptions = FaqCategory::find()->asArray()->all();
        return ArrayHelper::map($droptions, 'id', 'faq_category_name');
    }

    public static function getFaqIsFeaturedList()
    {
        return $droptions = [0 => "Не опубликовано", 1 => "Опубликовано"];
    }

    public function getFaqIsFeaturedName()
    {
        return $this->faq_is_featured == 0 ? "Не опубликовано" : "Опубликовано";
    }

    public function getCreatedByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public function getCreatedByUsername()
    {
        return $this->createdByUser ? $this->createdByUser->username : "- нет пользователя -";
    }

    public function getUpdatedByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    public function getUpdatedByUsername()
    {
        return $this->updatedByUser ? $this->updatedByUser->username : "-нет пользователя-";
    }
}
