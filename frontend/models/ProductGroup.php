<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_group".
 *
 * @property int $id
 * @property string $name
 * @property int|null $product_group
 * @property int|null $lf_key
 * @property int|null $rg_key
 * @property int|null $level
 *
 * @property Product[] $products
 * @property ProductGroup $ProductGroup
 * @property ProductGroup[] $productGroups
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['product_group', 'lf_key', 'rg_key', 'level'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['product_group'], 'exist', 'skipOnError' => true, 'targetClass' => ProductGroup::className(), 'targetAttribute' => ['product_group' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'product_group' => 'Группа',
            'lf_key' => 'Lf Key',
            'rg_key' => 'Rg Key',
            'level' => 'Уровень',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['product_group' => 'id']);
    }

    /**
     * Gets query for [[Cgr0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroup()
    {
       return $this->hasOne(ProductGroup::className(), ['id' => 'product_group']);
    }

    /**
     * Gets query for [[ProductGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroups()
    {
        return $this->hasMany(ProductGroup::className(), ['product_group' => 'id']);
    }

 }
