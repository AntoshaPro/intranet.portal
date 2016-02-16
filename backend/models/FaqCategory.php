<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faq_category".
 *
 * @property integer $id
 * @property string $faq_category_name
 * @property integer $faq_category_weight
 * @property integer $faq_category_is_featured
 *
 * @property Faq[] $faqs
 */
class FaqCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faq_category_name'], 'required'],
            [['faq_category_weight', 'faq_category_is_featured'], 'integer'],
            ['faq_category_weight', 'default', 'value' => 100],
            [['faq_category_weight'], 'in', 'range'=>range(1,100)],
            [['faq_category_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faq_category_name' => 'Название категории',
            'faq_category_weight' => 'Значимость от 1 до 100',
            'faq_category_is_featured' => 'Состояние публикации',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['faq_category_id' => 'id']);
    }

    public static function getFaqCategoryIsFeaturedList()
    {
        return $droptions = [0 => "Не опубликован", 1=> "Опубликован"];
    }
}
