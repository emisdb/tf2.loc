<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $product_group
 * @property int|null $item
 *
 * @property ExpD[] $expDs
 * @property InvD[] $invDs
 * @property ProductGroup $ProductGroup
 * @property Item $Item
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_group', 'item'], 'integer'],
            [['name'], 'string', 'max' => 102],
            [['product_group'], 'exist', 'skipOnError' => true, 'targetClass' => ProductGroup::className(), 'targetAttribute' => ['product_group' => 'id']],
            [['item'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item' => 'id']],
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
            'item' => 'Ед.',
        ];
    }

    /**
     * Gets query for [[ExpDs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpDs()
    {
        return $this->hasMany(ExpD::className(), ['product' => 'id']);
    }

    /**
     * Gets query for [[InvDs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvDs()
    {
        return $this->hasMany(InvD::className(), ['product' => 'id']);
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
     * Gets query for [[It0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasOne(Item::className(), ['id' => 'item']);
    }

 }
